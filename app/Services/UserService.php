<?php

namespace App\Services;

use App\Models\Entity\User;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;
use App\Lib\UserInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Message\Cookie\Cookie;
use Swoft\Task\Task;

/**
 * Demo servcie
 *
 * @method ResultInterface deferGetUsers(array $ids)
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferGetUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
 * @method ResultInterface deferLogin(string $username, string $password)
 * @method ResultInterface deferLoginLog(string $uid)
 * @method ResultInterface deferSwoftEncrypt(string $data, string $key = 'SWOFT', int $expire = 0)
 * @method ResultInterface deferSwoftDecrypt(string $data, string $key = 'SWOFT')
 *
 * @Service()
 */
class UserService implements UserInterface
{
    /**
     * @Inject()
     * @var \Swoft\Redis\Redis
     */
    private $redis;

    public function getUsers(array $ids)
    {
        return [$ids];
    }

    public function getUser(string $id)
    {
        return [$id];
    }

    /**
     * @Enum(name="type", values={1,2,3})
     * @Number(name="uid", min=1, max=10)
     * @Strings(name="name", min=2, max=5)
     * @Floats(name="price", min=1.2, max=1.9)
     *
     * @param int    $type
     * @param int    $uid
     * @param string $name
     * @param float  $price
     * @param string $desc  default value
     * @return array
     */
    public function getUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
    {
        return [$type, $uid, $name, $price, $desc];
    }

    public function login(string $username, string $password)
    {
        /* 获取用户数据 */
        //第一步从缓存里拿
        $user = $this->redis->hGet('login',$username);
        if(!$user) {
            //缓存里没有就从数据库里取
            $userEntity = new User();
            $userEntity->setUsername($username);
            $query = $userEntity->find();
            $user = $query->getResult();
            if($user){
                $user = $user[0];
                $this->redis->hSet('login', $username, json_encode($user));
                $this->redis->hSet('userInfo', $user['id'], json_encode($user));
            }
        } else {
            $user = json_decode($user, true);
        }
        if(is_array($user) && $user['status']){
            /* 验证用户密码 */
            if($this->userEncryption($password) === $user['password']){
                //$this->loginLog($user['id']); //更新用户登录信息
                //$result  = Task::deliver('user', 'loginLog', [$user['id']], Task::TYPE_ASYNC);
                return ['code'=>0, 'data'=>$user]; //登录成功，返回用户ID
            } else {
                return ['code'=>4002, 'msg'=>'密码错误'];
            }
        } else {
            return ['code'=>4001,'msg'=>'用户不存在或被禁用'];
        }

    }

    /*
     * 登录成功后的操作
     */

    public function loginLog(int $uid)
    {
        $user = $this->redis->hGet($uid, 'userInfo');
        if(!$user) return;
        $userEntity = new User();
        $userEntity->setId($uid);
        $userEntity->setLastLoginTime(time());
        $result = $userEntity->save()->getResult();
    }

    /**
     * 系统加密方法
     * @param string $data 要加密的字符串
     * @param string $key  加密密钥
     * @param int $expire  过期时间 单位 秒
     * @return string
     */
    public function swoftEncrypt(string $data, string $key = 'SWOFT', int $expire = 0) {
        $key  = md5(empty($key) ? 'SWOFT' : $key);
        $data = base64_encode($data);
        $x    = 0;
        $len  = strlen($data);
        $l    = strlen($key);
        $char = '';

        for ($i = 0; $i < $len; $i++) {
            if ($x == $l) $x = 0;
            $char .= substr($key, $x, 1);
            $x++;
        }

        $str = sprintf('%010d', $expire ? $expire + time():0);

        for ($i = 0; $i < $len; $i++) {
            $str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1)))%256);
        }
        return str_replace(array('+','/','='),array('-','_',''),base64_encode($str));
    }

    /**
     * 系统解密方法
     * @param  string $data 要解密的字符串 （必须是swoft_encrypt方法加密的字符串）
     * @param  string $key  加密密钥
     * @return string
     */
    public function swoftDecrypt(string $data, string $key = 'SWOFT'){
        $key    = md5(empty($key) ? 'SWOFT' : $key);
        $data   = str_replace(array('-','_'),array('+','/'),$data);
        $mod4   = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        $data   = base64_decode($data);
        $expire = substr($data,0,10);
        $data   = substr($data,10);

        if($expire > 0 && $expire < time()) {
            return '';
        }
        $x      = 0;
        $len    = strlen($data);
        $l      = strlen($key);
        $char   = $str = '';

        for ($i = 0; $i < $len; $i++) {
            if ($x == $l) $x = 0;
            $char .= substr($key, $x, 1);
            $x++;
        }

        for ($i = 0; $i < $len; $i++) {
            if (ord(substr($data, $i, 1))<ord(substr($char, $i, 1))) {
                $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
            }else{
                $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
            }
        }
        return base64_decode($str);
    }

    /*
     * 系统非常规MD5加密方法
     * @param  string $str 要加密的字符串
     * @return string
     */
    private function userEncryption($str, $key='SWOFT')
    {
        return '' === $str ? '' : md5(sha1($str) . $key);
    }
}
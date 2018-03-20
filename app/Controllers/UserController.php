<?php

namespace App\Controllers;

use App\Lib\UserInterface;
use Swoft\App;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\View\Bean\Annotation\View;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Integer;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Bean\Annotation\ValidatorFrom;
use Swoft\Http\Message\Server\Request;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Http\Message\Bean\Annotation\Middleware;
use App\Middlewares\AuthorizeMiddleware;
use Swoft\Http\Message\Cookie\Cookie;

/**
 * RESTful风格，用户控制器
 *
 * @Controller(prefix="/user")
 */
class UserController
{
    /**
     * @Reference(name="user")
     *
     * @var UserInterface
     */
    private $userService;

    /**
     * 查询列表接口
     * 地址:/user/
     *
     * @RequestMapping(route="/user", method={RequestMethod::GET})
     * @Middleware(AuthorizeMiddleware::class)
     *
     */
    public function index()
    {
        return ['list'];
    }

    /**
     * 登录处理
     * 地址:/user/login/
     *
     * @RequestMapping(route="login", method={RequestMethod::GET})
     * @View(template="user/login")
     */
    public function login()
    {
        return [];
    }

    /**
     * 登录页面
     * 地址:/user/login/
     *
     * @RequestMapping(route="login", method={RequestMethod::POST})
     * @Strings(from=ValidatorFrom::POST, name="username", min=3, max=10)
     * @Strings(from=ValidatorFrom::POST, name="password", min=3, max=10)
     */
    public function doLogin(Request $request, Response $response)
    {
        $username = $request->post('username');
        $password = $request->post('password');
        $result = $this->userService->login($username,$password);
        /* 记录登录SESSION和COOKIES */
        if($result['code'] == 0) {
            $auth = array(
                'uid' => $result['data']['id'],
                'username' => $result['data']['username'],
                'last_login_time' => $result['data']['last_login_time'],
            );
            $cookie = new Cookie('user_auth_sign', $this->userService->swoftEncrypt(http_build_query($auth)));
            $response->withCookie($cookie)->redirect('/user')->send();
        }
        return json_encode($result);
    }

    /**
     * 创建一个用户
     * 地址:/user
     *
     * @RequestMapping(route="/user", method={RequestMethod::POST,RequestMethod::PUT})
     *
     * @param Request $request
     *
     * @return array
     */
    public function create(Request $request)
    {
        $name = $request->input('name');

        $bodyParams = $request->getBodyParams();
        $bodyParams = empty($bodyParams) ? ["create", $name] : $bodyParams;

        return $bodyParams;
    }

    /**
     * 查询一个用户信息
     * 地址:/user/6
     *
     * @RequestMapping(route="{uid}", method={RequestMethod::GET})
     *
     * @param int $uid
     *
     * @return array
     */
    public function getUser(int $uid)
    {
        return ['getUser', $uid];
    }

    /**
     * 查询用户的书籍信息
     * 地址:/user/6/book/8
     *
     * @RequestMapping(route="{userId}/book/{bookId}", method={RequestMethod::GET})
     *
     * @param int    $userId
     * @param string $bookId
     *
     * @return array
     */
    public function getBookFromUser(int $userId, string $bookId)
    {
        return ['bookFromUser', $userId, $bookId];
    }

    /**
     * 删除一个用户信息
     * 地址:/user/6
     *
     * @RequestMapping(route="{uid}", method={RequestMethod::DELETE})
     *
     * @param int $uid
     *
     * @return array
     */
    public function deleteUser(int $uid)
    {
        return ['delete', $uid];
    }

    /**
     * 更新一个用户信息
     * 地址:/user/6
     *
     * @RequestMapping(route="{uid}", method={RequestMethod::PUT, RequestMethod::PATCH})
     *
     * @param int $uid
     * @param Request $request
     * @return array
     */
    public function updateUser(Request $request, int $uid)
    {
        $body = $request->getBodyParams();
        $body['update'] = 'update';
        $body['uid'] = $uid;

        return $body;
    }
}
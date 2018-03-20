<?php

namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 用户表
 *
 * @Entity()
 * @Table(name="user")
 * @uses      User
 * @version   2018年03月15日
 * @author    swoft <https://github.com/swoft-cloud/swoft>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class User extends Model
{
    /**
     * @var int $id
     * @Id()
     * @Column(name="id", type=Types::INT)
     */
    private $id = '';

    /**
     * @var string $username
     * @Column(name="username", type=Types::STRING, length=16)
     * @Required()
     */
    private $username = '';

    /**
     * @var string $password
     * @Column(name="password", type=Types::STRING, length=32)
     * @Required()
     */
    private $password = '';

    /**
     * @var string $email
     * @Column(name="email", type=Types::STRING, length=32)
     * @Required()
     */
    private $email = '';

    /**
     * @var string $mobile
     * @Column(name="mobile", type=Types::STRING, length=15)
     * @Required()
     */
    private $mobile = '';

    /**
     * @var int $create_time
     * @Column(name="create_time", type=Types::INT)
     * @Required()
     */
    private $create_time = '0';

    /**
     * @var string $create_ip
     * @Column(name="create_ip", type=Types::STRING, length=20)
     * @Required()
     */
    private $create_ip = '0';

    /**
     * @var int $last_login_time
     * @Column(name="last_login_time", type=Types::INT)
     * @Required()
     */
    private $last_login_time = '0';

    /**
     * @var string $last_login_ip
     * @Column(name="last_login_ip", type=Types::STRING, length=20)
     * @Required()
     */
    private $last_login_ip = '0';

    /**
     * @var int $update_time
     * @Column(name="update_time", type=Types::INT)
     * @Required()
     */
    private $update_time = '0';

    /**
     * @var bool $status
     * @Column(name="status", type=Types::BOOLEAN)
     */
    private $status = '0';

 
    /**
     * setId
     *
     * @param int $value
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * setUsername
     *
     * @param string $value
     *
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * setPassword
     *
     * @param string $value
     *
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * setEmail
     *
     * @param string $value
     *
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * setMobile
     *
     * @param string $value
     *
     * @return $this
     */
    public function setMobile(string $value): self
    {
        $this->mobile = $value;

        return $this;
    }

    /**
     * setCreateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->create_time = $value;

        return $this;
    }

    /**
     * setCreateIp
     *
     * @param string $value
     *
     * @return $this
     */
    public function setCreateIp(string $value): self
    {
        $this->create_ip = $value;

        return $this;
    }

    /**
     * setLastLoginTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setLastLoginTime(int $value): self
    {
        $this->last_login_time = $value;

        return $this;
    }

    /**
     * setLastLoginIp
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLastLoginIp(string $value): self
    {
        $this->last_login_ip = $value;

        return $this;
    }

    /**
     * setUpdateTime
     *
     * @param int $value
     *
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->update_time = $value;

        return $this;
    }

    /**
     * setStatus
     *
     * @param bool $value
     *
     * @return $this
     */
    public function setStatus(bool $value): self
    {
        $this->status = $value;

        return $this;
    }

 
    /**
     * getId
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getUsername
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * getPassword
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * getEmail
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * getMobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * getCreateTime
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * getCreateIp
     *
     * @return string
     */
    public function getCreateIp()
    {
        return $this->create_ip;
    }

    /**
     * getLastLoginTime
     *
     * @return int
     */
    public function getLastLoginTime()
    {
        return $this->last_login_time;
    }

    /**
     * getLastLoginIp
     *
     * @return string
     */
    public function getLastLoginIp()
    {
        return $this->last_login_ip;
    }

    /**
     * getUpdateTime
     *
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * getStatus
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

}

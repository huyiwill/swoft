<?php

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of demo service
 *
 * @method ResultInterface deferGetUsers(array $ids)
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferGetUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
 * @method ResultInterface deferLogin(string $username, string $password)
 * @method ResultInterface deferLoginLog(int $uid)
 * @method ResultInterface deferSwoftEncrypt(string $data, string $key = 'SWOFT', int $expire = 0)
 * @method ResultInterface deferSwoftDecrypt(string $data, string $key = 'SWOFT')
 */
interface UserInterface
{
    /**
     * @param array $ids
     *
     * @return array
     */
    public function getUsers(array $ids);

    /**
     * @param string $id
     *
     * @return array
     */
    public function getUser(string $id);

    public function getUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc");

    public function login(string $username, string $password);

    public function loginLog(int $uid);

    public function swoftEncrypt(string $data, string $key = 'SWOFT', int $expire = 0);

    public function swoftDecrypt(string $data, string $key = 'SWOFT');
}
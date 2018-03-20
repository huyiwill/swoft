<?php

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of demo service
 *
 * @method ResultInterface deferGetList(int $p = 1)
 * @method ResultInterface deferAdd(array $data)
 */
interface RoleInterface
{
    /**
     * @param $p
     */
    public function getList($p = 1);

    public function add($data);
}
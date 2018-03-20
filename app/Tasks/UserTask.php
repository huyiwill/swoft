<?php

namespace App\Tasks;

use App\Lib\UserInterface;
use Swoft\App;
use Swoft\Bean\Annotation\Inject;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Task\Bean\Annotation\Task;

/**
 * Sync task
 *
 * @Task("user")
 */
class UserTask
{
    /**
     * @Reference("user")
     *
     * @var UserInterface
     */
    private $userService;

    /**
     * Rpc task
     *
     * @return mixed
     */
    public function loginLog($uid)
    {
        return $this->userService->loginLog($uid);
    }

}

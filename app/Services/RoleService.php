<?php

namespace App\Services;

use App\Models\Entity\Role;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Db\Pool;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;
use App\Lib\RoleInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Db\EntityManager;
use Swoft\Task\Task;
use App\Pool\DbNcPool;

/**
 * Demo servcie
 *
 * @method ResultInterface deferGetList(int $p = 1)
 * @method ResultInterface deferAdd(array $data)
 *
 * @Service()
 */
class RoleService implements RoleInterface
{
    /**
     * @Inject()
     * @var \Swoft\Redis\Redis
     */
    private $redis;

    public function getList($p = 1)
    {
        $p = $p > 0 ? $p : 1;
        $offset = ($p-1)*20;
        $em = EntityManager::create();
        $query = $em->createQuery();
        $result = $query->select('*')->from(Role::class)->where('if_deleted', 0)
            ->orderBy('id', 'desc')->limit(20, $offset)->execute();
        $result = $result->getResult();
        //$sql = $query->getSql();
        $em->close();

        return $result;
    }

    public function add($data)
    {
        $role = new Role();
        $role->setName($data['name']);
        $role->setType($data['type']);
        $role->setDesc($data['desc']);
        $role->setCreateTime(time());
        $role->setUpdateTime(time());

        $result = $role->save('default.nc')->getResult();

//        $em = EntityManager::create();
//        //$query = $em->createQuery();
//        //$result = $query->insert('role')->set($data)->execute()->getResult();
//        $result = $em->save($role)->getResult();
//        $em->close();
        return $result;
    }

}
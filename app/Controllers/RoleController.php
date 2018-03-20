<?php

namespace App\Controllers;

use App\Lib\RoleInterface;
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
use Swoft\Bean\Annotation\Value;
use Swoft\Http\Message\Bean\Annotation\Middleware;
use App\Middlewares\AuthorizeMiddleware;
use Swoft\Http\Message\Cookie\Cookie;


/**
 * RESTful风格，用户控制器
 *
 * @Controller(prefix="/role")
 */
class RoleController
{
    /**
     * @Reference(name="role")
     *
     * @var RoleInterface
     */
    private $roleService;

    /**
     * @Value(name="${config.role.type}")
     */
    private $roleType;

    /**
     * 查询列表接口
     * 地址:/role
     *
     * @RequestMapping(route="/role", method={RequestMethod::GET})
     //* @Middleware(AuthorizeMiddleware::class)
     * @View(template="role/index")
     *
     */
    public function index()
    {
        $list = $this->roleService->getList();

        return ['data'=>$list, 'roleType'=>$this->roleType];
    }

    /**
     * 添加页面
     * 地址:/role/add
     *
     * @RequestMapping(route="add", method={RequestMethod::GET})
    //* @Middleware(AuthorizeMiddleware::class)
     * @View(template="role/add")
     *
     */
    public function add()
    {
        return view('role/add',[]);
    }

    /**
     * 添加操作
     * 地址:/role/add
     *
     * @RequestMapping(route="add", method={RequestMethod::POST})
    //* @Middleware(AuthorizeMiddleware::class)
     * @Strings(from=ValidatorFrom::POST, name="name", min=1, max=10)
     * @Strings(from=ValidatorFrom::POST, name="desc", min=1, max=10)
     *
     */
    public function doAdd(Request $request)
    {
        $data = $request->post();
        $result = $this->roleService->add($data);
    }
}
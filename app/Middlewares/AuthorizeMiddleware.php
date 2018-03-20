<?php

namespace App\Middlewares;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\Bean\Annotation\Bean;
use Swoft\Core\RequestContext;
use Swoft\Http\Message\Middleware\MiddlewareInterface;
use App\Lib\UserInterface;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Http\Message\Cookie\Cookie;

/**
 * @Bean()
 * @uses      CheckLoginMiddleware
 * @version   2018年03月13日
 * @author    zhoukaikai
 */
class AuthorizeMiddleware implements MiddlewareInterface
{

    /**
     * @Reference(name="user")
     *
     * @var UserInterface
     */
    private $userService;

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \InvalidArgumentException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);
        $response = $this->userAuthor($request, $response);
        return $response;
    }

    private function userAuthor(ServerRequestInterface $request, ResponseInterface $response)
    {
        $controller  = RequestContext::getContextDataByKey('controllerClass');
        $action = RequestContext::getContextDataByKey('controllerAction');
        /* @var \Swoft\Http\Message\Server\Response $response */
        if(strpos($controller,'App') === 0) {
            $cookies = $request->getCookieParams();
            if (!in_array($action, ['login', 'doLogin'])) {
                if (empty($cookies['user_auth_sign'])) {
                    $response->redirect('/user/login')->send();
                } else {
                    //parse_str($this->userService->swoftDecrypt($cookies['user_auth_sign']), $user);
                    //var_dump($user);
//                    if(empty($user['id'])){
//                        $cookie = new Cookie('user_auth_sign', '', -1);
//                        $response->redirect('/user/login')->send();
//                    }
                    //$accessList = $this->userService->getAccess($uid);
                    //$access = $this->userService
                }
            } else {
                if (!empty($cookies['user_auth_sign'])) {
                    /* @var \Swoft\Http\Message\Server\Response $response */
                    $response->redirect('/')->send();
                }
            }
        }
        return $response;
    }
}
<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Route;

use Zan\Framework\Foundation\Domain\HttpController as Controller;

class RouteController extends Controller
{
    public function route1()
    {
        $this->assign('routeParams', $this->request->query->all());
        $this->assign('testResult', 'current action is route1');
        yield $this->display('RouteModule/Test');
    }

    public function route2()
    {
        $this->assign('testResult', 'current action is route2');
        yield $this->display('RouteModule/Test');
    }
}
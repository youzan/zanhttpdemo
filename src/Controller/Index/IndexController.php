<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Com\Youzan\ZanHttpDemo\Demo\Service\HttpCall;
use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Model\Index\GetAllDemoData;

class IndexController extends Controller {

    public function index()
    {
        $response =  $this->output('success');
        $response->withHeaders(['Content-Type' => 'text/javascript']);
        yield $response;
    }

    public function showTpl()
    {
        //给模板中的变量赋值
        $this->assign("str", "Zan Framework");
        yield $this->display("Demo/test/test");
    }

    public function dbOperation()
    {
        $demo = new GetAllDemoData();
        yield $demo->doSql();
    }

    public function rpcRemoteService()
    {
        $http = new HttpCall();
        yield $http->visit();
    }
}
<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Com\Youzan\ZanHttpDemo\Demo\Service\HttpCall;
use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Model\Index\GetAllDemoData;

class IndexController extends Controller {

    //字符串输出示例
    public function index()
    {
        $response =  $this->output('success');
        //设置响应信息头部
        $response->withHeaders(['Content-Type' => 'text/javascript']);


        var_dump($this->request->server());
        yield $response;
    }

    //json输出示例
    public function json()
    {
        yield $this->r(0, 'json string', ["Hello" => "World"]);
    }

    //模板输出示例
    public function showTpl()
    {
        //给模板中的变量赋值
        $this->assign("str", "Zan Framework");
        //输出模板页面
        yield $this->display("Demo/test/test");
    }

    //操作数据库示例
    public function dbOperation()
    {
        $demo = new GetAllDemoData();
        //执行sql语句
        yield $demo->doSql();
    }

    //Http服务调用示例
    public function rpcRemoteService()
    {
        $http = new HttpCall();
        yield $http->visit();
    }
}
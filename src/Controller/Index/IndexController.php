<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Com\Youzan\ZanHttpDemo\Demo\Service\HttpCall;
use Com\Youzan\ZanHttpDemo\Demo\Service\NovaCall;
use Com\Youzan\ZanHttpDemo\Model\Index\GetCacheData;
use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Model\Index\GetDBData;
use Zan\Framework\Network\Http\Response\Response;

class IndexController extends Controller
{
    //字符串输出示例
    public function index()
    {
        yield $this->display("Demo/welcome/welcome");
    }

    public function exception()
    {
        throw new \Exception("service unavailable", 503);
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
        $demo = new GetDBData();
        //执行sql语句
        $result = (yield $demo->doSql());
        yield $this->r(0, 'json string', $result);
    }

    public function redisOperation()
    {
        $demo = new GetCacheData();

        //执行Redis命令
        $result = (yield $demo->doCacheCmd());
        yield $this->r(0, 'json string', $result);
    }

    //Http服务调用示例
    public function httpRemoteService()
    {
        $http = new HttpCall();
        $resp = (yield $http->visit());

        $resp = new Response($resp->getBody());
        $resp->withHeaders(['Content-Type' => 'text/javascript;charset=utf-8']);

        yield $resp;
    }

    // 调用 远程NOVA 服务
    public function novaRemoteService()
    {
        try {
            $tcp = new NovaCall();
            $result = (yield $tcp->invokeRemoteNovaMethod());
            yield $this->r(0, 'json string', $result);
        } catch (\Exception $e) {
            $msg = get_class($e) . ":" . $e->getMessage();
            sys_error($msg);
            yield $this->r(0, $msg, null);
        }
    }
}
<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Model\Index\GetAllDemoData;

class IndexController extends Controller {

    public function index()
    {
        $response =  $this->output('success');
        $response->withHeaders(['Content-Type' => 'text/javascript']);
        $demo = new GetAllDemoData();
        yield $demo->doSql();
        yield $response;
    }

    public function showTpl()
    {
        yield $this->display("Demo/test/test");
    }
}
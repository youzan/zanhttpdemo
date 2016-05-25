<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Com\Youzan\ZanHttpDemo\DemoModule\Service\System;
use Zan\Framework\Foundation\Domain\HttpController as Controller;

class IndexController extends Controller {
    public function index()
    {
        $systemService = new System(); 
        yield $systemService->sleep(20);
        $this->assign('testResult', 'hello, zanphp!');
        yield $this->display('DemoModule/Test');
    }
}
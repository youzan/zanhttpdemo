<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Zan\Framework\Network\Server\Timer\Timer;

class IndexController extends Controller {

    public function index()
    {
       
        $demoService = new DemoService();
        $value = (yield $demoService->testException());
        //yield $this->output($value);
        yield $this->output('hahaha');
        //throw new \Exception('biz exception', 11111);
    }
}
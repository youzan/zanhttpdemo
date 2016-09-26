<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Trace;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\NovaTcpDemo\Service\DemoService;

class TestController extends Controller {

    public function index()
    {
        $service = new DemoService();
        $result = (yield $service->echoBack('hello trace'));
        yield $this->output($result);
    }
}

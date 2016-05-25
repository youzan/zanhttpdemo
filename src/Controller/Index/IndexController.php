<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\NovaTcpDemo\Service\DemoService;

class IndexController extends Controller {

    public function index()
    {
        $demoService = new DemoService();
        $value = (yield $demoService->echoBack('hahaha'));
        var_dump($value);
        yield $this->output('success'); 
    }
}
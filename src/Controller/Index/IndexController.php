<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\NovaTcpDemo\Service\DemoService;

class IndexController extends Controller {
    const LEN_1K = 1024;

    public function index()
    {
        $filter = $this->request->get();
        //默认1K
        $len = isset( $filter['len']) ?  $filter['len'] : 1;
        $useTcp = $filter['tcp'] ? true : false;
        $testString = str_repeat('a', $len * self::LEN_1K);
        $result = null;

        if ($useTcp) {
            $demoService = new DemoService();
            $result = (yield $demoService->echoBack($testString));
        } else {
            $result = $testString;
        }
        yield $this->output($result);
    }
}
<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Refund\Baidu;

use Zan\Framework\Foundation\Domain\HttpController as Controller;

class RefundController extends Controller{

    public function index()
    {
        yield $this->output("多层级路由!");
    }
}
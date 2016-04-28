<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Zan\Framework\Foundation\Domain\HttpController as Controller;


class IndexController extends Controller {

    public function index()
    {
        yield $this->output('Hello Zanphp!');
    }
}
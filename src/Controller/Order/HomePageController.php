<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Order;

use Zan\Framework\Foundation\Domain\HttpController;

class HomePageController extends HttpController {
    public function index()
    {
        yield $this->output('This is default home page!');
    }

}
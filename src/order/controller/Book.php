<?php
namespace Zanhttp\Order\Controller;

use Zan\Framework\Foundation\Domain\Controller;
use Zanhttp\Order\Service\Order as OrderService;

class Book extends Controller {

    public function index()
    {
        $this->output('Hello Zanphp!');
    }

    public function detail()
    {
        $data = (yield (new OrderService())->getOrder());

        $this->output($data);
    }

}
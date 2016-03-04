<?php
namespace Zanhttp\Order\Controller;

use Zan\Framework\Foundation\Domain\Controller;
use Zanhttp\Order\Service\Pay;

class Book extends Controller {

    public function index()
    {
        $this->output('hello zanphp!');
    }

    public function pay()
    {
        $pay = new Pay();
        $data = (yield $pay->getData());

        var_dump('result:',$data);
        $this->output($data);
    }

    public function login()
    {
        $data = (yield $this->out('value'));

        $this->output($data);
    }

    private function out($val)
    {
        yield ['key' => $val];
    }

}
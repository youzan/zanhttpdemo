<?php
namespace Zanhttp\Order\Controller;

use Zan\Framework\Foundation\Domain\Controller;
use Zanhttp\Order\Service\Pay;

class Book extends Controller {

    public function index()
    {
        $this->output('hello world!');
    }

    public function pay()
    {
        $data = (yield (new Pay())->getData());

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
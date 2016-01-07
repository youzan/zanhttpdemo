<?php
namespace Zanhttp\Order\Controller;

use Zan\Framework\Foundation\Core\Config;
use Zan\Framework\Foundation\Domain\Controller;

class Book extends Controller{

    public function index()
    {
        $output = (yield $this->out('value'));
        $config = (yield $this->getHttpConfig());

        $this->output(array_merge($output, $config));
    }

    private function out($val)
    {
        yield ['key' => $val];
    }

    private function getHttpConfig()
    {
        yield Config::get('route');
    }

}
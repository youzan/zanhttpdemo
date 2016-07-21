<?php
namespace Com\Youzan\ZanHttpDemo\Middleware;

use Zan\Framework\Contract\Network\RequestTerminator;
use Zan\Framework\Contract\Network\Request;
use Zan\Framework\Contract\Network\Response;
use Zan\Framework\Utilities\DesignPattern\Context;

class DemoTerminator implements RequestTerminator
{
    public function terminate(Request $request, Response $response, Context $context)
    {
        yield 'demo terminate';
    }
} 
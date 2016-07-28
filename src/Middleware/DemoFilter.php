<?php
namespace Com\Youzan\ZanHttpDemo\Middleware;

use Zan\Framework\Contract\Network\RequestFilter;
use Zan\Framework\Contract\Network\Request;
use Zan\Framework\Utilities\DesignPattern\Context;

class DemoFilter implements RequestFilter
{
    public function doFilter(Request $request, Context $context)
    {
        var_dump(__CLASS__, __FUNCTION__);
    }
} 
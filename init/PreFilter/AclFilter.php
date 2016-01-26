<?php

namespace Zaninit\PreFilter;

use Zan\Framework\Foundation\Domain\Filter;
use Zan\Framework\Network\Http\Request;
use Zan\Framework\Network\Http\Response;

class AclFilter extends Filter {

    public function init()
    {
        echo "Acl init...\n";
    }

    public function doFilter(Request $request, Response $response)
    {
        echo "Acl doFilter...";
    }

    public function destruct()
    {
        echo "Acl destruct...";
    }
}
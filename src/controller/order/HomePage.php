<?php

namespace Zanhttp\Controller\Order;

use Zan\Framework\Foundation\Domain\Controller;
use Zan\Framework\Network\Contract\Response;
use Zan\Framework\Network\Http\Request;

class HomePage extends Controller {

    /**
     * If you want to use __construct, so...
     */
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);

        //todo...
    }

    public function index()
    {
        $this->output('This is default home page!');
    }

}
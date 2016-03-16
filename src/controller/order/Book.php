<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Order;

use Zan\Framework\Foundation\Domain\Controller;
use Com\Youzan\ZanHttpDemo\Service\Order as OrderService;

class Book extends Controller {

    public function index()
    {
        $this->output('Hello Zanphp!');
    }

    public function detail()
    {
        $orderNo = $this->request->get('order_no');
        $kdtId   = $this->request->get('kdt_id', 1);

        $data = (yield (new OrderService())->getOrder($orderNo, $kdtId));

        $this->r(0, 'success', $data);
    }

}
<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Order;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Service\Order as OrderService;
use Zan\Framework\Store\Facade\Db;

class BookController extends Controller {

    public function index()
    {
        yield $this->output('Hello Zanphp!');
    }

    public function detail()
    {
        $orderNo = $this->request->get('order_no');
        $kdtId   = $this->request->get('kdt_id', 1);

        $data = (yield (new OrderService())->getOrder($orderNo, $kdtId));

        $this->r(0, 'success', $data);
    }

    public function aa()
    {
//        phpinfo();
        $data = [
//            'insert' => [
//                    'kdt_id' => 777, 'alias' => '3nmpcq8q2my49', 'market_name' => '恩施服状批发大市场-jack2'
//                ]
            'var' => ['kdt_id' => 3311, 'buyer_id' => [1500062,2037413]], 'limit' => 1111
        ];
        $a = (yield DB::execute('demo.demo_sql_id1_2_all',$data));

        yield $this->output(var_export($a, true));
    }


}
<?php

namespace Com\Youzan\ZanHttpDemo\Service;

use Zan\Framework\Network\Http\Client;

class Order {

    public function getOrder($orderNo, $kdtId)
    {
        $option = [
            'order_no'     => $orderNo,
            'kdt_id'       => $kdtId,
            'format_order' => false,
            'with_items'   => false,
            'with_peerpay' => false,
            'with_source'  => false
        ];

        yield Client::call('trade.order.detail.byOrderNo', $option);
    }

}
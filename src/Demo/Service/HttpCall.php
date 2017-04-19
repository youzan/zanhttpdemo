<?php

namespace Com\Youzan\ZanHttpDemo\Demo\Service;

use Zan\Framework\Network\Common\Client;

class HttpCall {

    public function visit()
    {
        $option = [
            'order_no'     => 1,
            'kdt_id'       => 1,
            'format_order' => false,
            'with_items'   => false,
            'with_peerpay' => false,
            'with_source'  => false
        ];

        yield Client::call('trade.order.detail.byOrderNo', $option);
    }

}
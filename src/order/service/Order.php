<?php

namespace Zanhttp\Order\Service;

use Zan\Framework\Network\Http\Client;

class Order {

    public function getOrder()
    {
        $option = [
            'order_no'     => 'E20151012160739094114428',
            'kdt_id'       => 1,
            'format_order' => false,
            'with_items'   => false,
            'with_peerpay' => false,
            'with_source'  => false
        ];

        yield Client::call('trade.order.detail.byOrderNo', $option);
    }

}
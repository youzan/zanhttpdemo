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

        //trade.order.detail.byOrderNo对应包zan-config/zan/Apiconfig.php中的配置,新增url时需要修改配置
        yield Client::call('trade.order.detail.byOrderNo', $option);
    }
}
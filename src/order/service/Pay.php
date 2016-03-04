<?php

namespace Zanhttp\Order\Service;

use Zan\Framework\Network\Http\Client;

class Pay {

    public function getData()
    {
        $option = [
            'refundNo' => '123456',
            'refundState' => 2,
            'respond' => 11111
        ];
        $payResult = (yield Client::call('pay.refund.refundLog.syncRefundState', $option));
        var_dump('pay', $payResult);

        yield $payResult;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/5/15
 * Time: 下午7:08
 */

namespace Com\Youzan\ZanHttpDemo\Demo\Service;

use Com\Youzan\Demo\Service\DemoService;

class TcpCall {

    public function visit()
    {
        $result = [];

        $service = new DemoService();
        $result['Bool'] = (yield $service->returnBool());
        $result['Void'] = (yield $service->returnVoid());
        $result['I32'] = (yield $service->returnI32());
        $result['Double'] = (yield $service->returnDouble());
        $result['String'] = (yield $service->returnString());
        $result['Enum'] = (yield $service->returnEnum());
        $result['BaseStruct'] = (yield $service->returnBaseStruct());
        $result['MixedStruct'] = (yield $service->returnMixedStruct());
        $result['List'] = (yield $service->returnList());
        $result['Set'] = (yield $service->returnSet());
        $result['Map'] = (yield $service->returnMap());

        yield $result;
    }
}
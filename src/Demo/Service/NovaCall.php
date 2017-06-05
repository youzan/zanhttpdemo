<?php

namespace Com\Youzan\ZanHttpDemo\Demo\Service;


use Com\Yourcompany\Demo\Service\DemoService;

class NovaCall
{

    public function invokeRemoteNovaMethod()
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
<?php

namespace Com\Youzan\ZanHttpDemo\Demo\Service;

use Zan\Framework\Network\Common\HttpClient;

class HttpCall {

    public function visit()
    {
        $httpClient = HttpClient::newInstance("www.weather.com.cn");
        yield $httpClient->get("/data/sk/101110101.html");
    }
}
<?php

namespace Com\Youzan\ZanHttpDemo\Model\Index;

use Zan\Framework\Store\Facade\Cache;

class GetCacheData
{
    public function doCacheCmd()
    {
        //demo.demo_sql_id1_1对应resource/cache/demo.php中的配置
        yield Cache::set("demo.test.some_tpl", ["a", "b"], "HELLO");
        yield Cache::get("demo.test.some_tpl", ["a", "b"]);
    }
}
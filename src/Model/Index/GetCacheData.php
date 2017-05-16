<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/5/16
 * Time: 下午5:29
 */
namespace Com\Youzan\ZanHttpDemo\Model\Index;

use Zan\Framework\Store\Facade\Cache;

class GetCacheData {
    public function doCacheCmd()
    {
        yield Cache::set("pf.test.test", ["a", "b"], 1);
        //demo.demo_sql_id1_1对应resource/sql/demo.php中的配置
        yield Cache::get("pf.test.test", ["a", "b"]);
    }
}
<?php

namespace Com\Youzan\ZanHttpDemo\Model\Index;

use Zan\Framework\Store\Facade\Db;

class GetDBData
{
    public function doSql()
    {
        $data = [
            'limit' => 2
        ];
        //demo.demo_sql_id1_1对应resource/sql/demo.php中的配置
        yield Db::execute("demo.demo_sql_id1_1", $data);
    }
}
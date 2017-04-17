<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/4/17
 * Time: 上午9:55
 */
namespace Com\Youzan\ZanHttpDemo\Model\Index;

use Zan\Framework\Store\Facade\Db;

class GetAllDemoData {
    public function doSql()
    {
        $data = [
            'limit' => 2
        ];
        $result = (yield Db::execute("demo.demo_sql_id1_1", $data));
        var_dump($result);
    }
}
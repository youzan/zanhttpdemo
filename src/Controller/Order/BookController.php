<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Order;

use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Mockery\Exception;
use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Service\Order as OrderService;
use Zan\Framework\Store\Facade\Cache;
use Zan\Framework\Store\Facade\Db;
use Zan\Framework\Store\Database\Sql\SqlMapInitiator;

class BookController extends Controller {

    public function index()
    {
        yield $this->output('Hello Zanphp!');
    }

    public function detail()
    {
        $orderNo = $this->request->get('order_no');
        $kdtId   = $this->request->get('kdt_id', 1);

        $data = (yield (new OrderService())->getOrder($orderNo, $kdtId));

        $this->r(0, 'success', $data);
    }

    public function aa()
    {
//        phpinfo();
        $data = [
//            'insert' => [
//                    'kdt_id' => 777, 'alias' => '3nmpcq8q2my49', 'market_name' => '恩施服状批发大市场-jack2'
//                ]
            'var' => ['kdt_id' => 3311, 'buyer_id' => [1500062,2037413]], 'limit' => 1111, 'count' => '*'
        ];
        $data = [
            'inserts' => [
                ['kdt_id' => 111, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '11导入测试'],
                ['kdt_id' => 2221, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '22导入测试'],
                ['kdt_id' => 3331, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '33导入测试'],

            ]

        ];
        $data = [
            'insert' => [
                'kdt_id' => 111, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '11导入测试',

            ]

        ];
//        yield $this->output(var_export(1111111, true));
//        print_r($data);
        SqlMapInitiator::getInstance()->init();
//        $a = (yield DB::execute('deamon.mak.update_new_level_id', ['data' => ['old_level_id' => 123], 'and' => [['new_level_id', '=', '', 'new_level_id+3']], 'var' => ['id' => 827]]));

//        yield $this->output(var_export($a, true));
//        echo 'start:'."\r\n";
//        $a = (yield DB::execute('deamon.mak.insert',$data));
//
//        echo 'end;'."\r\n";

//        yield DB::beginTransaction();
        $data = [
            'insert' => [
                'kdt_id' => 111, 'aaaa' => 1211, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '11导入测试',

            ]

        ];
        try {
            $a = (yield DB::execute('deamon.mak.insert',$data));
            yield $this->output(var_export($a, true));
        } catch (\Exception $e) {
            echo $e->getMessage();
        }


    }

    public function test(){
        $time = time();
        $service = new DemoService();
        $result = (yield $service->echoBack('hello demo'));
        $end = time();
        yield $this->output([$time,$end]);
    }
    public function bb()
    {
        var_dump(111111111111111);
        $result = (yield Cache::set('pf.test.test', 'abc-0126', ['ab123', '098kkss']));
        var_dump($result);
        yield $this->output(var_export($result, true));
    }

    public function cc()
    {
        $result = (yield Cache::get('pf.test.test', ['ab123', '098kkss']));

        yield $this->output(var_export($result, true));
    }

    private function map_keys($keys, $config){
        $format = $config['key'];
        if($keys === null){
            return $format;
        }

        if(!is_array($keys)){
            $keys = [$keys];
        }
        $key = call_user_func_array('sprintf', array_merge([$format], $keys));
        return $key;
    }


}
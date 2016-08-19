<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Order;

use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Mockery\Exception;
use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Service\Order as OrderService;
use Zan\Framework\Store\Facade\Cache;
use Zan\Framework\Store\Facade\Db;
use Zan\Framework\Store\Database\Sql\SqlMapInitiator;
use Zan\Framework\Utilities\Types\Time;
use Zan\Framework\Network\Common\HttpClient;
use Zan\Framework\Sdk\Log\Log;
use Com\Youzan\ZanHttpDemo\Service\TestJob;

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
//        $data = [
//            'insert' => [
//                    'kdt_id' => 777, 'alias' => '3nmpcq8q2my49', 'market_name' => '恩施服状批发大市场-jack2'
//                ]
//            'var' => ['kdt_id' => 3311, 'buyer_id' => [1500062,2037413]], 'limit' => 1111, 'count' => '*'
//        ];
//        $data = [
//            'inserts' => [
//                ['kdt_id' => 111, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '11导入测试'],
//                ['kdt_id' => 2221, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '22导入测试'],
//                ['kdt_id' => 3331, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '33导入测试'],
//
//            ]
//
//        ];
//        $data = [
//            'insert' => [
//                'kdt_id' => 111, 'buyer_id' => 2, 'old_level_id' => 3, 'new_level_id' => 4, 'operation' => 'insert.test', 'operation_admin_id' => 6,  'create_time' => time(),  'update_time' => time(),  'remark' => '11导入测试',
//
//            ]
//
//        ];
//        yield $this->output(var_export(1111111, true));
//        print_r($data);
        $data = [
            'var' => [
                'kdt_id' => 3311, 'buyer_id' => 1500062,
            ],
            'count' => '*'
        ];

        SqlMapInitiator::getInstance()->init();
//        $a = (yield DB::execute('deamon.mak.update_new_level_id', ['data' => ['old_level_id' => 123], 'and' => [['new_level_id', '=', '', 'new_level_id+3']], 'var' => ['id' => 827]]));

//        yield $this->output(var_export($a, true));
//        echo 'start:'."\r\n";
//        $a = (yield DB::execute('deamon.mak.insert',$data));
//
//        echo 'end;'."\r\n";

//        yield DB::beginTransaction();
        $a = (yield DB::execute('deamon.mak.count_sql_id1_2_all', $data));

//        yield $this->output(var_export(212121, true));
        yield Log::make('debug')->info('mergeCustomerBasic 给U1添加 merge_yz_uid 成功', [
            'params' => func_get_args()
        ]);
        $a = (yield DB::execute('deamon.mak.count_sql_id1_2_all', $data));

        yield $this->output(var_export($a, true));

    }

    public function bb()
    {
        $result = (yield Cache::set('pf.test.test', 'abc-01267', ['ab123', '098kkss']));
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

    public function pp()
    {
        $job = new TestJob();
        $result = (yield $job->testPublish(['aaaa' => 'bbbbbb']));
        yield $this->output(var_export($result, true));
    }


}
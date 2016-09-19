<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Order;

use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Mockery\Exception;
use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\ZanHttpDemo\Service\Order as OrderService;
use Zan\Framework\Network\Common\Client;
use Zan\Framework\Store\Facade\Cache;
use Zan\Framework\Store\Facade\KV;
use Zan\Framework\Store\Facade\Db;
use Zan\Framework\Store\Database\Sql\SqlMapInitiator;
use Zan\Framework\Utilities\Types\Json;
use Zan\Framework\Utilities\Types\Time;
use Zan\Framework\Network\Common\HttpClient;
use Zan\Framework\Sdk\Log\Log;
use Com\Youzan\ZanHttpDemo\Service\TestJob;
use Com\Youzan\Material\General\Service\TokenService;

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
//        yield Log::make('debug')->info('mergeCustomerBasic 给U1添加 merge_yz_uid 成功', [
//            'params' => func_get_args()
//        ]);
//        $a = (yield DB::execute('deamon.mak.count_sql_id1_2_all', $data));

        yield $this->output(var_export($a, true));

    }

    public function bb()
    {
        $result = (yield Cache::set('pf.test.test', ['abc-01267', 'aaa'], ['ab123', '098kkss']));
        yield $this->output(var_export($result, true));
    }

    public function kv()
    {
        $result = (yield KV::set('test.cc', 11, '8888888888888'));
        var_dump('set kv=============', $result);
//        yield $this->output(var_export($result, true));
        $result = (yield KV::get('test.cc', ['a','b']));
        var_dump('get kv ===========', $result);
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
        $result = (yield $job->testPublish(['aaaa' => 'bbbbbb', 'key' => 2]));
        yield $this->output(var_export($result, true));
    }


    public function file()
    {
//        var_dump(iconv('UTF-16', 'UTF-8', $this->request->getContent()));
        yield $this->output(var_export(1, true));
//        yield $this->r(0,'更新成功',0);
    }

    public function pic()
    {
        $pictures = [
            'https://cbu01.alicdn.com/img/ibank/2016/328/603/2875306823_892503291.jpg',
            'https://cbu01.alicdn.com/img/ibank/2016/764/062/2878260467_892503291.jpg',
            'https://cbu01.alicdn.com/img/ibank/2016/764/752/2878257467_892503291.jpg',
            'https://cbu01.alicdn.com/img/ibank/2016/054/768/2876867450_892503291.jpg',
            'https://cbu01.alicdn.com/img/ibank/2016/067/452/2878254760_892503291.jpg',
            'https://cbu01.alicdn.com/img/ibank/2016/013/513/2875315310_892503291.jpg',
            'https://cbu01.alicdn.com/img/ibank/2016/995/903/2875309599_892503291.jpg'
        ];
        $coroutines = [];
        foreach ($pictures as $picture) {
            $coroutines[] = $this->uploadPictureToQiniu(3311, $picture);
        }

        $newPics = (yield parallel($coroutines));


        var_dump($newPics);
        yield $this->output(var_export($newPics, true));
    }

    private function uploadPictureToQiniu($kdtId, $picture)
    {
        $tokenService = new TokenService();
        $data = (yield $tokenService->fetch($kdtId, 'kdt_img_test', $picture, 0));
        if (null == $data) {
            yield null;
            return;
        }
        $data = Json::decode($data, true);
        if (isset($data['code']) && 0 == $data['code']) {
            yield isset($data['data']['attachment_full_url']) ? $data['data'] : null;
            return;
        }
        yield null;
    }

    public function clc()
    {
        $a = (yield Client::call('account.team.getTeamInfo', ['kdt_id' => 3311]));
        var_dump($a);
        yield $this->output(var_export($a, true));

    }

    public function ip()
    {
        var_dump($this->request);
        yield $this->output(var_export($this->request->getClientIps(), true));
    }


}
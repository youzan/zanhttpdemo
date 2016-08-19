<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/8/18
 * Time: 下午9:27
 */

namespace Com\Youzan\ZanHttpDemo\Service;

use Zan\Framework\Foundation\MQ\JobAbstract;
use Zan\Framework\Sdk\Queue\NSQ\Msg;
use Zan\Framework\Sdk\Queue\NSQ\Queue;

class TestJob extends JobAbstract
{
    const TOPIC = 'test_pifa_import_taobao_csv';

    const CHANNEL = 'default_t';

    protected static $keyFormat = 'fenxiao_goods_index_update_%s';

    protected static $name = 'fenxiao_goods_index_update';

    public static function makeData($test)
    {
        return [
            'test' => 111111
        ];
    }

    public function checkMsg()
    {
        return $this->checkData();
    }

    public function handleMsgError()
    {

    }

    protected static function makeKey(array $data)
    {
        return sprintf(
            static::$keyFormat,
            $data['test']
        );
    }

    public function doFiring()
    {
        var_dump('do fire=======');
        $data = $this->getData();
        $string = $data['test'];

        echo 'DO_FIRING::' . __CLASS__ . " DATA::" . json_encode($data) . "\n";

        if ($string == 'foo_d') {
            $result = (yield JobDispatcher::singleton()->publishFooJob('bar_e'));
            if (!$result) {
                echo "BAR_PUB::FAILED::" . __CLASS__ . "\n";
            }
        } else {
            yield taskSleep(500);
        }

        $this->ack();
        yield 1;
    }

    public function testPublish($data)
    {
        $payload = $this->makePayload($this->makeData($data));
        $result = (yield (new Queue())->publish(self::TOPIC, Msg::fromClient($payload)));
        yield JobAbstract::isOk($result);
    }
}
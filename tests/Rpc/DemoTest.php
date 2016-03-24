<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 00:26
 */

namespace Com\Youzan\ZanHttpDemo\Tests\Rpc;

use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Zan\Framework\Testing\TaskTest;

class DemoTest extends TaskTest {
    public function taskDemoRpcWork()
    {
        $service = new DemoService();
        $result = (yield $service->echoBack('hello demo'));

        $this->assertEquals('hello demo', $result, 'DemoService.echoBack rpc call failed');
    }
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 00:26
 */

namespace Com\Youzan\ZanHttpDemo\Tests\Rpc;

use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Zan\Framework\Testing\UnitTest;

class DemoTest extends UnitTest {
    public function testDemoRpcWork()
    {
        $client = new DemoService();
        $client->echoBack('hello demo');
    }
}
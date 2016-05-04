<?php

namespace Com\Youzan\ZanHttpDemo\Controller\Index;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Com\Youzan\NovaTcpDemo\Service\DemoService;

class IndexController extends Controller {

    public function index()
    {
        $filter = $this->request->get();

        $demoService = new DemoService();

        if (isset($filter['p'])) {
            $coroutines = [];
            for ($i = 0; $i < 10; $i++) {
                $coroutines[] = $demoService->echoBack('hello, world');
            }
            yield parallel($coroutines);
        } else {
            for ($i = 0; $i < 10; $i++) {
                yield $demoService->echoBack('hello, world');
            }
        }

        yield $this->output('hello, world');
    }
}
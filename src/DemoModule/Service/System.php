<?php

namespace Com\Youzan\ZanHttpDemo\DemoModule\Service;

class System
{
    public function sleep($ms)
    {
        yield taskSleep($ms);
    }
}
<?php

/**
 * Created by IntelliJ IDEA.
 * User: nuomi
 * Date: 16/4/15
 * Time: 上午11:10
 */

namespace Com\Youzan\ZanHttpDemo\Controller\Test;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Zan\Framework\Network\Http\Exception\InvalidRouteException;
use Zan\Framework\Network\Http\Exception\PageNotFoundException;
use Zan\Framework\Network\Http\Exception\RedirectException;

class ExceptionController extends Controller
{
    public function testInvalidRoute()
    {
        throw new InvalidRouteException();
        $this->assign('testResult', 'Failed');
        yield $this->display('test/test');
    }

    public function testPageNotFound()
    {
        throw new PageNotFoundException();
        $this->assign('testResult', 'Failed');
        yield $this->display('test/test');
    }

    public function testRedirect()
    {
        throw new RedirectException('https://youzan.com', 'test');
        $this->assign('testResult', 'Failed');
        yield $this->display('test/test');
    }
}

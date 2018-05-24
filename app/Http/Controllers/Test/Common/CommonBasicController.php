<?php
//基础测试类
namespace App\Http\Controllers\Test\Common;


use App\Http\Controllers\Test\TestBaseController;

class CommonBasicController extends TestBaseController
{
    //一次性执行
    public function testOnce()
    {
        return view('test.common.once', []);
    }

}

<?php
//测试接口基类
namespace App\Http\Controllers\Test;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class TestBaseController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);

    }

}

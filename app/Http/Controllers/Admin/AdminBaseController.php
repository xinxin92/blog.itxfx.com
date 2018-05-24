<?php
//后台接口基类
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class AdminBaseController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);

    }

}

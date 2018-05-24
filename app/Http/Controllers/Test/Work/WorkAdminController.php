<?php
//业务相关测试及查看
namespace App\Http\Controllers\Test;
use App\Exceptions\ApiException;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Artisan;

class WorkAdminController extends BaseController
{
    //单次执行Command
    public function execCommandOnce()
    {
        $params = $this->request->all();
        if (empty($params['class'])) {
            throw new ApiException('class error');
        }
        if (empty($params['func'])) {
            throw new ApiException('func error');
        }

        echo  '开始执行：'.'<br>';
        set_time_limit(0);
        Artisan::call($params['class'], ['func' => $params['func']]);
    }
    
}

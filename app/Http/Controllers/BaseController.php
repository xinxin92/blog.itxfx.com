<?php
//接口基类
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
	protected $request;
	protected $userInfo = [];
	protected $userId = 0;
    protected $userName = '';

	public function __construct(Request $request)
	{
		$this->request = $request;
		if($this->request->method() == 'POST') {
			$data = file_get_contents('php://input');
			if (!empty($data)) {
				$rawJson = json_decode($data, true);
				if (json_last_error() != JSON_ERROR_NONE) {
					$rawJson = [];
				}
				$this->request->merge($rawJson);
			}
		}
		//用户信息
        $this->userInfo = $this->request->get('userInfo', []);
        if($this->userInfo){
            $this->userId = $this->userInfo['user_id'];
            $this->userName = $this->userInfo['full_name'];
        }
	}

	//成功返回
	protected function returnSuccess($data = '')
	{
		$returnData = json_encode(['code'=>config('common.response_code.success'), 'msg'=>'success','data'=> $data], JSON_UNESCAPED_UNICODE);
		if (json_last_error() == JSON_ERROR_NONE){
			return $returnData;
		} else{
			return json_encode(['code'=>config('common.response_code.fail'), 'msg'=>'json非法字符', 'data'=>''], JSON_UNESCAPED_UNICODE);
		}
	}
	
}

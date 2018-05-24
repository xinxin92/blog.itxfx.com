<?php
//系统功能相关测试及查看
namespace App\Http\Controllers\Test;

use App\Http\Controllers\BaseController;

class SysBasicController extends BaseController
{
    //redis相关
    public function redis()
    {
        try {
            $redisObj = app('RedisCommon');
            $order = $this->request['order'];
            $echo = $this->request['echo'];
            $p1 = $this->request['p1'];
            $p2 = $this->request['p2'];
            $orderList = ['lSize', 'get', 'set', 'delete', 'ttl', 'get_unhandled', 'set_unhandled'];

            if(!in_array($order, $orderList)) return 'order error';

            if(empty($p1)){
                $info = $redisObj->$order();
            }else{
                if(empty($p2)){
                    $info = $redisObj->$order($p1);
                }else{
                    $info = $redisObj->$order($p1, $p2);
                }
            }
            echo '<pre>';
            if($echo == 1){
                var_dump($redisObj->redisq);
                var_dump(config('database.redis_q_server'));
            }
            var_dump($info);

        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }

    //队列相关
    public function queue()
    {
        $queue = app('redis')->connection('default')->lrange('queues:'.'csapi', 0, -1);
        return ['count'=>count($queue),'$queue'=>$queue];
    }

    //系统相关
    public function swz()
    {
        $params = $this->request->all();
        if ($params['type'] == 'server') {
            return $_SERVER;
        } elseif ($params['type'] == 'cron') {
            return file_get_contents('/usr/local/nginx/conf/cron.conf');
        } elseif ($params['type'] == 'env') {
            return $_ENV;
        } elseif ($params['type'] == 'ip') {
            $ip = getClientIp();
            dd($ip);
        } else if ($params['type'] == 'is') {
            dd(isProduction());
        } else if ($params['type'] == 'ps') {
            $key = $this->request['key'];
            $shell = "ps aux|grep $key|grep -v 'grep'";
            $ret = passthru($shell);
            echo $ret;
            exit;
        } else if ($params['type'] == 'phpinfo') {
           echo phpinfo();
        }
        return 1;
    }

}

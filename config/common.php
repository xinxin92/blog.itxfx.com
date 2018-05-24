<?php

return [
    //接口返回code类型（系统级）,自定义的code必须在[-10~10]之外！
    'response_code' => [
        'success' => 1,          //业务成功
        'fail' => 0,             //业务失败
        'illegal' => -1,         //非法访问
        'noLogin' => -2,         //未登录
        'noPrivilege' => -3,     //没有权限
        'error' => -10,          //系统错误
    ],
];

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//测试模块
Route::group([
    'prefix' => 'test/common',
    'namespace' => 'Test\Common',
//    'middleware' => ['checkLogin'],
], function ($app) {
    $app->get('basic/test_once', 'CommonBasicController@testOnce');
});


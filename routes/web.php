<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 注册web路由
|--------------------------------------------------------------------------
*/

/**
 * get 表明这个路由将会响应 GET 请求，并将请求映射到指定的控制器动作上
 * get 方法
 * 第一个参数：指定URL
 * 第二个参数：指定处理URL的控制操作
 * 向 weibo.test/ 发出了一个请求 将会由 StaticPagesController 的 home 方法进行处理
 * GET 常用于页面读取
 * POST 常用于数据提交
 * PATCH 常用于数据更新
 * DELETE 常用于数据删除
 */
Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');

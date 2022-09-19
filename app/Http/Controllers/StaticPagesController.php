<?php

// 命名空间 PHP 5.3以后引入的
namespace App\Http\Controllers;

// 引用在 PHP 文件中要使用的类
use Illuminate\Http\Request;

// 继承父类Controller， 在该类中可以任意使用父类中除私密方法外的其它方法
class StaticPagesController extends Controller{

    /**
     * 视图渲染
     * 默认情况下，所有的视图文件都存放在 resources/views 文件夹下
     * Blade 是 Laravel 中提供的一套模板引擎，在 Blade 视图中我们可以使用 Laravel 为这套引擎定义的一些默认方法，并完全兼容 PHP 语法
     * 在项目运行时，Laravel 会把所有的 Blade 视图进行编译缓存成普通的 PHP 代码
     */

    // 处理 / 请求的方法
    public function home(){
        // 将会渲染在 resources/views 文件夹下的 static_pages/home.blade.php 文件
        return view('static_pages/home');
    }

    // 处理 /help 的方法
    public function help(){
        return view('static_pages/help');
    }

    // 处理 /about 的方法
    public function about(){
        return view('static_pages/about');
    }

}

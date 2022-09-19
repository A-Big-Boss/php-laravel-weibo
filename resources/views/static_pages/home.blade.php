{{--
  Laravel 的 Blade 模板支持继承，这意味多个子视图可以共用父视图提供的视图模板
  过传参来继承父视图 layouts/default.blade.php 的视图模板
  --}}
@extends('layouts.default')

@section('title', '主页')

{{--
  使用 @section 和 @stop 代码来填充父视图的 content 区块，所有包含在 @section 和 @stop 中的代码都将被插入到父视图的 content 区块
  @stop 标识来告诉 Laravel 填充区块会在具体哪个位置结束
--}}
@section('content')
  <h1>首页</h1>
@stop


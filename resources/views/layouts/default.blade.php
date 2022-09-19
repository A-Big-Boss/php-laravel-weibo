{{-- 整个应用的基础视图 --}}
<!DOCTYPE html>
<html>
  <head>
    {{--
      让不同页面显示不同的标题
      第一个参数是该区块的变量名称，
      第二个参数是默认值，表示当指定变量的值为空值时，使用 Weibo App 来作为网页标题
       --}}
    <title>@yield('title', 'Weibo App') - Laravel 入门项目</title>
  </head>
  <body>
    {{-- 该占位区域将用于显示 content 区块的内容，而 content 区块的内容将由继承自 default 视图的子视图定义 --}}
    @yield('content')
  </body>
</html>

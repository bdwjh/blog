<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Weibo App') - 我的练习程序
        </title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        @include('layouts._header')
        @yield('content')
        @include('layouts._footer')
    </body>
</html>
<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="icon" href="images/hj/Logo2.png">
	    <link rel="apple-touch-icon" href="images/hj/Logo2.png">

        <!-- css -->
        <link rel="stylesheet" href="/assets/css/main.css" />


        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>

    @yield('open')
        <div id="page-wrapper">
            <!-- header -->
            @if($param['sub'] == 'Y')
                @include('layout.header.subheader')
            @else
                @include('layout.header.header')
            @endif

            <div id="wrap">
                @yield('content')
            </div>

            <!-- footer -->
            <!-- 공통 스크립트 -->
            @include('layout.footer.footer')
        </div>
    @yield('close')
</html>
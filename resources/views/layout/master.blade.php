<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <!-- css -->
        <link rel="stylesheet" href="assets/css/main.css" />


        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="homepage">
        <div id="page-wrapper">
            <!-- header -->
            @include('layout.header.header')

            <div id="wrap">
                @yield('content')
            </div>

            <!-- footer -->
            <!-- 공통 스크립트 -->
            @include('layout.footer.footer')
        </div>
    </body>
</html>
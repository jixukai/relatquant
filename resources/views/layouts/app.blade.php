<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'RelatQuant') - 相对量化</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- 下句script的作用，有待研究清楚，G2图表示例中自带 -->
    <!-- <script>/*Fixing iframe window.innerHeight 0 issue in Safari*/document.body.clientHeight;</script> -->
    <script src="https://gw.alipayobjects.com/os/antv/pkg/_antv.g2-3.2.4/dist/g2.min.js"></script>
    <script src="https://gw.alipayobjects.com/os/antv/pkg/_antv.data-set-0.8.9/dist/data-set.min.js"></script>
</head>

<body>
    <!-- 下面的class或许用不到，回头再改，定义在辅助函数helper.php -->
    <!-- <div id="app" class="{{ route_class() }}-page"> -->
    <div id="relatquant">
        @include('layouts._header')

        <div class="container">

            @yield('content')

        </div>

        @include('layouts._footer')
    </div>


</body>
</html>
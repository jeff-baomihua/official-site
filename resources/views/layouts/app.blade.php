<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '网络公司') - 官网</title>

    <!-- Styles -->
{{--    <link href="{{ asset('/res/css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ '/res/layui/css/layui.css' }}">
    <link rel="stylesheet" href="{{ '/res/static/css/index.css' }}">
    <link rel="stylesheet" href="{{ '/res/static/css/app.css' }}">

</head>

<body>

    @include('layouts._header')


{{--        @include('shared._messages')--}}

    @yield('content')

    @include('layouts._footer')
<!-- Scripts -->
<script src="{{ '/res/js/app.js?t='.time() }}"></script>
<script src="{{ '/res/layui/layui.js' }}"></script>
<script>
    layui.config({
        base: "{{ '/res/static/js/' }}"
    }).use('firm');
</script>

@yield('script')

</body>

</html>
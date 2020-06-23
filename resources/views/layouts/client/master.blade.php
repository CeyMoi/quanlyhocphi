<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('layouts.client.header')
        @include('layouts.client.left-sidebar')
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                @yield('content')
            </div>
            @include('layouts.client.footer')
        </div>
    </div>
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/libs/js/main-js.js') }}" type="text/javascript"></script>
</html>
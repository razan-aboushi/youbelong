<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>You Belong</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("css/fontawesome-all.min.css") }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
    </head>
    <body>
        <main id="wrapper">
            @include('partials.user-left-sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('partials.user-top-sidebar')
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset("js/jquery.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/admin.js") }}"></script>
        <script src="{{ asset("js/jquery.easing.js") }}"></script>
        <script src="{{ asset("js/chart.js") }}"></script>
        <script src="{{ asset("js/chart-area.js") }}"></script>
        <script src="{{ asset("js/chart-pie.js") }}"></script>
    </body>
</html>
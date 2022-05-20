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
        <link rel="stylesheet" href="{{ asset("plugins/summernote/summernote-bs4.css") }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/datatables.css') }}" >
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
        <script src="{{ asset("js/jquery-slim.js") }}"></script>
        <script src="{{ asset("js/popper.js") }}"></script>
        <script src="{{ asset("js/jquery.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/admin.js") }}"></script>
        <script src="{{ asset("plugins/summernote/summernote-bs4.js") }}"></script>
        <script src="{{ asset("js/jquery.easing.js") }}"></script>
        <script src="{{ asset("plugins/datatable/pdfmake.js") }}"></script>
        <script src="{{ asset("plugins/datatable/vfs_fonts.js") }}"></script>
        <script src="{{ asset("plugins/datatable/datatables.js") }}"></script>
        <script>
            $(document).ready(function() {
                $('.datatable-export').DataTable( {
                    searching: false,
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            });

            $(document).ready(function() {
                $('.datatable').DataTable( {
                    searching: false,
                });
            });
        </script>

    </body>
</html>
<!doctype html>
<html class="no-js") }} lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>You Belong</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/animate.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
        <link rel="stylesheet" href={{ asset("css/fontawesome-all.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/bootstrap-datepicker.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/flaticon.css") }}>
        <link rel="stylesheet" href={{ asset("css/odometer.css") }}>
        <link rel="stylesheet" href={{ asset("css/aos.css") }}>
        <link rel="stylesheet" href={{ asset("css/slick.css") }}>
        <link rel="stylesheet" href={{ asset("css/default.css") }}>
        <link rel="stylesheet" href={{ asset("css/style.css") }}>
        <link rel="stylesheet" href={{ asset("css/responsive.css") }}>
    </head>
    <body>
        @include('partials.site-header')

        <main>
            @yield('content')
        </main>

        @include('partials.site-footer')

		<!-- JS here -->
        <script src={{ asset( "js/jquery-3.5.0.min.js") }} ) }}></script>
        <script src={{ asset( "js/popper.min.js") }}></script>
        <script src={{ asset( "js/bootstrap.min.js") }}></script>
        <script src={{ asset( "js/isotope.pkgd.min.js") }}></script>
        <script src={{ asset( "js/imagesloaded.pkgd.min.js") }}></script>
        <script src={{ asset( "js/jquery.magnific-popup.min.js") }}></script>
        <script src={{ asset( "js/owl.carousel.min.js") }}></script>
        <script src={{ asset( "js/jquery.odometer.min.js") }}></script>
        <script src={{ asset( "js/bootstrap-datepicker.min.js") }}></script>
        <script src={{ asset( "js/jquery.appear.js") }}></script>
        <script src={{ asset( "js/js_jquery.knob.js") }}></script>
        <script src={{ asset( "js/slick.min.js") }}></script>
        <script src={{ asset( "js/ajax-form.js") }}></script>
        <script src={{ asset( "js/wow.min.js") }}></script>
        <script src={{ asset( "js/aos.js") }}></script>
        <script src={{ asset( "js/plugins.js") }}></script>
        <script src={{ asset( "js/main.js") }}></script>
    </body>
</html>
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
        <header>
            <div id="header-sticky" class="header-top-area menu-area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about-us') }}">About</a></li>
                                            <li><a href="{{ route('contact-us') }}">Contacts</a></li>
                                            <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-sticky-two" class="main-header menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="d-block d-lg-flex align-items-center">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="main-header-contact d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <div class="header-contact-box">
                                                <div class="h-contact-icon">
                                                    <img src="img/icon/envelope.png" alt="">
                                                </div>
                                                <div class="h-contact-content">
                                                    <h5>email address</h5>
                                                    <span>info@youbelong.com</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="header-contact-box">
                                                <div class="h-contact-icon">
                                                    <img src="img/icon/phone.png" alt="">
                                                </div>
                                                <div class="h-contact-content">
                                                    <h5>Phone Number</h5>
                                                    <span>+123456789</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>

                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fal fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="main-header-contact">
                                        <ul>
                                            <li>
                                                <div class="header-contact-box">
                                                    <div class="h-contact-icon">
                                                        <img src="img/icon/envelope.png" alt="">
                                                    </div>
                                                    <div class="h-contact-content">
                                                        <h5>email address</h5>
                                                        <span>info@youbelong.com</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="header-contact-box">
                                                    <div class="h-contact-icon">
                                                        <img src="img/icon/phone.png" alt="">
                                                    </div>
                                                    <div class="h-contact-content">
                                                        <h5>Phone Number</h5>
                                                        <span>+123456789</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="footer-top-area theme-bg pt-180 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="img/logo/w_logo.png" alt=""></a>
                                </div>
                                <div class="footer-text mb-35">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="footer-widget pt-30 mb-50">
                                <div class="fw-title mb-40">
                                    <h4 class="title">related Links</h4>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">home</a></li>
                                        <li><a href="#">about us</a></li>
                                        <li><a href="#">servoces</a></li>
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">terms & codtions</a></li>
                                        <li><a href="#">contact</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">privacy policy</a></li>
                                        <li><a href="#">terms of use</a></li>
                                        <li><a href="#">copyright</a></li>
                                        <li><a href="#">careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="footer-widget pt-30 mb-50">
                                <div class="fw-title mb-40">
                                    <h4 class="title">related news</h4>
                                </div>
                                <div class="fw-post">
                                    <ul>
                                        <li>
                                            <div class="fw-post-thumb">
                                                <a href="blog-details.html"><img src="img/blog/fw_post_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="fw-post-content">
                                                <span class="date">23rd december 2021</span>
                                                <h4><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="fw-post-thumb">
                                                <a href="blog-details.html"><img src="img/blog/fw_post_thumb02.jpg" alt=""></a>
                                            </div>
                                            <div class="fw-post-content">
                                                <span class="date">23rd december 2021</span>
                                                <h4><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="fw-post-thumb">
                                                <a href="blog-details.html"><img src="img/blog/fw_post_thumb03.jpg" alt=""></a>
                                            </div>
                                            <div class="fw-post-content">
                                                <span class="date">23rd december 2021</span>
                                                <h4><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur.</a></h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area primary-bg py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <h6>Copyright © {{ date('Y') }} All Rights Reserved.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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

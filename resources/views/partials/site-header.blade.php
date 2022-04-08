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
                            <a href="{{ route('home') }}"><img src="img/logo/logo.png" alt=""></a>
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
                            <div class="nav-logo"><a href="{{ route('home') }}"><img src="img/logo/logo.png" alt="" title=""></a>
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
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
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
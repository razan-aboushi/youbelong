<footer>
    <div class="free-quote-area">
        <div class="container">
            <div class="free-quote-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6">
                        <div class="free-quote-img"  style="background-image: url({{ asset('img/images/free_quote_img.jpg')}});"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="free-quote-content">
                            <h4>Announce here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="free-quote-icon"><i class="flaticon-headphones"></i></div>
            </div>
        </div>
    </div>

    <div class="footer-top-area theme-bg pt-130 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-40">
                            <h4 class="title">You Belong</h4>
                        </div>
                        <div class="footer-text mb-35">
                            <p>This site is designed to link care homes with community "individuals and organizations" who wish to provide assistance and donate to them,
                                 and to facilitate the process of knowing care homes and their various needs</p>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="footer-widget">
                        <div class="fw-title mb-40">
                            <h4 class="title">related Links</h4>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About</a></li>
                                <li><a href="{{ route('contact-us') }}">Contacts</a></li>
                                <li><a href="{{ route('care-homes') }}">Care Homes</a></li>
                                <li><a href="{{ route('announcements') }}">Care Home Announcements</a></li>
                                <li><a href="{{ route('events') }}">Care Home Events</a></li>
                                <li><a href="{{ route('articles') }}">Articls</a></li>
                                <li><a href="{{ route('privacy-policy') }}">privacy policy</a></li>
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
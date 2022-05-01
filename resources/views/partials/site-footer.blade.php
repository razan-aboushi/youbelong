<footer>
    <div class="footer-top-area theme-bg pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-40">
                            <h4 class="title">You Belong</h4>
                        </div>
                        <div class="footer-text mb-35">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
                                <li><a href="{{ route('care-home-events') }}">Care Home Events</a></li>
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
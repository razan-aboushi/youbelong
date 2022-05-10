<footer>    
    <div class="free-quote-area">
        <div class="container">
            <div class="free-quote-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6">
                        @if ($active_ad)
                        @php $profile = $active_ad->banner ?  asset('storage/ads/'.$active_ad->banner) : asset('img/default-ad.jpg');   @endphp

                            <a href="{{ route('utm', $active_ad->id) }}" target="_blank">
                                <div class="free-quote-img"  style="background-image: url({{ $profile  }});"></div>
                            </a>
                        @else
                            <div class="free-quote-img"  style="background-image: url({{ asset('img/default-ad.jpg') }});"></div>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="free-quote-content">
                            <h4>Advertise here</h4>
                            <p>Get your business in front of thousands guests.</p>
                            <a class="btn btm-sm mt-3" href="{{ route('contact-us') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top-area theme-bg pt-140 pb-70">
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
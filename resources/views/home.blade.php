@extends('layouts.app')
@section('content')

    <!-- slider-area -->
    <section class="slider-area slider-x-margin">
        <div class="slider-active">
            <div class="single-slider slider-bg d-flex align-items-center" data-background="img/slider/slider_bg01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content text-center">
                                <h3 data-animation="fadeInUp" data-delay=".3s">You can't always be there</h3>
                                <h2 data-animation="fadeInUp" data-delay=".3s">But we can</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-slider slider-bg d-flex align-items-center" data-background="img/slider/slider_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s">Extraordinary Every day</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- about-us-area -->
    <section class="about-us-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pr-80 mb-50">
                        <h6 class="sub-title">about us</h6>
                        <h2 class="title">Drop by drop can generate a river of goodness</h2>
                    </div>
                    <div class="about-us-btn">
                        <a href="{{ route('about-us') }}" class="btn">Read More <i class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="about-inner-wrap">
                            <p>Financial and psychological support is very important for any of us, how if he is one of the elderly who have been left without a helper or child, the feeling of deprivation and inferiority and that they are not part of society in addition to being dependent on everyone, it can cause them depression and psychological pressure; That is why we wanted to tell them that we are by their side, provide material and moral support, and restore the feeling of love and affection for them, and that they belong to us, as they are not part of the society, but rather they are the entire society.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us-area-end -->

    <!-- services-area -->
    <section class="services-area pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item text-center mb-30">
                        <div class="services-overlay-icon"><i class="flaticon-capsules"></i></div>
                        <div class="service-content">
                            <h6 class="count">01</h6>
                            <h3><a href="services-details.html">medical care</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incidid.</p>
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-capsules"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item text-center mb-30">
                        <div class="services-overlay-icon"><i class="flaticon-old-man"></i></div>
                        <div class="service-content">
                            <h6 class="count">02</h6>
                            <h3><a href="services-details.html">resident care</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incidid.</p>
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-old-man"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item text-center mb-30">
                        <div class="services-overlay-icon"><i class="flaticon-pinwheel"></i></div>
                        <div class="service-content">
                            <h6 class="count">03</h6>
                            <h3><a href="services-details.html">independent</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incidid.</p>
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-pinwheel"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item text-center mb-30">
                        <div class="services-overlay-icon"><i class="flaticon-clock"></i></div>
                        <div class="service-content">
                            <h6 class="count">04</h6>
                            <h3><a href="services-details.html">memory care</a></h3>
                            <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incidid.</p>
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-clock"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- skill-area -->
    <section class="skill-area theme-bg pt-120 pb-120">
        <div class="skill-overlay-img" data-background="img/images/skill_overlay_img.jpg">
            <a href="https://www.youtube.com/watch?v=YPF_KMixLNE" class="popup-video"><i class="fas fa-play"></i></a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="section-title white-title mb-50">
                        <h6 class="sub-title">skills</h6>
                        <h2 class="title">Our Amenities & how it looks like</h2>
                        <p class="title-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim ven iam, quis nostrud exercitation ullamco laboris.</p>
                    </div>
                    <div class="skill-wrap">
                        <div class="single-skill-item">
                            <h6>Friendly companionship</h6>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"><span>75%</span></div>
                            </div>
                        </div>
                        <div class="single-skill-item">
                            <h6>elderly care service</h6>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".4s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"><span>90%</span></div>
                            </div>
                        </div>
                        <div class="single-skill-item">
                            <h6>personal care</h6>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".6s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"><span>65%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area-end -->

    <!-- fact-area -->
    <section class="fact-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/fact_icon01.png" alt="">
                            </div>
                            <h2><span class="odometer" data-count="80">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>country coverage</h4>
                            <p>Lorem ipsum dolor sit amet, con etur adipisicing elit, sed do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/fact_icon02.png" alt="">
                            </div>
                            <h2><span class="odometer" data-count="100">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>get award this year</h4>
                            <p>Lorem ipsum dolor sit amet, con etur adipisicing elit, sed do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/fact_icon03.png" alt="">
                            </div>
                            <h2><span class="odometer" data-count="2999">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>happy family users</h4>
                            <p>Lorem ipsum dolor sit amet, con etur adipisicing elit, sed do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/fact_icon04.png" alt="">
                            </div>
                            <h2><span class="odometer" data-count="3921">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>cup of coffee & tea</h4>
                            <p>Lorem ipsum dolor sit amet, con etur adipisicing elit, sed do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-area-end -->

    <!-- faq-area -->
    <section class="faq-area pt-65 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-0 order-lg-2">
                    <div class="faq-img-wrap">
                        <div class="top-img"><img src="img/images/faq_img02.jpg" alt=""></div>
                        <img src="img/images/faq_img01.jpg" alt="">
                        <div class="bottom-img"><img src="img/images/faq_img03.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6 pr-70">
                    <div class="section-title mb-50">
                        <h6 class="sub-title">faq</h6>
                        <h2 class="title">get any kind answers here right now.</h2>
                    </div>
                    <div class="faq-wrap">
                        <div class="faq-set">
                            <a class="active" href="#"><i class="fal fa-minus"></i> Is the electronic donation feature available?</a>
                            <div class="content" style="display: block;">
                                <p>No, but you can donate through any bank branch close to you to an account number for the care home if it has one, or from E-Fawateercom.</p>
                            </div>
                        </div>
                        <div class="faq-set">
                            <a href="#"><i class="fal fa-plus"></i> Is my data safe? And can I modify it?</a>
                            <div class="content">
                                <p>Yes, the data is kept secure through the website and no one but you can view it, in addition to the possibility of modifying your account data.</p>
                            </div>
                        </div>
                        <div class="faq-set">
                            <a href="#"><i class="fal fa-plus"></i> What is this website and why is it there?</a>
                            <div class="content">
                                <p>You can find out who we are and the importance of the website and its goals by clicking on about us located at the top of the site.</p>
                            </div>
                        </div>
                        <div class="faq-set">
                            <a href="#"><i class="fal fa-plus"></i> How can I contact the nursing home for the elderly?</a>
                            <div class="content">
                                <p>You can contact the care home through a message request directly from the website, where you write the message and your personal information so that the care home will answer you through it. Or through the care home information on their page, such as their phone number.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area position-relative gray-bg pt-120 pb-120">
        <div class="testi-bg" data-background="img/bg/testi_bg.jpg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7 order-0 order-lg-2">
                    <div class="testimonial-active">
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="img/images/testi_img.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>Lorem ipsum dolor sit amet, co nsectetur adipisicing elit, sed do eiusmod tempor incididunt.</h2>
                                <div class="testi-avatar-info">
                                    <span>founder</span>
                                    <h4>daddy D. yankee</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="img/images/testi_img.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>Lorem ipsum dolor sit amet, co nsectetur adipisicing elit, sed do eiusmod tempor incididunt.</h2>
                                <div class="testi-avatar-info">
                                    <span>founder</span>
                                    <h4>rosalina d. william</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="img/images/testi_img.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>Lorem ipsum dolor sit amet, co nsectetur adipisicing elit, sed do eiusmod tempor incididunt.</h2>
                                <div class="testi-avatar-info">
                                    <span>founder</span>
                                    <h4>yalgaar h. halim</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="img/images/testi_img.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>Lorem ipsum dolor sit amet, co nsectetur adipisicing elit, sed do eiusmod tempor incididunt.</h2>
                                <div class="testi-avatar-info">
                                    <span>founder</span>
                                    <h4>daddy D. yankee</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="testi-avatar-active">
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="img/images/testi_avatar01.jpg" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                <span>founder</span>
                                <h4>daddy D. yankee</h4>
                            </div>
                        </div>
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="img/images/testi_avatar02.jpg" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                <span>founder</span>
                                <h4>rosalina d. william</h4>
                            </div>
                        </div>
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="img/images/testi_avatar03.jpg" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                <span>founder</span>
                                <h4>yalgaar h. halim</h4>
                            </div>
                        </div>
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="img/images/testi_avatar03.jpg" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                <span>founder</span>
                                <h4>yalgaar h. halim</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-120 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-70">
                        <h6 class="sub-title">blog</h6>
                        <h2 class="title">news feeds</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom-container">
            <div class="row blog-active">
                <div class="col-lg-6">
                    <div class="blog-post-item bp-style-one mb-50">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html">
                                <img src="img/blog/blog_thumb01.jpg" alt="">
                                <div class="overlay-post-date">23 <span>jan</span></div>
                            </a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-tag">
                                <a href="#">senior,</a>
                                <a href="#">care,</a>
                                <a href="#">health</a>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <div class="blog-post-avatar">
                                <div class="thumb"><img src="img/blog/blog_post_avatar.jpg" alt=""></div>
                                <div class="info"><h6>Posted By <a href="#">Will smith</a></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-post-item bp-style-one mb-50">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html">
                                <img src="img/blog/blog_thumb02.jpg" alt="">
                                <div class="overlay-post-date">20 <span>jan</span></div>
                            </a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-tag">
                                <a href="#">senior,</a>
                                <a href="#">care,</a>
                                <a href="#">health</a>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <div class="blog-post-avatar">
                                <div class="thumb"><img src="img/blog/blog_post_avatar.jpg" alt=""></div>
                                <div class="info"><h6>Posted By <a href="#">Will smith</a></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-post-item bp-style-one mb-50">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html">
                                <img src="img/blog/blog_thumb03.jpg" alt="">
                                <div class="overlay-post-date">18 <span>jan</span></div>
                            </a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-tag">
                                <a href="#">senior,</a>
                                <a href="#">care,</a>
                                <a href="#">health</a>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit am et, consectetur</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <div class="blog-post-avatar">
                                <div class="thumb"><img src="img/blog/blog_post_avatar.jpg" alt=""></div>
                                <div class="info"><h6>Posted By <a href="#">Will smith</a></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    @endsection

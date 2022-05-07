@extends('layouts.site')
@section('content')

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

    <!-- services-area -->
    <section class="services-area pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="services-item text-center mb-30">
                        <div class="services-overlay-icon"><i class="flaticon-capsules"></i></div>
                        <div class="service-content">
                            <h6 class="count">01</h6>
                            <h4><a href="services-details.html"> Events </a></h4>
                            <p>These are events held by care homes where they put information to indicate when and where the event is, 
                                and individuals and companies can join or cancel it</p>
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
                            <h4><a href="services-details.html">Announcements</a></h4>
                            <p>Care homes publish and express their needs, whether for basic materials or supplements, 
                            thus to be responded to by the users who can provide them with assistance</p>
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
                            <h4><a href="services-details.html">Messages</a></h4>
                            <p>Individuals and companies can send a message to care homes to tell them everything they want,
                                 and also includes the sender's information so that the care homes can respond to it</p>
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
                            <h4><a href="services-details.html">Donations</a></h4>
                            <p>The users can donate to care homes through the bank account numbers of these homes, 
                                or the immediate payment system to transfer funds "Cliq" in an easy way</p>
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
                        <h2 class="title">Take care of them, for they are in a time other than their own</h2>
                        <p class="title-paragraph">The elderly are an integral part of society and their care is a responsibility that falls on all of us...
                             Aging lies in the soul more than it resides in the body,
                             so we have to return them to their youth with our support for them.
                        </br>
                             Progress is a decision we may make once in our life,
                                  but it lasts with us for a lifetime, 
                                  and we have progressed towards the elderly to change their world for the better until the end of this life
                        </p>
                    </div>
                    <div class="skill-wrap">
                        
                        <div class="single-skill-item">
                            <h6>Elderly care service</h6>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".4s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"><span>85%</span></div>
                            </div>
                        </div>
                        <div class="single-skill-item">
                            <h6>Psychological comfort for the elderly</h6>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".6s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"><span>70%</span></div>
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
                                <img src="img/icon/carehome2.jpg" alt="">
                            </div>
                            <h2><span class="odometer" data-count="9">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>The number of elderly Care homes</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/carehome1.jpg" alt="">
                            </div>
                            <h2><span class="odometer" data-count="355">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4> The number of elderly in all care homes</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/fact_icon03.png" alt="">
                            </div>
                            <h2><span class="odometer" data-count="71">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>The number of workers in all care homes</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="fact-item mb-50">
                        <div class="fact-top-wrap">
                            <div class="icon">
                                <img src="img/icon/fact_icon04.png" alt="">
                            </div>
                            <h2><span class="odometer" data-count="20">00</span></h2>
                        </div>
                        <div class="fact-content">
                            <h4>The number Of current users on the web site</h4>
                         
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
                                <img src="{{ asset('img/images/testi_img.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>Our meeting and talking to them is a happiness for us before it is for them</h2>

                                <div class="testi-avatar-info">
                                   
                                    <h4>Sara Asaad</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('img/images/testi_img.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>They are the basis of long experience and knowledge in this life ... They are the fruit of the world</h2>
                                <div class="testi-avatar-info">
                                   
                                    <h4>Zaid Alnajar</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('img/images/testi_img.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>Life without them is meaningless, they are the flower of existence</h2>
                                <div class="testi-avatar-info">
                                   
                                    <h4>Razan Aboushi</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('img/images/testi_img.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <div class="testi-quote-icon">
                                    <i class="flaticon-quotation"></i>
                                </div>
                                <h2>In their presence there is blessing and happiness, and in their separation there is sadness</h2>
                                <div class="testi-avatar-info">
                                    <h4>Razan Aboushi </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="testi-avatar-active">
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset('img/images/testi_avatar01.jpg') }}" alt="">
                            </div>
                            <div class="testi-avatar-content">
                               
                                <h4>Sara Asaad</h4>
                            </div>
                        </div>
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset('img/images/testi_avatar02.jpg') }}" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                
                                <h4>Zaid Alnajar</h4>
                            </div>
                        </div>
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset('img/images/testi_avatar03.jpg') }}" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                
                                <h4>Razan Aboushi</h4>
                            </div>
                        </div>
                        <div class="testi-avatar-box">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset('img/images/testi_avatar03.jpg') }}" alt="">
                            </div>
                            <div class="testi-avatar-content">
                                
                                <h4>Razan Aboushi</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    @if (!$latest_articles->isEmpty())
        <section class="blog-area pt-120 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-70">
                            <h2 class="title">Articles feeds</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container">
                <div class="row blog-active">
                    @foreach ($latest_articles as $item)
                        <div class="col-lg-6">
                            <div class="blog-post-item bp-style-one mb-50">
                                <div class="blog-post-thumb">
                                    @php $profile = $item->cover_image ?  asset('storage/uploads/'.$item->cover_image) : asset('img/default.jpg');   @endphp
                                    <a href="{{ route('articles', $item->id) }}">
                                        <img src="{{ $profile }}" alt="{{ $item->title }}">
                                        <div class="overlay-post-date">{{  $item->created_at->format('d') }} <span>{{  $item->created_at->format('F') }}</span></div>
                                    </a>
                                </div>
                                <div class="blog-post-content">
                                    <h2><a href="{{ route('articles', $item->id) }}">{{ $item->title }}</a></h2>
                                    <p>{{ $item->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @endsection

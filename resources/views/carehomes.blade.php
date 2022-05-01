@extends('layouts.app')
@section('content')

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/CareEvent.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h4 class="title">Care Homes</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Care Homes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('care-homes', 2) }}"><img class="w-100" src="img/blog/inner_blog_thumb02.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h3><a href="{{ route('care-homes', 2) }}">Guest home for the elderly</a></h3>
                                <p>The guest home for the elderly is located in Amman / Juwaida</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('care-homes', 2) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('care-homes', 3) }}"><img class="w-100" src="img/blog/inner_blog_thumb03.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h3><a href="{{ route('care-homes', 3
                                ) }}">Peace home for the elderly</a></h3>
                                <p>The peace home for the elderly is located in Wasfi Al-Tal Street-Amman-Jordan</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('care-homes', 2) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('care-homes',1) }}"><img class="w-100" src="img/blog/inner_blog_thumb01.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h3><a href="{{ route('care-homes', 1) }}">Dar Al Zahraa for the elderly </a></h3>
                                <p>The Dar Al Zahraa for the elderly is located in Amman-Marj Al-Hamam, Al-Jalah Street</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('care-homes', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>

@endsection

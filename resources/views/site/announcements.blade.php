@extends('layouts.site')
@section('content')

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/Announc1.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h4 class="title">Announcements</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Announcements</li>
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
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('announcements', 1) }}"><img class="w-100" src="img/blog/Ann1.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('announcements', 1) }}">Guest home for the Elderly</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>3th May 2022</span></li>
                                    </ul>
                                </div>
                                <p>We need food supplies "canned goods and vegetables" to meet the needs of the elderly </p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('announcements', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('announcements', 2) }}"><img class="w-100" src="img/blog/Ann2.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('announcements', 2) }}">Peace home for the elderly </a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>30th April 2022</span></li>
                                    </ul>
                                </div>
                                <p>We need clothes for the elderly</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('announcements', 2) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('announcements', 3) }}"><img class="w-100" src="img/blog/Ann3.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('announcements', 3) }}">Dar Al Zahraa for the elderly</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>6th May 2022</span></li>
                                    </ul>
                                </div>
                                <p>We need books and novels on various topics </p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('announcements', 3) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('announcements', 4) }}"><img class="w-100" src="img/blog/Ann4.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('announcements', 4) }}">Darat Samir Shamma for the elderly</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>1th May 2022</span></li>
                                    </ul>
                                </div>
                                <p>We need small tables to be placed in the care home to serve the needs of the elderly</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('announcements', 4) }}"><i class="far fa-arrow-right"></i>Read More</a>
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
@extends('layouts.site')
@section('content')

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/Events.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h4 class="title">Care Homes</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Care Homes Events</li>
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
                    <div class="col-lg-12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('events', 1) }}"><img class="w-100" src="img/blog/Event1.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('events', 1) }}">Group dining with the elderly</a></h4>
                                <ul>
                                    <li><span><i class="flaticon-calendar"></i>25th April 2022</span></li>
                                </ul>
                                <ul>
                                    <li><span><i class="far fa-time-alt"></i>From 11 a.m. to 1 p.m</span></li>
                                </ul>
                                <p>We are having a group lunch party to celebrate with the elderly and share moments of happiness with them</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('events', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('events', 2) }}"><img class="w-100" src="img/blog/Event2.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('events', 2) }}">Elderly Drawing Day</a></h4>
                                <ul>
                                    <li><span><i class="flaticon-calendar"></i>10th May 2022</span></li>
                                </ul>
                                <ul>
                                    <li><span><i class="far fa-time-alt"></i>From 10 a.m. to 12 p.m</span></li>
                                </ul>
                                
                                <p>We are holding an event for the elderly to participate in drawing and playing with colors to live a new happiness</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('events', 2) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('events', 3) }}"><img class="w-100" src="img/blog/Event3.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('events', 3) }}">Elderly entertainment day</a></h4>
                                <ul>
                                    <li><span><i class="flaticon-calendar"></i>12th May 2022</span></li>
                                </ul>
                                <ul>
                                    <li><span><i class="far fa-time-alt"></i>From 9 a.m. to 11 a.m</span></li>
                                </ul>
                                <p>We are holding an event to entertain the elderly and share the play to bring them back to their youth</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('events', 3) }}"><i class="far fa-arrow-right"></i>Read More</a>
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

@extends('layouts.app')
@section('content')

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/Articles.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h4 class="title">Articles</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Articles</li>
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
                                <a href="{{ route('articles', 1) }}"><img class="w-100" src="img/blog/Abuse.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('articles', 1) }}">Elderly abuse</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>30th April 2022</span></li>
                                    </ul>
                                </div>
                                <p>Elderly people are subjected to abuse by many individuals in society, and here we have clarified some of its forms</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('articles', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('articles', 1) }}"><img class="w-100" src="img/blog/PHCh1.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('articles', 1) }}">Psychological characteristics of the elderly</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>29th April 2022</span></li>
                                    </ul>
                                </div>
                                <p>What are the psychological characteristics that would affect the elderly ?</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('articles', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('articles', 1) }}"><img class="w-100" src="img/blog/Eldelry.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('articles', 1) }}">The elderly and and ways to take care of them</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>27th April 2022</span></li>
                                    </ul>
                                </div>
                                <p>Who are the elderly ? And what are the ways we can take care of them ? </p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('articles', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col12">
                        <div class="blog--post--item mb-40">
                            <div class="blog--post--thumb">
                                <a href="{{ route('articles', 1) }}"><img class="w-100" src="img/blog/Problem.jpg" alt="img"></a>
                            </div>
                            <div class="blog--post--content">
                                <h4><a href="{{ route('articles', 1) }}">Psychological problems in the elderly</a></h4>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i>1th May 2022</span></li>
                                    </ul>
                                </div>
                                <p>The most important psychological problems experienced by the elderly</p>
                                <div class="blog--post--bottom">
                                    <div class="blog--read--more">
                                        <a href="{{ route('articles', 1) }}"><i class="far fa-arrow-right"></i>Read More</a>
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
@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/Dar12.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Care Home Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Care Home Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="portfolio-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="portfolio-details-content">
                            <p>The guest house for the elderly is a home based on the care and service of the elderly and providing everything they need from food,
                                 drink and health care through the functional staff, which consists of 9 workers who serve approximately 51 elderly people. 
                                 The guest home for the elderly was established in 1979.
                                And she works from Sunday to Thursday and starts working from From 8 in the morning until 6 in the evening.</p>
                    
                            <p>It is considered a voluntary sector, and it has a landline number: 4129624,
                                 and a fax: 4126923. And her bank account number: 0118-267003-500. 
                                 It is located in the Juwaida area in Amman.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <aside class="portfolio-sidebar">
                            <div class="widget mb-40">
                                <div class="portfolio-widget-title mb-30">
                                    <h4>Portfolio</h4>
                                </div>
                                <div class="portfolio-widget-cat">
                                    <div class="mb-3">
                                        <h6>Email:</h6>
                                        <p class="small">GuestH@gmail.com</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Phone:</h6>
                                        <p class="small">4129624 / 962-64126924 </p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Location:</h6>
                                        <p class="small">: Amman / Juwaida , Jordan</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Elderlies Number:</h6>
                                        <p class="small">51</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Establishment Date:</h6>
                                        <p class="small">1979, May, 7</p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@extends('layouts.app')
@section('content')

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/RR2.jpg') }}"></div>
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
        <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <div class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="portfolio-details-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
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
                                            <p class="small">home@gmail.com</p>
                                        </div>

                                        <div class="mb-3">
                                            <h6>Phone:</h6>
                                            <p class="small">962-6-12345678/p>
                                        </div>

                                        <div class="mb-3">
                                            <h6>Location:</h6>
                                            <p class="small">Amman, Jordan</p>
                                        </div>

                                        <div class="mb-3">
                                            <h6>Elderlies Number:</h6>
                                            <p class="small">13</p>
                                        </div>

                                        <div class="mb-3">
                                            <h6>Establishment Date:</h6>
                                            <p class="small">2022, May, 1</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- portfolio-details-area-end -->
        
    </main>

@endsection
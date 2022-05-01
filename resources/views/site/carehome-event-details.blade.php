@extends('layouts.site')
@section('content')

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-bg" data-background="{{ asset('img/bg/LunchEvent.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Care Home Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Care Home Event Details</li>
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
                           <p>  <h2>The event will be held in the guest house for the elderly, 
                                where we will have a group lunch with the elderly to give them a nice time and entertain themselves.This event will be held from 11 am to 1 pm .
                                We are glad to have you join us. </h2></p>
                    
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <aside class="portfolio-sidebar">
                            <div class="widget mb-40">
                                <div class="portfolio-widget-title mb-30">
                                    <h4>Event Description</h4>
                                </div>
                                <div class="portfolio-widget-cat">
                                    <div class="mb-3">
                                        <h6>Email:</h6>
                                        <p class="small">GuestH@gmail.com</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Phone:</h6>
                                        <p class="small">96264126924</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Location:</h6>
                                        <p class="small"> Amman / Juwaida , Jordan</p>
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
        <!-- portfolio-details-area-end -->
        
    </main>

@endsection
@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            @php $profile = $event->cover_image ? asset('storage/uploads/'.$event->cover_image) : asset('img/default-thumb.jpg');   @endphp
            <div class="breadcrumb-bg" data-background="{{ $profile }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">{{ $event->title }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Events</li>
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
                            @if (\Session::has('message'))
                                <div class="alert alert-info small">{!! \Session::get('message') !!}</div>
                            @endif

                            <h2>{{ $event->title }}</h2>
                            <div class="blog--post--meta mb-20">
                                <ul>
                                    <li><span><i class="flaticon-wall-clock"></i>{{ $event->created_at->diffForHumans() }}</span></li>
                                    <li><span><i class="flaticon-heart-3"></i>{{ $event->user->name }}</span></li>
                                </ul>
                            </div>
                            {!!  $event->content !!}

                            @if (now() <= $event->date)
                                @if ($event->users_count >= $event->attendees)
                                    <a class="btn btm-sm mt-3 disabled" href="#">Event is full</a>
                                @endif 

                                @if ($check_reservation)
                                    <a class="btn btm-sm btn-danger mt-3" href="{{ route('reserve-event-seat', $event->id) }}">Cancel Reservation</a>
                                @elseif ($event->users_count < $event->attendees)
                                    <a class="btn btm-sm mt-3" href="{{ route('reserve-event-seat', $event->id) }}">Join</a>
                                @endif
                            @endif 
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
                                        <h6>Date:</h6>
                                        <p class="small">{{ $event->date }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Time:</h6>
                                        <p class="small">{{ date('H:i A', strtotime($event->from_time)) }} - {{ date('H:i A', strtotime($event->to_time)) }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Location:</h6>
                                        <p class="small">{{ $event->location }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Number of attendies:</h6>
                                        <p class="small">{{ $event->attendees }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Number of joined users:</h6>
                                        <p class="small">{{ $event->users_count }}</p>
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
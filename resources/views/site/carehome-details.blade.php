@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            @php $profile = $careHome->profile ?  asset('storage/profiles/'.$careHome->profile) : asset('img/default.jpg');   @endphp

            <div class="breadcrumb-bg" data-background="{{ $profile }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">{{ $careHome->name }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CareHomes</li>
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
                            {!!  $careHome->carehome?->bio !!}
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
                                        <p class="small">{{ $careHome->email }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Phone:</h6>
                                        <p class="small">{{ $careHome->phone }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Location:</h6>
                                        <p class="small">{{ $careHome->address }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Elderlies Number:</h6>
                                        <p class="small">{{ \App\Models\CareHome::$elderlies_range[$careHome->careHome->elderlies_number] }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Establishment Date:</h6>
                                        <p class="small">{{ $careHome->careHome->establishment_date }}</p>
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
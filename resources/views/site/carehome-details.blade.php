@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            @php $profile = $careHome->profile ?  asset('storage/profiles/'.$careHome->profile) : asset('img/default-thumb.jpg');   @endphp
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
                            {!!  $careHome->userCarehome?->bio !!}
                        </div>
                      
                        <div class="contact-form-wrap p-5">
                            <form action="{{ route('store-carehome-contact', $careHome->id) }}" method="post">
                                @csrf
    
                                @if (\Session::has('success'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                {!! \Session::get('success') !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Enter full name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                                            @error('name')
                                                <div class="small invalid">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Enter your email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="small invalid">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="small invalid">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <select class="custom-select @error('subject') is-invalid @enderror" name="subject">
                                                <option value="" selected="">Select Subject</option>
                                                <option @if (old('subject') == 'Care homes') selected @endif>Care homes</option>
                                                <option @if (old('subject') == 'Events') selected @endif>Events</option>
                                                <option @if (old('subject') == 'Donation') selected @endif>Donation</option>
                                                <option @if (old('subject') == 'Messages for care homes') selected @endif>Messages for care homes</option>
                                                <option @if (old('subject') == 'How the website works') selected @endif>How the website works</option>
                                                <option @if (old('subject') == 'Other things') selected @endif>Other things</option>
                                            </select>
                                            @error('subject')
                                                <div class="small invalid">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-grp">
                                    <textarea name="message" id="message" placeholder="Enter messages" class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="small invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn">submit your quote</button>
                            </form>
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

                                    @if ($careHome->userCarehome?->elderlies_number)
                                        <div class="mb-3">
                                            <h6>Elderlies Number:</h6>
                                            <p class="small">{{ \App\Models\UserCarehome::$elderlies_range[$careHome->userCarehome?->elderlies_number] }}</p>
                                        </div>
                                    @endif

                                        @if ($careHome->userCarehome?->establishment_date)
                                        <div class="mb-3">
                                            <h6>Establishment Date:</h6>
                                            <p class="small">{{ $careHome->userCarehome?->establishment_date }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            @php $profile = $care_home->profile ?  asset('storage/profiles/'.$care_home->profile) : asset('img/default-thumb.jpg');   @endphp
            <div class="breadcrumb-bg" data-background="{{ $profile }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">{{ $care_home->name }}</h2>
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
                            {!!  $care_home->userCarehome?->bio !!}
                        </div>
                      
                        @if (!in_array(auth()->user()?->role?->name, ['admin', 'carehome']))
                            <div class="contact-form-wrap p-5">
                                <form action="{{ route('store-carehome-contact', $care_home->id) }}" method="post">
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
                                                <input type="text" name="name" placeholder="Enter full name" class="@error('name') is-invalid @enderror" value="{{ old('name') ?? auth()?->user()?->name }}">
                                                @error('name')
                                                    <div class="small invalid">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Enter your email" class="@error('email') is-invalid @enderror" value="{{ old('email') ?? auth()?->user()?->email }}">
                                                @error('email')
                                                    <div class="small invalid">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" value="{{ old('phone') ?? auth()?->user()?->phone }}">
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
                                                    <option @if (old('subject') == 'Create Events') selected @endif>Create Events</option>
                                                    <option @if (old('subject') == 'Donation') selected @endif>Donation</option>
                                                    <option @if (old('subject') == 'Announcement') selected @endif>Announcement</option>
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
                        @endif
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
                                        <p class="small">{{ $care_home->email }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Phone:</h6>
                                        <p class="small">{{ $care_home->phone }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <h6>Country:</h6>
                                        <p class="small">{{ $care_home->address }}</p>
                                    </div>

                                    @if ($care_home->city)
                                        <div class="mb-3">
                                            <h6>City:</h6>
                                            <p class="small">{{ $care_home->city }}</p>
                                        </div>
                                    @endif

                                    @if ($care_home->street)
                                        <div class="mb-3">
                                            <h6>Street:</h6>
                                            <p class="small">{{ $care_home->street }}</p>
                                        </div>
                                    @endif

                                    @if ($care_home->userCarehome?->elderlies_number)
                                        <div class="mb-3">
                                            <h6>Elderlies Number:</h6>
                                            <p class="small">{{ \App\Models\UserCarehome::$elderlies_range[$care_home->userCarehome?->elderlies_number] }}</p>
                                        </div>
                                    @endif

                                        @if ($care_home->userCarehome?->establishment_date)
                                        <div class="mb-3">
                                            <h6>Establishment Date:</h6>
                                            <p class="small">{{ $care_home->userCarehome?->establishment_date }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </aside>

                        @if (!$payment_methods->isEmpty() && !in_array(auth()->user()?->role?->name, ['admin', 'carehome']))
                            <aside class="portfolio-sidebar">
                                <div class="widget mb-40">
                                    <div class="portfolio-widget-title mb-30">
                                        <h4>Donate</h4>
                                    </div>

                                    <ul class="payment-methods">
                                        @foreach ($payment_methods as $payment)
                                            <li>
                                                <a class="text-white" href="{{ route('donate', $payment->id) }}">
                                                    @php $payment_logo = $payment->paymentMethod->logo ?  asset('storage/uploads/'.$payment->paymentMethod->logo) : asset('img/default-thumb.jpg');   @endphp
                                                    <span class="payment-logo" style="background-image: url({{$payment_logo}})"></span>
                                                    <span class="pt-2">{{ $payment->paymentMethod->name }}</span>
                                                </a>
                                            </li> 
                                        @endforeach
                                    </ul>
                                </div>  
                            </aside>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@extends('layouts.site')
@section('content')

<main>
    <section class="breadcrumb-area">
        <div class="breadcrumb-bg" data-background="{{ asset('img/bg/breadcrumb_bg.jpg') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">contact us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-wrap">
                        <form action="{{ route('store-contact-us') }}" method="post">
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
                                        <input type="email" name="email" placeholder="Enter your email" class="@error('email') is-invalid @enderror" value="{{ old('email') ?? auth()?->user()?->email  }}">
                                        @error('email')
                                            <div class="small invalid">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" value="{{ old('phone') ?? auth()?->user()?->phone  }}">
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
                                            <option @if (old('subject') == 'Messages for care homes') selected @endif>Messages for care homes</option>
                                            <option @if (old('subject') == 'How the website works') selected @endif>How the website works</option>
                                            <option @if (old('subject') == 'Advertisement') selected @endif>Advertisement</option>
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
            </div>
        </div>
    </div>

    <div class="contact-map" data-background="{{ asset('img/bg/contact_map.jpg') }}"></div>

    <div class="contact-info-area pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="contact-info-box mb-30">
                        <div class="contact-info-box-head text-center">
                            <h3>More information about us for contact</h3>
                        </div>
                        <div class="contact-info-box-content">
                            <ul>
                                <li>
                                    <i class="fal fa-phone"></i>
                                    <span> +962 780577727  </span>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <span>info@youbelong.com </span>
                                </li>
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span>Amman - Jordan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@extends('layouts.site')
@section('content')

    <main>
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
     
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    @forelse ($articles as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog--post--item mb-40">
                                @php $profile = $item->cover_image ?  asset('storage/uploads/'.$item->cover_image) : asset('img/default-thumb.jpg');   @endphp
                                <a href="{{ route('articles', $item->id) }}">
                                    <div class="blog--post--thumb bg-image" style="background-image: url({{$profile}})"></div>
                                </a>
                                <div class="blog--post--content">
                                    <h4><a href="{{ route('articles', $item->id) }}">{{ $item->title }}</a></h4>
                                    <div class="blog--post--meta mb-20">
                                        <ul>
                                            <li><span><i class="flaticon-wall-clock"></i>{{ $item->created_at->diffForHumans() }}</span></li>
                                        </ul>
                                    </div>
                                    <p>{{ $item->short_description }}</p>
                                    <div class="blog--post--bottom">
                                        <div class="blog--read--more">
                                            <a href="{{ route('articles', $item->id) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-6">
                            <div class="alert alert-info">No articles added yet!</div>
                        </div>
                    @endforelse
                </div>

                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        {{ $articles->render() }}
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
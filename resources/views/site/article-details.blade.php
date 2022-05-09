@extends('layouts.site')
@section('content')

    <main>
        <section class="breadcrumb-area">
            @php $profile = $article->cover_image ? asset('storage/uploads/'.$article->cover_image) : asset('img/default-thumb.jpg');   @endphp
            <div class="breadcrumb-bg" data-background="{{ $profile }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">{{ $article->title }}</h2>
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
                    <div class="col-lg-12">
                        <div class="blog--post--item">
                            <div class="blog--post--content blog-details-content">
                                <h2>{{ $article->title }}</h2>
                                <div class="blog--post--meta mb-20">
                                    <ul>
                                        <li><span><i class="flaticon-calendar"></i>{{ $article->created_at->diffForHumans() }}</span></li>
                                    </ul>
                                </div>
                                {!!  $article->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
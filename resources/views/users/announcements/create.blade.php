@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create a new announcement</h6>
        </div>
        <div class="card-body">
            <form name="create-announcement" method="post" action="{{ route('announcements.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="short_description" class="col-md-4 col-form-label text-md-end">{{ __('Short Description') }}</label>
                    <div class="col-md-6">
                        <textarea rows="3" id="short_description" class="form-control @error('short_description') is-invalid @enderror" name="short_description">{{ old('short_description') }}</textarea>
                        @error('short_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>
                    <div class="col-md-6">
                        <textarea rows="5" id="content" class="form-control text-editor @error('content') is-invalid @enderror" name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cover_image" class="col-md-4 col-form-label text-md-end">{{ __('conver') }}</label>
                    <div class="col-md-6">
                        <input id="cover_image" type="file" class="form-control-file @error('cover_image') is-invalid @enderror" name="cover_image">
                        <span class="small text-muted">Allowed file types are: jpg,jpeg,bmp,png,gif</span>
                        @error('cover_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline  @error('status') is-invalid @enderror">
                            <input class="form-check-input" type="radio" name="status" id="status_0" value="0" @if (old('status') == '0') checked @endif>
                            <label class="form-check-label" for="status_0">Draft</label>
                        </div>
                        <div class="form-check form-check-inline  @error('status') is-invalid @enderror">
                            <input class="form-check-input" type="radio" name="status" id="status_1" value="1" @if (old('status') == '1') checked @endif>
                            <label class="form-check-label" for="status_1">Published</label>
                        </div>
                        
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
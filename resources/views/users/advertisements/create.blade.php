@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create a new advertisement</h6>
        </div>
        <div class="card-body">
            <form name="create-advertisement" method="post" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="advertiser" class="col-md-4 col-form-label text-md-end">{{ __('Advertiser') }}</label>
                    <div class="col-md-6">
                        <input id="advertiser" type="text" class="form-control @error('advertiser') is-invalid @enderror" name="advertiser" value="{{ old('advertiser') }}">
                        @error('advertiser')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="banner" class="col-md-4 col-form-label text-md-end">{{ __('Banner') }}</label>
                    <div class="col-md-6">
                        <input id="banner" type="file" class="form-control-file @error('banner') is-invalid @enderror" name="banner">
                        <span class="small text-muted">Allowed file types are: jpg,jpeg,bmp,png,gif</span>
                        @error('banner')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label text-md-end">{{ __('URL') }}</label>
                    <div class="col-md-6">
                        <input id="advertiser" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}">
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="start_date" class="col-md-4 col-form-label text-md-end">{{ __('Start Date') }}</label>
                    <div class="col-md-6">
                        <input id="start_date" type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}">
                        @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="end_date" class="col-md-4 col-form-label text-md-end">{{ __('End Date') }}</label>
                    <div class="col-md-6">
                        <input id="end_date" type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}">
                        @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Ad Price (JOD)') }}</label>
                    <div class="col-md-6">
                        <input id="price" type="datetime" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                        @error('price')
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
                            <label class="form-check-label" for="status_0">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline  @error('status') is-invalid @enderror">
                            <input class="form-check-input" type="radio" name="status" id="status_1" value="1" @if (old('status') == '1') checked @endif>
                            <label class="form-check-label" for="status_1">Active</label>
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
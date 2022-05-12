@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create a new event</h6>
        </div>
        <div class="card-body">
            <form name="create-event" method="post" action="{{ route('events.store') }}" enctype="multipart/form-data">
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
                    <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>
                    <div class="col-md-6">
                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="from_time" class="col-md-4 col-form-label text-md-end">{{ __('From Time') }}</label>
                    <div class="col-md-6">
                        <input id="from_time" type="time" class="form-control @error('from_time') is-invalid @enderror" name="from_time" value="{{ old('from_time') }}">
                        @error('from_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="from_time" class="col-md-4 col-form-label text-md-end">{{ __('To Time') }}</label>
                    <div class="col-md-6">
                        <input id="to_time" type="time" class="form-control @error('to_time') is-invalid @enderror" name="to_time" value="{{ old('to_time') }}">
                        @error('to_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                    <div class="col-md-6">
                        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}">
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="attendees" class="col-md-4 col-form-label text-md-end">{{ __('Attendees') }}</label>
                    <div class="col-md-6">
                        <input id="attendees" type="text" class="form-control @error('attendees') is-invalid @enderror" name="attendees" value="{{ old('attendees') }}">
                        @error('attendees')
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
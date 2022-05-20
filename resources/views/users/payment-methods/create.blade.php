@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create a new payment method</h6>
        </div>
        <div class="card-body">
            <form name="create-payment-method" method="post" action="{{ route('payment-methods.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="logo" class="col-md-4 col-form-label text-md-end">{{ __('Logo') }}</label>
                    <div class="col-md-6">
                        <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo">
                        <span class="small text-muted">Allowed file types are: jpg,jpeg,bmp,png,gif</span>
                        @error('logo')
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
                            {{ __('Add') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
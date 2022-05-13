@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit a payment method</h6>
        </div>
        <div class="card-body">
            <form name="edit-payment-method" method="post" action="{{ route('payment-methods.update', $payment_method->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $payment_method->name }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="logo" class="col-md-4 col-form-label text-md-end">{{ __('logo') }}</label>
                    <div class="col-md-6">
                        <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo">
                        <span class="small text-muted">Allowed file types are: jpg,jpeg,bmp,png,gif</span>
                        @if ($payment_method->logo)
                            <img src="{{ asset('storage/uploads/'.$payment_method->logo)  }}" class="thumb d-block"/>
                        @endif
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
                            <input class="form-check-input" type="radio" name="status" id="status_0" value="0" @if (old('status') == '0') checked @elseif ($payment_method->status == '0') checked @endif>
                            <label class="form-check-label" for="status_0">Inactive</label>
                        </div>
                        <div class="form-check form-check-inline  @error('status') is-invalid @enderror">
                            <input class="form-check-input" type="radio" name="status" id="status_1" value="1" @if (old('status') == '1') checked @elseif ($payment_method->status == '1') checked @endif>
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
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
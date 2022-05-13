@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Donate via {{ $payment_account->paymentMethod->name }}</h6>
        </div>
        <div class="card-body">
            <form name="profile-info" method="post" action="{{ route('store-donate', $payment_account->id) }}" enctype="multipart/form-data">
                @csrf

                @if (\Session::has('message'))
                    <div class="row mb-3">
                        <div class="offset-md-4 col-md-6">
                            <div class="alert alert-info small mb-0">{!! \Session::get('message') !!}</div>
                        </div>
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>
                    <div class="col-md-6 ">
                        <div class="input-group">
                            <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">JOD</span>
                            </div>
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
        
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Donate') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
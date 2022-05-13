@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create a new payment account</h6>
        </div>
        <div class="card-body">
            <form name="create-payment-account" method="post" action="{{ route('payment-accounts.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="payment_method_id" class="col-md-4 col-form-label text-md-end">{{ __('Payment Method') }}</label>
                    <div class="col-md-6">
                        <select name="payment_method_id" class="form-control @error('payment_method_id') is-invalid @enderror" >
                            <option value="">Select</option>
                            @foreach ($payment_methods as $p_key => $p_name)
                                <option @if (old('payment_method_id') == $p_key) selected @endif value="{{$p_key}}">{{$p_name}}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="account_number" class="col-md-4 col-form-label text-md-end">{{ __('Account Number') }}</label>
                    <div class="col-md-6">
                        <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ old('account_number') }}">
                        @error('account_number')
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
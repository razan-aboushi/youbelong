@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @php 
                $payment_name = $payment_account->paymentMethod->name; 
                $example = "";
            @endphp 
            
            <h6 class="m-0 font-weight-bold text-primary">Donate via {{ $payment_name }}</h6>
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
                    <label for="amount" class="col-md-4 col-form-label text-md-end">
                        @if ($payment_name == 'Qlik')
                            {{ __('Phone Number') }}
                            @php $example = "International format like: +962780577727"; @endphp
                        @elseif ($payment_name == 'PayPal')
                            {{ __('PayPal Account') }}
                            @php $example = "Valid email address like: info@youbelong.com"; @endphp
                        @elseif ($payment_name == 'Credit Card')
                            {{ __('Card Number') }}
                            @php $example = "Valid card number like: 5555555555554444"; @endphp
                        @else
                            {{ __('Account Number') }}
                            @php $example = "Valid bank account number, number of digits between 9 and 18"; @endphp
                        @endif
                    </label>
                    <div class="col-md-6">
                        <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ old('account_number') }}">
                        <span class="small text-secondary mt-1">{{ $example }}</span>
                        @error('account_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                @if ($payment_name == 'Credit Card')
                    <div class="row mb-3">
                        <label for="holder_name" class="col-md-4 col-form-label text-md-end">{{ __('Holder Name') }}</label>
                        <div class="col-md-6">
                            <input id="holder_name" type="text" class="form-control @error('holder_name') is-invalid @enderror" name="holder_name" value="{{ old('holder_name') }}">
                            @error('holder_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="credentials" class="col-md-4 col-form-label text-md-end">{{ __('Credentials') }}</label>
                        <div class="col-md-2">
                            <input id="expiry_month" type="number" class="form-control @error('expiry_month') is-invalid @enderror" 
                            name="expiry_month" value="{{ old('expiry_month') }}" min="01" max="12" placeholder="Expiry Month">
                            @error('expiry_month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <input id="expiry_year" type="number" class="form-control @error('expiry_year') is-invalid @enderror" 
                            name="expiry_year" value="{{ old('expiry_year') }}" min="{{ date('Y') }}" max="{{ date('Y')+10 }}" placeholder="Expiry Year">
                            @error('expiry_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <input id="ccv" type="number" class="form-control @error('ccv') is-invalid @enderror" 
                            name="ccv" value="{{ old('ccv') }}" min="001" max="999" placeholder="CCV">
                            @error('ccv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>
                    <div class="col-md-6">
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

                <div class="row mb-3">
                    <div class="offset-md-4 col-md-6">
                        <input id="anonymes" type="checkbox" class="@error('anonymes') is-invalid @enderror" name="anonymes" value="1" @if(old('anonymes')) checked @endif>
                        <label class="form-check-label" for="anonymes">Don't display my name </label>
                        @error('anonymes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
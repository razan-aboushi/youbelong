@extends('layouts.user')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
        </div>
        <div class="card-body">
            <form name="profile-info" method="post" action="{{ route('update-profile-information') }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                @if (\Session::has('message'))
                    <div class="row mb-3">
                        <div class="offset-md-4 col-md-6">
                            <div class="alert alert-info small mb-0">{!! \Session::get('message') !!}</div>
                        </div>
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->phone }}" >
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                @if ($user->role->name == 'individual')
                    <div class="row mb-3">
                        <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline  @error('gender') is-invalid @enderror">
                                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" 
                                @if (old('gender') == 'male') checked @elseif ($user->userIndividual?->gender == 'male') checked @endif>
                                <label class="form-check-label" for="gender_male">Male</label>
                            </div>
                            <div class="form-check form-check-inline  @error('gender') is-invalid @enderror">
                                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" 
                                @if (old('gender') == 'female') checked @elseif ($user->userIndividual?->gender == 'female') checked @endif>
                                <label class="form-check-label" for="gender_female">Famale</label>
                            </div>
                            
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>
                        <div class="col-md-6">
                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') ?? $user->userIndividual?->birthdate  }}">
                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endif

                @if ($user->role->name == 'company')
                    <div class="row mb-3">
                        <label for="sector" class="col-md-4 col-form-label text-md-end">{{ __('Sector') }}</label>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline  @error('sector') is-invalid @enderror">
                                <input class="form-check-input" type="radio" name="sector" id="sector_public" value="public" @if (old('sector') == 'public') checked @elseif ($user->userCompany?->sector == 'public') checked @endif>
                                <label class="form-check-label" for="sector_public">Public</label>
                            </div>
                            <div class="form-check form-check-inline  @error('sector') is-invalid @enderror">
                                <input class="form-check-input" type="radio" name="sector" id="sector_private" value="private" @if (old('sector') == 'private') checked @elseif ($user->userCompany->sector == 'private') checked @endif>
                                <label class="form-check-label" for="sector_private">Private</label>
                            </div>
                            @error('sector')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endif

                @if ($user->role->name == 'carehome')
                    <div class="row mb-3">
                        <label for="elderlies_number" class="col-md-4 col-form-label text-md-end">{{ __('Number of Elderlies') }}</label>
                        <div class="col-md-6">
                            <select name="elderlies_number" id="elderlies_number" class="form-control" @error('elderlies_number') is-invalid @enderror>
                                <option value="">Number of Elderlies</option>
                                @foreach (App\Models\UserCarehome::$elderlies_range as $range_key => $range_value)
                                    <option 
                                    @if (old('elderlies_number') == $range_key) 
                                        selected
                                    @elseif ($user->userCarehome?->elderlies_number == $range_key)
                                        selected
                                    @endif 
                                    value="{{ $range_key }}">{{ $range_value }}</option>
                                @endforeach
                            </select>
                    
                            @error('elderlies_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="establishment_date" class="col-md-4 col-form-label text-md-end">{{ __('Date of Establishment') }}</label>
                        <div class="col-md-6">
                            <input id="establishment_date" type="date" class="form-control @error('establishment_date') is-invalid @enderror" name="establishment_date" value="{{ old('establishment_date') ?? $user->userCarehome?->establishment_date }}">
                            @error('establishment_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="short_description" class="col-md-4 col-form-label text-md-end">{{ __('Short Description') }}</label>
                        <div class="col-md-6">
                            <textarea rows="3" id="short_description" class="form-control @error('short_description') is-invalid @enderror" name="short_description">{{ old('short_description') ?? $user->userCarehome?->short_description }}</textarea>
                            @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="bio" class="col-md-4 col-form-label text-md-end">{{ __('Bio') }}</label>
                        <div class="col-md-6">
                            <textarea rows="5" id="bio" class="form-control text-editor @error('bio') is-invalid @enderror" name="bio">{{ old('bio') ?? $user->userCarehome?->bio }}</textarea>
                            @error('bio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user->address }}" >
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="profile" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>
                    <div class="col-md-6">
                        <input id="profile" type="file" class="form-control-file @error('profile') is-invalid @enderror" name="profile">
                        <span class="small text-muted">Allowed file types are: jpg,jpeg,bmp,png,gif</span>
                        @if ($user->profile)
                            <img src="{{ asset('storage/profiles/'.$user->profile)  }}" class="thumb d-block"/>
                        @endif
                        @error('profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Please keep it empty if no update">
                        @error('password')
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
<div class="row mb-3">
    <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

    <div class="col-md-6">
        <div class="form-check form-check-inline  @error('gender') is-invalid @enderror">
            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male" @if (old('gender') == 'male') checked @endif required>
            <label class="form-check-label" for="gender_male">Male</label>
        </div>
        <div class="form-check form-check-inline  @error('gender') is-invalid @enderror">
            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" @if (old('gender') == 'female') checked @endif required>
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
        <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required>

        @error('birthdate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="elderlies_number" class="col-md-4 col-form-label text-md-end">{{ __('Number of Elderlies') }}</label>

    <div class="col-md-6">
        <select name="elderlies_number" id="elderlies_number" class="form-control @error('elderlies_number') is-invalid @enderror">
            <option value="">Number of Elderlies</option>
            @foreach (App\Models\UserCarehome::$elderlies_range as $range_key => $range_value)
                <option value="{{ $range_key }}">{{ $range_value }}</option>
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
        <input id="establishment_date" type="date" class="form-control @error('establishment_date') is-invalid @enderror" name="establishment_date" value="{{ old('establishment_date') }}">

        @error('establishment_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
    <div class="col-md-6">
        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" >
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>
    <div class="col-md-6">
        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" >
        @error('city')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="street" class="col-md-4 col-form-label text-md-end">{{ __('Street') }}</label>
    <div class="col-md-6">
        <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" >
        @error('street')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

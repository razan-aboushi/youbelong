<div class="row mb-3">
    <label for="elderlies_number" class="col-md-4 col-form-label text-md-end">{{ __('Number of Elderlies') }}</label>

    <div class="col-md-6">
        <select name="elderlies_number" id="elderlies_number" class="form-control" @error('elderlies_number') is-invalid @enderror>
            <option value="">Number of Elderlies</option>
            @foreach (App\Models\CareHome::$elderlies_range as $range_key => $range_value)
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
<div class="row mb-3">
    <label for="sector" class="col-md-4 col-form-label text-md-end">{{ __('Sector') }}</label>

    <div class="col-md-6">
        <div class="form-check form-check-inline  @error('sector') is-invalid @enderror">
            <input class="form-check-input" type="radio" name="sector" id="sector_public" value="public" @if (old('sector') == 'public') checked @endif>
            <label class="form-check-label" for="sector_public">Public</label>
        </div>
        <div class="form-check form-check-inline  @error('sector') is-invalid @enderror">
            <input class="form-check-input" type="radio" name="sector" id="sector_private" value="private" @if (old('sector') == 'private') checked @endif>
            <label class="form-check-label" for="sector_private">Private</label>
        </div>
        
        @error('sector')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>
    <div class="col-md-6">
        <select name="address" class="form-control @error('address') is-invalid @enderror">
            <option value="">Select</option>
            @foreach (App\Models\User::$jordan_cities as $city)
                <option @if(old('address') == $city) selected @endif value="{{$city}}">{{$city}}</option>
            @endforeach 
        </select>
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
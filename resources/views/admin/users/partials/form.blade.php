@csrf

<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ime') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
            value="{{ old('name') }} @isset($user){{$user->name}}@endisset" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adresa') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
            value="{{ old('email') }} @isset($user){{$user->email}}@endisset" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
@isset($create)
<div class="row mb-3">
    
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Šifra') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
@endisset

<div class="mb-3">
    @foreach ($roles as $role)
        <div class="form-check">
            <input name="roles[]" class="form-check-input" type="checkbox" value="{{$role->id}}" id="{{$role->name}} "
            @isset($user)
                @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                    checked
                @endif
                
            @endisset>
            <label for="{{$role->name}}" class="form-check-label">{{$role->name}}</label>
        </div>
    @endforeach
</div>

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary text-white">
            {{ __('Potvrdi') }}
        </button>
    </div>
</div>
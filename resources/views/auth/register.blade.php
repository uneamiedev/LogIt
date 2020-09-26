@extends('layouts.app')

@section('content')
<section class="{{Request::path()}}-section__form container">
    @include('auth.auth-tabs')
    <form method="POST" action="{{ route(Request::path()) }}" class="form">
        @csrf
        <div class="field @error('name') error @enderror">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Amy" required autocomplete="name" autofocus>
            @error('name')
                <em role="alert">{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('email') error @enderror">
            <label for="email" >{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="mail@example.com" required autocomplete="email">
            @error('email')
                <em role="alert">{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('password') error @enderror">
            <label for="password">{{ __('Password') }}</label>
            <span class="hint">{{ __('The password must contain at least 8 caracters.') }}</span>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <em role="alert">{{ $message }}</em>
            @enderror
        </div>

        <div class="field">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form__footer">
            <button type="submit" class="btn btn--primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</section>
@endsection

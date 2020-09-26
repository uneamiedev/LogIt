@extends('layouts.app')

@section('content')
<section class="{{Request::path()}}-section__form container">
    @include('auth.auth-tabs')
    <form method="POST" action="{{ route(Request::path()) }}" class="form">
        @csrf
        <div class="field @error('email') error @enderror">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="mail@example.com" required autocomplete="email" autofocus>

            @error('email')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('password') error @enderror">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">

            @error('password')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field field--checkbox">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="form__footer">
            @if (Route::has('password.request'))
                <a class="is-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <button type="submit" class="btn btn--primary">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</section>
@endsection

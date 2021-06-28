@extends('layouts.app')

@section('content')

<section class="container">
    <h1>{{ __('Edit profile')}}</h1>
    <form method="POST" action="{{ route('profile.update', ['user' => $user->username] )}}" class="form">
        @csrf
        @method('PATCH')

        <div class="field @error('email') error @enderror">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required autofocus>

            @error('email')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('name') error @enderror">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name', $user->name ?? '') }}" required autofocus>

            @error('name')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('username') error @enderror">
            <label for="username">{{ __('Username') }}</label>
            <span class="hint">{{ __('max 30 characters (letters, numbers, undescore)') }}</span>
            <input id="username" type="text" name="username" value="{{ old('username', $user->username ?? '') }}" required autofocus>

            @error('username')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('bio') error @enderror">
        <label for="bio">{{ __('Bio') }} {{ __('(Optional)') }}</label>
            <span class="hint">{{ __('max 255 characters') }}</span>
            <textarea name="bio" id="bio" rows="3" placeholder="Tell us about yourself!">{{ old('bio', $user->bio ?? '') }}</textarea>
            @error('bio')
                <em>{{ $message }}</em>
            @enderror
        </div>


        <div class="field @error('link_web') error @enderror">
            <label for="link_web">{{ __('Link') }} {{ __('(Optional)') }}</label>
            <span class="hint">{{ __('Website, GitHub, GitLab, etc') }}</span>
            <input id="link_web" type="url" name="link_web" value="{{ old('link_web', $user->link_web ?? '') }}" autofocus>

            @error('link_web')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field @error('location') error @enderror">
            <label for="location">{{ __('Location') }} {{ __('(Optional)') }}</label>
            <input id="location" type="text" name="location" value="{{ old('location', $user->location ?? '') }}" autofocus>

            @error('location')
                <em>{{ $message }}</em>
            @enderror
        </div>


        <div class="h3">Confirm your password to save the changes</div>
        <div class="field @error('password') error @enderror">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autofocus>

            @error('password')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="field">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autofocus>

            @error('password_confirmation')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="form__footer">
            <a class="btn btn--tertiary" href="{{ URL::previous() }}">{{ _('Cancel') }}</a>
            <button type="submit" class ="btn btn--primary">Save change</button>
        </div>
    </form>
</section>

@endsection

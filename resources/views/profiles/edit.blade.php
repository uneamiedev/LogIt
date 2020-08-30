@extends('layouts.app')

@section('content')
{{-- Header --}}
<div class="jumbotron">
    <div class="container">
    <h1>{{ __('Edit profile')}}</h1>
    <form method="POST" action="{{ route('profile.update', ['user' => $user->username] )}}">
        @csrf
        @method('PATCH')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name ?? '') }}" required autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>

            <div class="col-md-6">
                <input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio', $user->bio ?? '') }}" autofocus>

                @error('bio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="link_web" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>

            <div class="col-md-6">
                <input id="link_web" type="url" class="form-control @error('link_web') is-invalid @enderror" name="link_web" value="{{ old('link_web', $user->link_web ?? '') }}" autofocus>

                @error('link_web')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

            <div class="col-md-6">
                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location', $user->location ?? '') }}" autofocus>

                @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <hr>
        <button type="submit" class ="btn btn-secondary">Save change</button>
    </form>
    </div>
</div>
@endsection

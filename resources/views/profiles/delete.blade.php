@extends('layouts.app')

@section('content')
<section class="containde">
    <h1>{{ __('Delete your account') }}</h1>
    <p>{{ __('Your profile, timelines and logs will be deleted from LogIt.') }}</p>
    <form method="POST" action="{{ route('profile.destroy', ['user' => auth()->user()]) }}">
        @csrf
        <button type="submit" class="btn btn--danger">
            @method('DELETE')
            {{ __('Delete account')}}
        </button>
    </form>
</section>
@endsection

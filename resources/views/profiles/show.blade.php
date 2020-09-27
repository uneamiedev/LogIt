@extends('layouts.app')

@section('content')

    @include('partials.profiles.header')

    <section class="container">
        @switch(Route::currentRouteName())
        @case('profile.show')
            @include('partials.profiles.body-logs')
            @break
        @endswitch
    </section>

@endsection

@extends('layouts.app')

@section('content')

    @include('partials.profiles.header')

    <section class="container">
        @switch(Route::currentRouteName())
        @case('profile.show')
            @include('partials.profiles.body-logs')
            @break
        @case('timeline.index.public')
            @include('partials.profiles.body-timelines')
            @break
        @case('profile.following')
            @include('partials.profiles.body-following')
            @break
    @endswitch
    </section>

@endsection

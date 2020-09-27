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
        @endswitch
    </section>

@endsection

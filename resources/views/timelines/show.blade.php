@extends('layouts.app')

@section('content')
<section class="container">
    @include('partials.timelines.header')
    @auth
        @include('partials.timelines.actions')
    @endauth
    @include('partials.timelines.body')
</section>
@endsection

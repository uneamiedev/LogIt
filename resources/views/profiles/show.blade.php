@extends('layouts.app')

@section('content')
{{-- Header --}}
<div class="jumbotron">
    <div class="container">
        <h1>{{$user->name}} @<span>{{$user->name}}</span></h1>
        <p>Ceci est une courte bio !</p>
        <button class="btn btn-primary btn-lg">Follow</button>
        <div>
        <a href="#">Timeline: {{ $user->timelines->count() }}</a>
            <a href="#">Logs: 0</a>
            <a href="#">Following: {{ $user->follows->count() }}</a>
            <a href="#">Follower: 0</a>
        </div>
    </div>
</div>

{{-- Following / Followers --}}
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Following</h2>
            <ul>
                @foreach($user->follows as $followed_user)
            <li><a href="{{ route('profile.show', ['user' => $followed_user->id]) }}">{{ $followed_user->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Followers</h2>
            <ul>
                <li>User</li>
            </ul>
        </div>
    </div>
</div>

{{-- Curated feed --}}
<div class="jumbotron">
    <div class="container">
        {{-- Timelines'list --}}
        @if($user->timelines->count() > 0)
        <div class="card mb-4">
            <div class="card-header">{{ __('Timelines') }}</div>

            @foreach($user->timelines as $timeline)
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('timeline.show', ['timeline' => $timeline])}}">{{ $timeline->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        {{-- Logs'list --}}
        <div class="card">
            <div class="card-header">{{ __('Logs') }}</div>

            <div class="card-body">
                <div class="card-body">Log</div>
            </div>
        </div>
    </div>
</div>
@endsection

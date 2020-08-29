@extends('layouts.app')

@section('content')
{{-- Header --}}
<div class="jumbotron">
    <div class="container">
        <h1>{{$user->name}} <span>{{'@'}}{{$user->username}}</span></h1>
        @if($user->bio)
            <p>{{$user->bio}}</p>
        @endif

        @if($user->location)
            <p class="btn btn-link">{{$user->location}}</p>
        @endif

        @if($user->link_web)
            <a class="btn btn-link" href="{{$user->link_web}}">{{$user->link_web}}</a>
        @endif

        @unless(auth()->user()->is($user))
        <form method="POST" action="{{ route('follow.store', $user->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-lg">
                {{ auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow'}}
            </button>
        </form>
        @endunless

        @if(auth()->user()->is($user))
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-secondary btn-lg">
                {{ __('Edit profile') }}
            </a>
        @endif

        <div>
            <a class="badge badge-pill badge-secondary" href="#">Timelines: {{ $timelines->count() }}</a>
            <a class="badge badge-pill badge-secondary" href="#">Logs: {{ $logs->count() }}</a>
            <a class="badge badge-pill badge-secondary" href="#">Following: {{ $user->follows()->count() }}</a>
            <a class="badge badge-pill badge-secondary" href="#">Follower: {{ $user->followers()->count() }}</a>
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
                    <li><a href="{{ route('profile.show', ['user' => $followed_user->username]) }}">{{ $followed_user->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Followers</h2>
            <ul>
                @foreach($user->followers as $follower)
                <li><a href="{{ route('profile.show', ['user' => $follower->username]) }}">{{ $follower->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

{{-- Curated feed --}}
<div class="jumbotron">
    <div class="container">
        {{-- Timelines'list --}}
        @if($timelines->isNotEmpty())
        <div class="card mb-4">
            <div class="card-header">{{ __('Timelines') }}</div>

            @foreach($timelines as $timeline)
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('timeline.show', ['timeline' => $timeline, 'user' => $user->username])}}">{{ $timeline->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        {{-- Logs'list --}}
        @if($logs->isNotEmpty())
        <div class="card">
            <div class="card-header">{{ __('Logs') }}</div>
            <div class="card-body">
            @foreach($logs as $log)
            <div class="card mb-4">
                <div class="card-body">
                    @include('logs.default')
                </div>
            </div>
            @endforeach
        </div>
        </div>
        @endif
    </div>
</div>
@endsection

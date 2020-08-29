@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Log Creation form --}}
            @auth
            <div class="card mb-4">
                <div class="card-header">{{ __('Create a timeline') }}</div>

                <form method="POST" action="/timelines">
                    @csrf
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="form-group">
                            <label for="timelineTitle">{{ __('Project Title')}}</label>
                            <input required class="form-control" type="text" name="title" id="timelineTitle" placeholder="My project">
                            @error('title')
                                <div class="bg-danger text-white">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="from-group">
                            <label for="timelineDescription">{{ __('Description') }}</label>
                            <textarea required class="form-control" name="description" id="timelineDescription" rows="3" placeholder="What's the project about ?"></textarea>
                            @error('description')
                                <div class="bg-danger text-white">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Url web --}}
                        <div class="form-group">
                            <label for="timelineUrlWeb">{{ __('Link to your project') }}</label>
                            <input class="form-control" type="url" name="url_web" id="timelineUrlWeb" placeholder="https://myproject.gg">
                            @error('url_web')
                                <div class="bg-danger text-white">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <button type="submit" class ="btn btn-secondary">Create my timeline</button>
                    </div>
                </form>
            </div>
            @endauth

            {{-- Timeline Feed --}}
            <div class="card">
                <div class="card-header">{{ $timelines->count() }} {{ __('Timelines') }}</div>

                <div class="card-body">
                    @foreach($timelines as $timeline)
                        <div class="timeline mb-5">
                            <div class="bg-secondary" style="height: 400px; width: 100%; overflow: hidden;">
                                <img src="{{ $timeline->cover }}" alt="{{ $timeline->title }}">
                            </div>
                            <h4><a href="#">{{ $timeline->title }}</a></h4>
                            <p>{{ $timeline->description }}</p>
                            <a href="{{ route('timeline.show', ['timeline' => $timeline->slug, 'user' => $user->username]) }}" class="btn btn-outline-secondary">See timeline</a>
                            @auth
                            <a href="{{ route('timeline.edit', ['timeline' => $timeline->slug, 'user' => $user->username]) }}" class="btn btn-outline-secondary">Edit timeline</a>
                            <form method="POST" action="/timelines/{{$timeline->slug}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">{{ __('Delete timeline')}}</button>
                                {{-- TO DO : Add confirmation --}}
                            </form>
                            @endauth
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

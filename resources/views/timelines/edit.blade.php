@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Log Creation form --}}
            <div class="card mb-4">
                <div class="card-header">{{ __('Edit timeline:') }} {!! old('title', $timeline->title) !!}</div>

                <form method="POST" action="{{ route('timeline.update', $timeline) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="form-group">
                            <label for="timelineTitle">{{ __('Project Title')}}</label>
                            <input required class="form-control" type="text" name="title" id="timelineTitle" placeholder="My project" value={{ old('title', $timeline->title ?? '') }}>
                            @error('title')
                                <div class="bg-danger text-white">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="from-group">
                            <label for="timelineDescription">{{ __('Description') }}</label>
                            <textarea required class="form-control" name="description" id="timelineDescription" rows="3" placeholder="What's the project about ?">{{ old('description', $timeline->description ?? '') }}</textarea>
                            @error('description')
                                <div class="bg-danger text-white">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Url web --}}
                        <div class="form-group">
                            <label for="timelineUrlWeb">{{ __('Link to your project') }}</label>
                            <input class="form-control" type="url" name="url_web" id="timelineUrlWeb" placeholder="https://myproject.gg" value="{{ old('url_web', $timeline->url_web ?? '') }}">
                            @error('url_web')
                                <div class="bg-danger text-white">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <button type="submit" class ="btn btn-secondary">{{ __('Sauvegarder') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

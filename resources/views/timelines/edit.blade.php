@extends('layouts.app')

@section('content')
<section class="container">
    <h1>{{ __('Edit') }} {!! old('title', $timeline->title) !!}</h1>

    <form method="POST" action="{{ route('timeline.update', $timeline) }}" class="form">
        @csrf
        @method('PUT')

            {{-- Title --}}
            <div class="field @error('title') error @enderror">
                <label for="timelineTitle">{{ __('Project Title')}}</label>
                <input required  type="text" name="title" id="timelineTitle" placeholder="My project" value={{ old('title', $timeline->title ?? '') }}>
                @error('title')
                    <em>{{ $message }}</em>
                @enderror
            </div>

            {{-- Description --}}
            <div class="field @error('description') error @enderror">
                <label for="timelineDescription">{{ __('Description') }}</label>
                <textarea required  name="description" id="timelineDescription" rows="3" placeholder="What's the project about ?">{{ old('description', $timeline->description ?? '') }}</textarea>
                @error('description')
                    <em>{{ $message }}</em>
                @enderror
            </div>

            {{-- Url web --}}
            <div class="field @error('url_web') error @enderror">
                <label for="timelineUrlWeb">{{ __('Link to your project') }}</label>
                <input  type="url" name="url_web" id="timelineUrlWeb" placeholder="https://myproject.gg" value="{{ old('url_web', $timeline->url_web ?? '') }}">
                @error('url_web')
                    <em>{{ $message }}</em>
                @enderror
            </div>

            <div class="form__footer">
                <a class="btn btn--tertiary" href="{{ URL::previous() }}">{{ _('Cancel') }}</a>
                <button type="submit" class ="btn btn--primary">{{ __('Sauvegarder') }}</button>
            </div>

    </form>
</section>
@endsection

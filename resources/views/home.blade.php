@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- TO DO: Add timeline creation form --}}

            @if($timelines->count() > 0)
                {{-- Log Creation form --}}
                <div class="card">
                    <form method="POST" action="/logs">
                        @csrf
                        <div class="from-group">
                            <div class="card-header">{{ __('Add a log') }}</div>

                            <div class="card-body">
                                <label for="timelineSelect">{{ __('Select a project') }}</label>
                                <select name="timeline" id="timelineSelect" class="custom-select">
                                    @foreach($timelines as $timeline)
                                        @dump($timeline)
                                        <option value="{{ $timeline->id }}">{{ $timeline->title }}</option>
                                    @endforeach
                                </select>
                                @error('timeline')
                                    <div class="bg-danger text-white">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card-body">
                                <label for="logBody" class="sr-only">{{ __('How is it going ?') }}</label>
                                <textarea class="form-control" name="body" id="logBody" rows="3" placeholder="Share your story!"></textarea>
                                <hr>
                                <button type="submit" class ="btn btn-secondary">Log my day!</button>
                                @error('body')
                                    <div class="bg-danger text-white">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            @endif

            {{-- Logs Feed --}}
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @foreach($logs as $log)
                        @include('logs.default')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

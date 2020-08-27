@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Log Creation form --}}
            <div class="card">
                <form method="POST" action="/logs">
                    @csrf
                    <div class="from-group">
                        <div class="card-header"><label for="logBody">{{ __('Add a log') }}</label></div>
                        <div class="card-body">
                            <textarea class="form-control" name="body" id="logBody" rows="3" placeholder="Share your story!"></textarea>
                            <hr>
                            <button type="submit" class ="btn btn-secondary">Log my day!</button>
                        </div>
                        @error('body')
                            <div class="bg-danger text-white">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div>

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

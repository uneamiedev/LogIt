@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Timeline Header--}}
            @if(!empty($timeline))
            <div class="card">
                <div class="card-header">
                    <h1>{{ $timeline->title }}</h1>
                </div>
                <div class="card-body">
                    <div class="timeline mb-5">
                        <div class="bg-secondary" style="height: 400px; width: 100%; overflow: hidden;">
                            <img src="{{ $timeline->cover }}" alt="{{ $timeline->title }}">
                        </div>
                        <p>{{ $timeline->description }}</p>
                        <a href="#" class="btn btn-outline-secondary">Lien</a>
                        @can('update', $timeline)
                            <a href="{{ route('timeline.edit', ['timeline' => $timeline->slug]) }}" class="btn btn-outline-secondary">Edit timeline</a>
                        @endcan
                        @can('delete', $timeline)
                            <a href="#" class="btn btn-outline-secondary">Delete timeline</a>
                        @endcan
                    </div>
                </div>
            </div>
            @endif

            {{-- Logs --}}
            <div class="card mt-4">
                <div class="card-body">
                    @forelse($logs as $log)
                                @include('logs.custom')
                            @empty
                                @include('logs.none')
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

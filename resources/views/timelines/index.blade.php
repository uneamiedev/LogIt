@extends('layouts.app')

@section('content')
    @can('create', App\Timeline::class)
        @include('timelines.create')
    @endcan

    <section class="timeline-feed container">
        <header class="timeline-feed__header">
            <h2>Your timelines</h2>
            <div class="card-header">{{ $timelines->count() }} {{ __('Timelines') }}</div>

        </header>
        <ul class="timeline-feed__body">
            @foreach($timelines as $timeline)
                @include('partials.timelines.excerpt')
            @endforeach
        </ul>
    </section>
@endsection

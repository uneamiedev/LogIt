@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Timeline Feed --}}
            <div class="card">
                <div class="card-header">{{ $timelines->count() }} {{ __('Timelines') }}</div>

                <div class="card-body">
                    @foreach($timelines as $timeline)
                        <div class="timeline">
                            <div class="bg-secondary" style="height: 400px; width: 100%; overflow: hidden;">
                                <img src="{{ $timeline->cover }}" alt="{{ $timeline->title }}">
                            </div>
                            <h4><a href="#">{{ $timeline->title }}</a></h4>
                            <p>{{ $timeline->description }}</p>
                            <a href="#" class="btn btn-outline-secondary">See timeline</a>
                            <a href="#" class="btn btn-outline-secondary">Edit timeline</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

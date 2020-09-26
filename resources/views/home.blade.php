@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @can('create', App\Log::class)
                @if($timelines->count() > 0)
                    @include('logs.create')
                @endif
            @endcan

            {{-- Logs Feed --}}
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @forelse($logs as $log)
                        @include('logs.default')
                    @empty
                        <p>{{ __('Follow other users or start loging our progress') }}</p>
                        {{-- TO DO: add timeline creation form, log creation form, link to explore page --}}
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

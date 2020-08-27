@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @foreach($logs as $log)
                        <div class="log">
                            <div class="rounded-circle bg-secondary" style="height: 50px; width: 50px;">
                                <a href="#"><img src="#" alt="{{ $log->user->name }}"></a>
                            </div>
                            <h4>{{ $log->user->name }} @<span>{{ $log->user->name }}</span></h4>
                            <p>{{ $log->body }}</p>
                            <div>#projet {{ $log->timeline_id}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

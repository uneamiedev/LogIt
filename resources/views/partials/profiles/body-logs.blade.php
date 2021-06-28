@forelse($logs as $log)
    @include('logs.default')
@empty
    @include('logs.none')
@endforelse

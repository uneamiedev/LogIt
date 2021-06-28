<section class="timeline">
    @forelse($logs as $log)
        @include('logs.custom')
    @empty
        @include('logs.none')
    @endforelse
</section>

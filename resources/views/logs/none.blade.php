<div class="empty-state empty-state--log">
    <p class="log-empty-state">
        {{ __('No logs found yet!')}}
    </p>

    @can('create', App\Log::class)
        <a href="{{ route('home')}}" class="btn btn--primary">Add a log now !</a>
    @endcan
</div>

<div class="empty-state empty-state--timeline">
    <p class="log-empty-state">
        {{ __('No timeline found yet!')}}
    </p>

    @can('create', App\Timeline::class)
        <a href="{{ route('timeline.index')}}" class="btn btn--primary">Create a timeline now !</a>
    @endcan
</div>

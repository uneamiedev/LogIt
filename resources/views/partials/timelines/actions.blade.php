<div class="actions actions--timeline">
    @can('update', $timeline)
        <a href="{{ route('timeline.edit', ['timeline' => $timeline->slug, 'user' => $user->username]) }}" class="btn btn-outline-secondary">Edit timeline</a>
    @endcan

    @can('delete', $timeline)
        @include('timelines.delete')
    @endcan
</div>

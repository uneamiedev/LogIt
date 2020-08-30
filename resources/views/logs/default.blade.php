<div class="log mb-4">
    <div class="rounded-circle bg-secondary" style="height: 50px; width: 50px;">
        <a href="#"><img src="#" alt="{{ $log->user->name }}"></a>
    </div>
    <h4>{{ $log->user->name }} @<span>{{ $log->user->name }}</span></h4>
    <p>{{ $log->body }}</p>
    {{-- TO DO: pass $user->username to the route --}}
    {{-- <a class="badge badge-pill badge-primary" href="{{ route('timeline.show', ['timeline' => $log->timeline->slug]) }}">Project: {{ $log->timeline->title  }}</a> --}}
    @can('delete', $log)
    <form method="POST" action="{{ route('log.destroy', $log) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger" type="submit">{{ __('Delete log')}}</button>
        {{-- TO DO : Add confirmation --}}
    </form>
    @endcan
</div>

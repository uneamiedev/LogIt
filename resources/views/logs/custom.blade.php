<div class="card mt-4 log log--custom mb-4">
    <div class="card-body">
        <p>{{ $log->body }}</p>
        @auth
        <form method="POST" action="{{ route('log.destroy', $log) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" type="submit">{{ __('Delete log')}}</button>
            {{-- TO DO : Add confirmation --}}
        </form>
        @endauth
    </div>
</div>

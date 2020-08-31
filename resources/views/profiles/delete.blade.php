<div class="card mb-4">
    <form method="POST" action="{{ route('profile.destroy', ['user' => auth()->user()]) }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-lg">
            @method('DELETE')
            {{ __('Delete account')}}
        </button>
    </form>
</div>

@auth
    @unless(auth()->user()->is($user))
    <form method="POST" action="{{ route('follow.store', $user->id) }}" class="form-follow">
        @csrf
        <button type="submit" class="btn btn--secondary">
            {{ auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow'}}
        </button>
    </form>
    @endunless
@endauth

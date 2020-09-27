@auth
    @unless(auth()->user()->is($user))
    <form method="POST" action="{{ route('follow.store', $user->id) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-lg">
            {{ auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow'}}
        </button>
    </form>
    @endunless
@endauth

@can('update', $user)
    <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-secondary btn-lg">
        {{ __('Edit profile') }}
    </a>
@endcan

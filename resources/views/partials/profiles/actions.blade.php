@include('partials.profiles.action-follow')

@can('update', $user)
    <a href="{{ route('profile.edit', $user->id) }}" class="btn btn--secondary btn-edit">
        {{ __('Edit profile') }}
    </a>
@endcan

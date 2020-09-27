<li class="user-card">
    <div class="user-card__header">
        <div class="avatar avatar--{{ $user->theme }}"></div>
        <a href="{{ route('profile.show', ['user' => $user->username]) }}">{{ $user->name }} {{'@'}}{{ $user->username }}</a>
    </div>
    @if($user->bio)
        <p class="user-card__body">
            {{ Str::limit($user->bio, 55)}}
        </p>
    @endif
    @include('partials.profiles.action-follow')
</li>

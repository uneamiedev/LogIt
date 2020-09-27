<header class="header-section header-section--profile">
    <div class="container">
        <span class="h1">{{ $user->name }}</span>
        <span class="header-section--profile__username">{{'@'}}{{ $user->username }}</span>
        @if($user->bio)
            <p class="header-section--profile__description">
                {{ $user->bio }}
            </p>
        @endif
        @if($user->location || $user->link_web)
        <div class="header-section--profile__misc">
            @if($user->location)
                <span>{{ $user->location }}</span>
            @endif

            @if($user->link_web)
                <span>
                <a class="is-link" href="{{ $user->link_web }}">{{ $user->link_web }}</a>
                </span>
            @endif
        </div>
        @endif
    </div>

    @include('partials.profiles.tabs')
</header>

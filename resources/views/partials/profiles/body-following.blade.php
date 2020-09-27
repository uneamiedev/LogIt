<ul>
    @foreach($user->follows as $followed_user)
        @include('partials.profiles.user-card', ['user' => $followed_user])
    @endforeach
</ul>

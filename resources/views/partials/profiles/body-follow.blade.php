<ul>
    @foreach($users as $followed_user)
        @include('partials.profiles.user-card', ['user' => $followed_user])
    @endforeach
</ul>

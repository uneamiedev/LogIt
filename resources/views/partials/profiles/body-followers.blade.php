<div class="col-md-6">
    <h2>Followers</h2>
    <ul>
        @foreach($user->followers as $follower)
        <li><a href="{{ route('profile.show', ['user' => $follower->username]) }}">{{ $follower->name }}</a></li>
        @endforeach
    </ul>
</div>

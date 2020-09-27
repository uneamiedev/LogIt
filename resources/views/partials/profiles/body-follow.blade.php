{{-- Following / Followers --}}
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Following</h2>
            <ul>
                @foreach($user->follows as $followed_user)
                    <li><a href="{{ route('profile.show', ['user' => $followed_user->username]) }}">{{ $followed_user->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Followers</h2>
            <ul>
                @foreach($user->followers as $follower)
                <li><a href="{{ route('profile.show', ['user' => $follower->username]) }}">{{ $follower->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

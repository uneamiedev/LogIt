<nav class="tabs">
    <ul>
        <li class="tabs__item @if(Route::currentRouteName() === 'timeline.index.public') current @endif"><a href="{{ route('timeline.index.public', $user) }}">Timelines</a></li>
        <li class="tabs__item @if(Route::currentRouteName() === 'profile.show') current @endif"><a href="{{ route('profile.show', $user) }}">Logs</a></li>
        <li class="tabs__item"><a href="#">Following</a></li>
        <li class="tabs__item"><a href="#">Followers</a></li>
    </ul>
</nav>

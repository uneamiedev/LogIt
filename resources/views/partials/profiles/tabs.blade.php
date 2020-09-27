<nav class="tabs">
    <ul>
        <li class="tabs__item"><a href="#">Timelines</a></li>
        <li class="tabs__item @if(Route::currentRouteName() === 'profile.show') current @endif"><a href="{{ route('profile.show', $user) }}">Logs</a></li>
        <li class="tabs__item"><a href="#">Following</a></li>
        <li class="tabs__item"><a href="#">Followers</a></li>
    </ul>
</nav>

<nav class="tabs">
    <ul>
        <li class="tabs__item @if(Request::path() === 'login' ) current @endif"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li class="tabs__item @if(Request::path() === 'register' ) current @endif"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
    </ul>
</nav>

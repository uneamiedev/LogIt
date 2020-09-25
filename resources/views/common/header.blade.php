<header class="header">
    <nav class="navbar container">
        <a class="navbar__logo" href="{{ url('/') }}">
            <img src="{{ asset('images/svg/logit.svg') }}" alt="LogIt logo">
        </a>

        <ul class="navbar__nav">
            <!-- Authentication Links -->
            @guest
                <li>
                    <a class="btn btn--tertiary" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a class="btn btn--secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li>
                    <a class="btn btn--tertiary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
</header>

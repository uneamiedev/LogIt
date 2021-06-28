<article class="log">
    @include('partials.logs.actions')
    <header class="log__header">
    <div class="avatar avatar--{{ $log->user->theme }}"></div>
    <a href="{{ route('profile.show', $log->user)}}" class="log__header__name"><span>{{ $log->user->name }} </span>{{'@'}}{{ $log->user->username }} </a>
    </header>
    <p class="log__text">
        {{ $log->body }}
    </p>
    <footer class="log__footer">
        <time datetime="{!! date('d/m/Y', strtotime($log->created_at)) !!}">{!! date('d/m/Y', strtotime($log->created_at)) !!}</time>
        <a href="{{ route('timeline.show', ['timeline' => $log->timeline->slug, 'user' => $log->user->username]) }}" class="log__footer__timeline">{{ $log->timeline->title  }}</a>
    </footer>
</article>

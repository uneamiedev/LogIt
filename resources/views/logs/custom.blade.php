<article class="log log--timeline">
    <p class="log__text">
        {{ $log->body }}
    </p>
    <footer class="log__footer">
        <time datetime="{!! date('d/m/Y', strtotime($log->created_at)) !!}">{!! date('d/m/Y', strtotime($log->created_at)) !!}</time>
        @include('partials.logs.actions')
    </footer>
</article>

<header class="header-section header-section--timeline">
    <h1 class="text-reveal">{{ $timeline->title }}</h1>
    <div class="meta">
        <address>by <a href="{{ route('profile.show', $user ) }}" rel="author" class="is-bold is-link">{{ $user->name }}</a></address>
        <div>created on <time pubdate datetime="{!! date('d/m/Y', strtotime($timeline->created_at)) !!}">{!! date('d/m/Y', strtotime($timeline->created_at)) !!}</time> | updated on <time datetime="{!! date('d/m/Y', strtotime($timeline->updated_at)) !!}">{!! date('d/m/Y', strtotime($timeline->updated_at)) !!}</time>
        </div>
    </div>

    @if($timeline->description)
        <p>{{ $timeline->description }}</p>
    @endif

    @if($timeline->url_web)
        <a class="is-link" href="{{ $timeline->url_web }}" target="_blank" rel="noopener noreferrer">Voir le projet en ligne</a>
    @endif
</header>

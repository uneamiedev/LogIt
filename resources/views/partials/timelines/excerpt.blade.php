<li class="timeline-excerpt">
    <a href="{{ route('timeline.show', ['timeline' => $timeline, 'user' => $user])}}" class="h3 text-reveal timeline-excerpt__title">{{ $timeline->title }}</a>

    @if($timeline->description)
        <p class="timeline-excerpt__desc">{{ $timeline->description }}</p>
    @endif
    @include('partials.timelines.actions')
    <ul class="timeline-excerpt__meta">
        <li>created on <time pubdate datetime="{!! date('d/m/Y', strtotime($timeline->created_at)) !!}">{!! date('d/m/Y', strtotime($timeline->created_at)) !!}</time></li>
        <li>updated on <time datetime="{!! date('d/m/Y', strtotime($timeline->updated_at)) !!}">{!! date('d/m/Y', strtotime($timeline->updated_at)) !!}</time></li>
    </ul>
</li>

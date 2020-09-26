<li class="timeline-excerpt">
    <div class="h3 text-reveal">{{ $timeline->title }}</div>
    <div>created on <time pubdate datetime="{!! date('d/m/Y', strtotime($timeline->created_at)) !!}">{!! date('d/m/Y', strtotime($timeline->created_at)) !!}</time> | updated on <time datetime="{!! date('d/m/Y', strtotime($timeline->updated_at)) !!}">{!! date('d/m/Y', strtotime($timeline->updated_at)) !!}</time></div>

    @if($timeline->description)
        <p>{{ $timeline->description }}</p>
    @endif
</li>

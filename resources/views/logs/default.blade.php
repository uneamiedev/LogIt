<div class="log mb-4">
    <div class="rounded-circle bg-secondary" style="height: 50px; width: 50px;">
        <a href="#"><img src="#" alt="{{ $log->user->name }}"></a>
    </div>
    <h4>{{ $log->user->name }} @<span>{{ $log->user->name }}</span></h4>
    <p>{{ $log->body }}</p>
    <a href="{{ route('timeline.show', ['timeline' => $log->timeline->slug]) }}">{{ $log->timeline->title  }}</a>
</div>

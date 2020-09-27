@forelse($timelines as $timeline)
    <ul>
        @include('partials.timelines.excerpt')
    <ul>
@empty
    @include('partials.timelines.none')
@endforelse

        {{-- Timelines'list --}}
        @if($timelines->isNotEmpty())
        <div class="card mb-4">
            <div class="card-header">{{ __('Timelines') }}</div>

            @foreach($timelines as $timeline)
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('timeline.show', ['timeline' => $timeline, 'user' => $user->username])}}">{{ $timeline->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif

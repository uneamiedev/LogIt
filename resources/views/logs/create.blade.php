<section class="container">
    <form method="POST" action="/logs" class="form">
        @csrf
            <div class="field @error('timeline') error @enderror">
                <label for="timelineSelect">{{ __('Select a project') }}</label>
                <select name="timeline" id="timelineSelect" class="custom-select">
                    @foreach($timelines as $timeline)
                        @dump($timeline)
                        <option value="{{ $timeline->id }}">{{ $timeline->title }}</option>
                    @endforeach
                </select>
                @error('timeline')
                    <div class="bg-danger text-white">{{ $message }}</div>
                @enderror
            </div>

            <div class="field @error('body') error @enderror">
                <label for="logBody" class="sr-only">{{ __('How is it going ?') }}</label>
                <textarea name="body" id="logBody" rows="3" placeholder="Share your story!"></textarea>
                @error('body')
                    <em>{{ $message }}</em>
                @enderror
            </div>
            <div class="form__footer">
                <button type="submit" class ="btn btn--primary">Log my day!</button>
            </div>
    </form>
</section>

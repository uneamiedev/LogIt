<section class="container">
    <h1>{{ __('Create a timeline') }}</h1>

    <form method="POST" action="{{ route('timeline.store') }}" class="form">
        @csrf
        {{-- Title --}}
        <div class="field @error('title') error @enderror">
            <label for="timelineTitle">{{ __('Project Title')}}</label>
            <input required type="text" name="title" id="timelineTitle" placeholder="My project">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </div>

        {{-- Description --}}
        <div class="field @error('description')error @enderror">
            <label for="timelineDescription">{{ __('Description') }}</label>
            <span class="hint">{{ __('max 255 caracters') }}</span>
            <textarea required name="description" id="timelineDescription" rows="3" placeholder="What's the project about ?"></textarea>
            @error('description')
                <em>{{ $message }}</em>
            @enderror
        </div>

        {{-- Url web --}}
        <div class="field @error('url_web') error @enderror">
            <label for="timelineUrlWeb">{{ __('Link to your project') }}</label>
            <span class="hint">{{ __('Website, GitHub, GitLab, etc') }}</span>
            <input type="url" name="url_web" id="timelineUrlWeb" placeholder="https://myproject.gg">
            @error('url_web')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <div class="form__footer">
            <a class="btn btn--tertiary" href="{{ route('home') }}">{{ _('Cancel') }}</a>
            <button type="submit" class ="btn btn--primary">{{ __('Create') }}</button>
        </div>
    </form>
</section>

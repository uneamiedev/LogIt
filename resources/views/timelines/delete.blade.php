<form method="POST" action="{{ route('timeline.destroy', $timeline) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-secondary btn--danger" type="submit">{{ __('Delete timeline')}}</button>
</form>

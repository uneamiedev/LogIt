@can('delete', $log)
<form method="POST" action="{{ route('log.destroy', $log) }}">
    @csrf
    @method('DELETE')
    <button class="is-danger" type="submit">{{ __('Delete log')}}</button>
</form>
@endcan

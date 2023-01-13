<form onsubmit="return confirm('Si sta per eliminare: {{ $item->title }}. Confermare?')" class="d-inline"
    action="{{ route('comics.destroy', $item) }}" method="POST">
    @csrf
    @method('DELETE')
    <button href="#" class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
</form>

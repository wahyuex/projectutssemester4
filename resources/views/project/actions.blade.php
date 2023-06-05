<div class="d-flex">
    {{-- <a href="{{ route('project.show', ['project' => $barang->barang_id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a> --}}
    <a href="{{ route('project.edit', ['project' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form
            action="{{ route('project.destroy', ['project' => $barang->id]) }}"
            method="POST">
            @csrf
            @method('delete')
            <button type="submit"
                class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
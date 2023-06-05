<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Barang</h1>

        <form method="POST" action="{{ route('project.update',$barang->id) }}">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang:</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                    value="{{ old('kode_barang',$barang->KodeBarang) }}" required>
            </div>

            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                    value="{{ old('kode_barang',$barang->NamaBarang) }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi_barang" class="form-label">Deskripsi Barang:</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang"
                    value="{{ old('kode_barang',$barang->DeskripsiBarang) }}" required>
            </div>

            <div class="mb-3">
                <label for="harga_barang" class="form-label">Harga Barang:</label>
                <input type="number" class="form-control" id="harga_barang" name="harga_barang"
                    value="{{ old('kode_barang',$barang->HargaBarang) }}" required>
            </div>

            <div class="mb-3">
                <label for="satuan_barang" class="form-label">Satuan Barang:</label>
                <select class="form-select" id="satuan_barang" name="satuan_barang" required>
                    @foreach ($satuans as $satuan)
                        <option value="{{ $satuan->id }}"
                            {{ old('satuan',$barang->satuan_id)==$satuan->id ? 'selected' : '' }}>
                            {{ $satuan->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

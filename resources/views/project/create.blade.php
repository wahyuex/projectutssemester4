<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Create Barang</h1>

        <form method="POST" action="{{ route('project.store') }}">
            @csrf

            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang:</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
            </div>

            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi_barang" class="form-label">Deskripsi Barang:</label>
                <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" required></textarea>
            </div>

            <div class="mb-3">
                <label for="harga_barang" class="form-label">Harga Barang:</label>
                <input type="number" class="form-control" id="harga_barang" name="harga_barang" required>
            </div>

            <div class="mb-3 mb-5">
                <label for="satuan_barang" class="form-label">Satuan Barang:</label>
                <select class="form-select" id="satuan_barang" name="satuan_barang" required>
                    @foreach ($satuans as $satuan)
                        <option value="{{ $satuan->id }}">{{ $satuan->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-8">Create</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

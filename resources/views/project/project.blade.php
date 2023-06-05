<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
@vite('resources/sass/app.scss')
<body>
    <div class="container">
        <h1>List Barang</h1>

        <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Harga Barang</th>
                    <th>Satuan Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->KodeBarang }}</td>
                        <td>{{ $barang->NamaBarang }}</td>
                        <td>{{ $barang->DeskripsiBarang }}</td>
                        <td>Rp. {{ $barang->HargaBarang }}</td>
                        <td>{{ $barang->satuan_name }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('project.edit', ['project' => $barang->barang_id]) }}"
                                    class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form
                                        action="{{ route('project.destroy', ['project' => $barang->barang_id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
@vite('resources/js/app.js')
</html>

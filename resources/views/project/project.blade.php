@extends('layouts.app')
@section('content')
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
                        <td>{{ $barang->satuan->name }}</td>
                        <td>@include('project.actions')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

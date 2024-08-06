@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Table Produk</h6>
                    <a href="{{ route('dashboard_produk.create') }}" class="btn btn-success m-1">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $produk)
                                    <tr>
                                        <th scope="row">{{ $produk['id'] }}</th>
                                        <td>{{ $produk['nama_produk'] }}</td>
                                        <td>{{ $produk['harga'] }}</td>
                                        <td>{{ $produk['stok'] }}</td>
                                        <td>
                                            <a href="{{ route('dashboard_produk.show', $produk->id) }}" class="btn btn-primary m-1">Detail</a>
                                            <a href="{{ route('dashboard_produk.edit', $produk->id) }}" class="btn btn-warning m-1">Edit</a>
                                            <form action="{{ route('dashboard_produk.destroy', $produk->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
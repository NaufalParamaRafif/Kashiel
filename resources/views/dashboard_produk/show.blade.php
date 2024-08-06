@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4">Detail Barang</h4>
                    <form>
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk['nama_produk'] ?? 'Tidak Diketahui' }}" readonly @readonly(true)>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk['harga'] ?? 'Tidak Diketahui' }}" readonly @readonly(true)>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" value="{{ $produk['stok'] ?? 'Tidak Diketahui' }}" readonly @readonly(true)>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category ID</label>
                            <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $produk['category_id'] ?? 'Tidak Diketahui' }}" readonly @readonly(true)>
                        </div>
                        <a href="{{ route('dashboard_produk.edit', $produk->id) }}" class="btn btn-warning m-1">Edit</a>
                        <a href="{{ route('dashboard_produk.index') }}" class="btn btn-danger m-1">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
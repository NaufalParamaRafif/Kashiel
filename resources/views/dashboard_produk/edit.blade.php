@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4">Detail Penjualan Barang</h4>
                    <form method="POST" action="{{ route('dashboard_produk.update', $produk->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') ?? $produk['nama_produk'] }}" required @required(true)>
                        </div>
                        @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') ?? $produk['harga'] }}" required @required(true)>
                        </div>
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') ?? $produk['stok'] }}" required @required(true)>
                        </div>
                        @error('stok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category ID</label>
                            <input type="number" class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" value="{{ old('category_id') ?? $produk['category_id'] }}" required @required(true)>
                        </div>
                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-success m-1">Edit</button>
                        <a href="{{ route('dashboard_produk.index') }}" class="btn btn-danger m-1">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
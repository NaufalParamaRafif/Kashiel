@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4">Masukkan Data Penjualan Barang</h4>
                    <form method="POST" action="{{ route('dashboard_penjualan.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="produk_id" class="form-label">Produk ID</label>
                            <input type="number" class="form-control @error('produk_id') is-invalid @enderror" id="produk_id" name="produk_id" value="{{ old('produk_id') }}" required @required(true)>
                        </div>
                        @error('produk_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="pelanggan_id" class="form-label">Pelanggan ID</label>
                            <input type="number" class="form-control @error('pelanggan_id') is-invalid @enderror" id="pelanggan_id" name="pelanggan_id" value="{{ old('pelanggan_id') }}" required @required(true)>
                        </div>
                        @error('pelanggan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="kasir_id" class="form-label">Kasir ID</label>
                            <input type="number" class="form-control @error('kasir_id') is-invalid @enderror" id="kasir_id" name="kasir_id" value="{{ old('kasir_id') }}" required @required(true)>
                        </div>
                        @error('kasir_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                            <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" id="jumlah_produk" name="jumlah_produk" value="{{ old('jumlah_produk') }}" required @required(true)>
                        </div>
                        @error('jumlah_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="total_harga" class="form-label">Total Harga</label>
                            <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" id="total_harga" name="total_harga" value="{{ old('total_harga') }}" required @required(true)>
                        </div>
                        @error('total_harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="inputSubtotal" class="form-label">Subtotal</label>
                            <input type="number" class="form-control @error('subtotal') is-invalid @enderror" id="inputSubtotal" name="subtotal" value="{{ old('subtotal') }}" required @required(true)>
                        </div>
                        @error('subtotal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                            <input type="date" class="form-control @error('tanggal_penjualan') is-invalid @enderror" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ old('tanggal_penjualan') }}" required @required(true)>
                        </div>
                        @error('tanggal_penjualan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-success m-1">Create</button>
                        <button type="reset" class="btn btn-warning m-1">Reset</button>
                        <a href="{{ route('dashboard_penjualan.index') }}" class="btn btn-danger m-1">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
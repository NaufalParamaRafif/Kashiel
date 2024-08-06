@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4">Detail Penjualan Barang</h4>
                    <form>
                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama_pelanggan" readonly value="{{ $pelanggan['nama_pelanggan'] ?? 'Tidak diketahui'}}" @readonly(true)>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" readonly value="{{ $pelanggan['alamat'] ?? 'Tidak diketahui'}}" @readonly(true)>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_tlp" class="form-label">Nomor Telephone</label>
                            <input type="number" class="form-control" id="nomor_tlp" readonly value="{{ $pelanggan['nomor_tlp'] ?? 'Tidak diketahui'}}" @readonly(true)>
                        </div>
                        <a href="{{ route('dashboard_pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning m-1">Edit</a>
                        <a href="{{ route('dashboard_pelanggan.index') }}" class="btn btn-danger m-1">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
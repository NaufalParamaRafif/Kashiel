@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4">Masukkan Data Pelanggan</h4>
                    <form method="POST" action="{{ route('dashboard_penjualan.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="number" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="nama_pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" required @required(true)>
                        </div>
                        @error('nama_pelanggan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="number" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required @required(true)>
                        </div>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="nomor_tlp" class="form-label">Nomor Telephone</label>
                            <input type="number" class="form-control @error('nomor_tlp') is-invalid @enderror" id="nomor_tlp" name="nomor_tlp" value="{{ old('nomor_tlp') }}" required @required(true)>
                        </div>
                        @error('nomor_tlp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-success m-1">Create</button>
                        <button type="reset" class="btn btn-warning m-1">Reset</button>
                        <a href="{{ route('dashboard_pelanggan.index') }}" class="btn btn-danger m-1">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
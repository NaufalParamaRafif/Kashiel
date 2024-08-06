@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Table Pelanggan</h6>
                    <a href="{{ route('dashboard_pelanggan.create') }}" class="btn btn-success m-1">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggans as $pelanggan)
                                    <tr>
                                        <th scope="row">{{ $pelanggan['id'] }}</th>
                                        <td>{{ $pelanggan['nama_pelanggan'] }}</td>
                                        <td>{{ $pelanggan['alamat'] }}</td>
                                        <td>{{ $pelanggan['nomor_tlp'] }}</td>
                                        <td>
                                            <a href="{{ route('dashboard_pelanggan.show', $pelanggan->id) }}" class="btn btn-primary m-1">Detail</a>
                                            <a href="{{ route('dashboard_pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning m-1">Edit</a>
                                            <form action="{{ route('dashboard_pelanggan.destroy', $pelanggan->id) }}" method="post">
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
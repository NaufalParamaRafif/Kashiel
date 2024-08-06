@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Table Category</h6>
                    <a href="{{ route('dashboard_category.create') }}" class="btn btn-success m-1">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Category</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category['id'] }}</th>
                                        <td>{{ $category['name'] }}</td>
                                        <td>{{ $category['slug'] }}</td>
                                        <td>
                                            <a href="{{ route('dashboard_category.show', $category->id) }}" class="btn btn-primary m-1">Detail</a>
                                            <a href="{{ route('dashboard_category.edit', $category->id) }}" class="btn btn-warning m-1">Edit</a>
                                            <form action="{{ route('dashboard_category.destroy', $category->id) }}" method="post">
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
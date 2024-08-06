@extends('template_dashboard.template')
@section('main_body')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4">Detail Category</h4>
                    <form method="POST" action="{{ route('dashboard_category.update', $category->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Category</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $category['name'] }}" required @required(true)>
                        </div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="slug" class="form-label">slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') ?? $category['slug'] }}" required @required(true)>
                        </div>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button type="submit" class="btn btn-success m-1">Edit</button>
                        <a href="{{ route('dashboard_category.index') }}" class="btn btn-danger m-1">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
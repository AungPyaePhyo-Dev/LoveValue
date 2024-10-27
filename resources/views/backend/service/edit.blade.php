@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Service Edit</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                <form action="{{ route('admin.service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 px-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
                    </div>
                    <div class="mb-3 px-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <input type="text" class="form-control" name="short_description" required value="{{ $service->short_description }}">
                    </div>
                    <div class="mb-3 px-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea name="long_description" class="form-control" rows="5" required>{{ $service->long_description }}</textarea>
                    </div>
                    <div class="mb-3 px-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="file" class="form-control" name="thumb" required value="{{ $service->thumb }}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 px-3">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
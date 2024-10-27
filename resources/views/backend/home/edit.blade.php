@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Home Page Configurations Edit</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                <form action="{{ route('admin.home.update', $homeConfig->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 px-3">
                        <label for="about_title" class="form-label">About Title</label>
                        <input type="text" name="about_title" class="form-control" value="{{ $homeConfig->about_title }}" require>
                    </div>
                    <div class="mb-3 px-3">
                        <label for="about_description" class="form-label">About Description</label>
                        <textarea name="about_description" class="form-control" rows="10" require>{{ $homeConfig->about_description }}</textarea>
                    </div>
                    <div class="mb-3 px-3">
                        <label for="about_image" class="form-label">About Image</label>
                        <input type="file" class="form-control" name="about_image" require value="{{ $homeConfig->about_image }}">
                    </div>
                    <div class="mb-3 px-3">
                        <label for="bg_image" class="form-label">Background Image</label>
                        <input type="file" class="form-control" name="bg_image" require value="{{ $homeConfig->bg_image }}">
                    </div>
                    <div class="mb-3 px-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" require value="{{ $homeConfig->location }}">
                    </div>
                    <div class="mb-3 px-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" required value="{{ $homeConfig->phone }}">
                    </div>
                    <div class="mb-3 px-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required value="{{ $homeConfig->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 px-3">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
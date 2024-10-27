@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Video Service Create</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                <form action="{{ route('admin.video-service.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 px-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3 px-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" required >
                    </div>
                    <div class="mb-3 px-3">
                        <label for="url" class="form-label">Youtube URL</label>
                        <input type="text" class="form-control" name="url" required>
                    </div>
                    <div class="mb-3 px-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
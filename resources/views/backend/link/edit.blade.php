@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Link Update</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                <form action="{{ route('admin.link.update', $link->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 px-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $link->name }}" required>
                    </div>
                    <div class="mb-3 px-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="text" class="form-control" name="url" value="{{ $link->url }}">
                    </div>
                    <div class="mb-3 px-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
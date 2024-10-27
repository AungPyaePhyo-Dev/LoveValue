@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Photo Services</span>
                    </h3>
                    <div>
                        <a href="{{ route('admin.photo-service.create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($photoServices as $photoService)
                                    <tr>
                                        <td class="text-center">{{ $loop->index + 1}}</td>
                                        <td class="text-center"> {{ $photoService->url }} </td>
                                        <td>
                                           <div class="d-flex justify-content-center">
                                                <a href="{{ route('admin.photo-service.edit', $photoService->id) }}" class="btn btn-info mx-3">Edit</a>
                                                <form action="{{ route('admin.photo-service.destroy', $photoService->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                           </div>
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
@endsection
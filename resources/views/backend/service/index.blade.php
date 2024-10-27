@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Services</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Short Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                           <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td class="text-center">{{ $service->title }}</td>
                                        <td class="text-center">{{ $service->short_description }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-primary">Edit</a>
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
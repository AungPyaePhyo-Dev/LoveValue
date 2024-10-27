@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Customer Contacts</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td class="text-center">{{ $loop->index + 1 }}</td>
                                        <td class="text-center">{{ $contact->name }}</td>
                                        <td class="text-center">{{ $contact->phone }}</td>
                                        <td class="text-center">{{ $contact->email }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="post">
                                                @csrf 
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {!! $contacts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
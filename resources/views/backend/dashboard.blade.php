@extends('backend.layouts.index')
@section('content')
    <div class="row g-5 g-lg-10">
        <div class="col-xl-12 mb-5 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Report</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Series</th>
                                    <th class="text-center">Percent</th>
                                    <th class="text-center">Total Count</th>
                                    <th class="text-center">Total Amount</th>
                                    <th class="text-center">Net Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hello</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
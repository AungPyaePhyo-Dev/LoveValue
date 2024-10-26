@extends('frontend.layouts.index')
       
@section('content')

    <div class="container" style="margin-top : 150px; margin-bottom: 150px;">
        <div class="row">
            <div>
                <h2>Live Service</h2>
                <p>
                    With our Live Service, experience real-time streaming of your events, making it easy for loved ones near and far to join in your celebrations. We handle every technical aspect, providing seamless, high-definition streaming that captures every word, smile, and laugh. Whether it’s a corporate event or a personal celebration, we bring your event to life for everyone to enjoy.
                </p>
            </div>
            <div class="col-md-3 mb-5">
                <h4 class="mt-5"><i class="fab fa-facebook me-3 fa-2xl text-primary"></i>  Facebook</h4>
                <h4 class="mt-5"> <i class="fa-brands fa-youtube me-3 fa-2xl text-danger"></i> Youtube</h4>
                <h4 class="mt-5"><i class="fa-solid fa-video  me-3  fa-2xl text-primary"></i> Zoom</h4>
                <h4 class="mt-5"><i class="fa-solid fa-video   me-3 fa-2xl text-success"></i> Google Meet</h4>
                <h4 class="mt-5"><i class="fa-solid fa-users   me-3 fa-2xl text-indigo"></i> Microsoft Team</h4>

            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/live.jpeg') }}" class="text-center" >
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/live.jpeg') }}" >
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/live.jpeg') }}" >
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/live.jpeg') }}" >
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/live.jpeg') }}" >
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 d-flex justify-content-center">
                        <img src="{{ asset('assets/live.jpeg') }}" >
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

@endsection
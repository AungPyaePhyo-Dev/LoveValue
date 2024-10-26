@extends('frontend.layouts.index')
@section('content')

    <div class="container" style="margin-top : 100px; margin-bottom: 100px;">
        <h2 class="mb-3">Photo Service</h2>
        <p>Our Photo Service is designed to capture the essence of each moment. From portraits to events, we take pride in creating images that tell a story, preserving each expression, and capturing the unique beauty of your surroundings. With a keen eye for detail and a commitment to quality, our team ensures that every photograph reflects the authenticity of the moment.</p>
        <div class="row">
            <div class="col-md-4 mb-5 text-center">
                <img src="{{ asset('assets/live.jpeg') }}" >
            </div>
            <div class="col-md-4 mb-5 text-center">
                <img src="{{ asset('assets/live.jpeg') }}" >
            </div>
            <div class="col-md-4 mb-5 text-center">
                <img src="{{ asset('assets/live.jpeg') }}" >
            </div>
            <div class="col-md-4 mb-5 text-center">
                <img src="{{ asset('assets/live.jpeg') }}" >
            </div>
            <div class="col-md-4 mb-5 text-center">
                <img src="{{ asset('assets/live.jpeg') }}" >
            </div>
            <div class="col-md-4 mb-5 text-center">
                <img src="{{ asset('assets/live.jpeg') }}" >
            </div>
            
        </div>
    </div>

@endsection
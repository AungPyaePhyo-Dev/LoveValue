@extends('frontend.layouts.index')
@section('content')

<!-- home section start  -->

<div class="container-fluid d-flex align-items-center justify-content-center p-0" 
             id="home">
        <img src="{{ asset('assets/background.jpg') }}" class="w-100" alt="">
</div>

<!-- home section end  -->

<!-- about section start  -->

<div class="container-fluid" id="about">
    <div class="row">
        <div class="col-md-7 d-flex justify-content-center align-items-center my-5">
            <div class="about-left">
            <h2>About Love Value Studio</h2>
            <div>
                <p>
                Welcome to Love Value Studio, where we turn your moments <br> into timeless memories.
                We are passionate about capturing the beauty, <br> emotions, and stories behind every event.
                Whether it’s through the lens of a camera or <br> the flow of a live feed, our goal is to provide you <br>
                with high-quality visuals that showcase every detail of your special moments. <br>
                With a dedicated team of creative professionals and state-of-the-art equipment, <br>
                    we’re here to make sure that your memories are preserved in the most stunning way possible.
                </p>
            </div>

            </div>
        </div>
        <div class="col-md-5 p-0">
            <div class="" style="height:900px; overflow: hidden;">
                <img src="{{ asset('assets/about_img.jpg') }}" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>

<!-- about section end  -->
<hr id="service">
<!-- service section start  -->

<div class="container-fluid"  style="margin-top:100px; margin-bottom: 200px;">
    <h2 class="text-center my-5">Available Our Services</h2>
    <div class="row">
        <div class="col-md-4 text-center mt-lg-5 px-5">
            <a href="{{ route('live') }}" class="text-dark" style="text-decoration:none;">
                <div class="shake-on-hover">
                    <img src="{{ asset('assets/streaming.jpg') }}" class="rounded" style="width: 300px;">
                </div>
                <h5 class="mt-3 live">Live Service</h5>
                <p>With our Live Service, experience real-time streaming of your events, making it easy for loved ...</p>
            </a>
        </div>
        <div class="col-md-4 text-center mt-lg-5">
            <a href="{{ route('video') }}" class="text-dark" style="text-decoration:none;">
                <img src="{{ asset('assets/video.jpg') }}" class="rounded" style="width: 300px;">
                <h5 class="mt-3">Video Service</h5>
                <p>Our Video Service offers professionally crafted videos tailored to highlight each chapter...</p>
            </a>
        </div>
        <div class="col-md-4 text-center mt-lg-5">
            <a href="{{ route('photo') }}" class="text-dark" style="text-decoration:none;">
                <img src="{{ asset('assets/streaming1.jpg') }}" class="rounded" style="width: 300px;">
                <h5 class="mt-3">Photo Service</h5>
                <p>Our Photo Service is designed to capture the essence of each moment. From portraits to events, we take pride...</p>
            </a>
        </div>

    </div>
</div>
<!-- service section end  -->

<hr>

<div class="container mx-auto" style="margin-top:100px; margin-bottom: 200px;">
    <h1 class="text-center my-5">Working Partner</h1>
    <div class="owl-carousel owl-theme" id="owl-carousel">
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/ws_logo.jpg') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/atmdlogo.png') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/revlon.jpg') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/ws_logo.jpg') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/atmdlogo.png') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/revlon.jpg') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/ws_logo.jpg') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/atmdlogo.png') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
        <div class="item text-center mt-lg-5">
            <img src="{{ asset('assets/revlon.jpg') }}" style="width: 100px; height:100px; border-radius: 50%;">
        </div>
    </div>
</div>

@endsection
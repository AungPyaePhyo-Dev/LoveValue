@extends('frontend.layouts.index')
@section('content')
   
<div class="container" style="margin-top : 100px; margin-bottom: 150px;">
    <h2 class="my-5">Video Services</h2>
    <p>Our Video Service offers professionally crafted videos tailored to highlight each chapter of your event. We bring a cinematic approach to every project, blending creative storytelling with crisp visuals. From capturing the energy of the day to crafting a narrative that reflects the experience, our team is here to ensure your video is as vivid as your memories.</p>
    <div class="row">
        <div class="col-md-4 text-center mt-lg-5">
            <iframe width="315" height="315"
            src="https://www.youtube.com/embed/0OMpU4NfT9E">
            </iframe>
            <h5 class="mt-3">Commercial</h5>
            <p>Captivating videos that elevate your brand and engage your audience with style.</p>
        </div>
        <div class="col-md-4 text-center mt-lg-5">
            <iframe width="315" height="315" src="https://www.youtube.com/embed/ZoNFvwbbX1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h5 class="mt-3">Event</h5>
            <p>Highlight every moment with dynamic videos that bring your event’s energy to life.</p>
        </div>
        <div class="col-md-4 text-center mt-lg-5">
            <iframe width="315" height="315" src="https://www.youtube.com/embed/dF3xUyQmFJM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h5 class="mt-3">Wedding</h5>
            <p> Cherish every detail of your big day with timeless, cinematic wedding videos.</p>
        </div>

    </div>
</div>

@endsection
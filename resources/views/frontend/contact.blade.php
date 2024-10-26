@extends('frontend.layouts.index')
@section('content')
<div class="row w-100" >
    <div class="my-3">
        <h4 class="text-center fw-bold">Contact Form</h4>
    </div>
    <div class="col-md-6 mx-auto my-3">
        <form>
            <div class="mb-3 px-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3 px-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 px-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3 px-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" rows="7" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3 px-3">Send</button>
        </form>
    </div>
</div>
@endsection
@extends('layouts.frontend.app')

@section('css')
<style>
    .navbar {
        background: #294E5D;
    }
</style>
@endsection

@section('content')
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5 mt-5">
        <div class="row g-5">
            <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Let’s Connect</h4>
                    <h1 class="display-3 text-capitalize mb-3">Send Your Message</h1>
                </div>
                <form method="post" action="{{ route('frontend.contactPost') }}" enctype="multipart/form-data" onsubmit="document.getElementById('submit-btn').disabled = true; document.getElementById('submit-btn').innerHTML = 'Sending...';">
                    @csrf
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            @include('partials.messages')
                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" name="name" id="name" placeholder="Your Name *" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" name="email" id="email" placeholder="Your Email *" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control border-0" name="phone" id="phone" placeholder="Your Number *" required>
                                <label for="phone">Your Number</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" name="subject" id="subject" placeholder="Subject *" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0" placeholder="Leave a message here" name="message" id="message" style="height: 175px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" id="submit-btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-0">1234, Street Name, City Name, Country Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-0">Nexushireltd@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-0">+1 (123)-456-789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="h-100 overflow-hidden">
                            <iframe class="w-100 rounded" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.6060843360115!2d-114.05803312367314!3d51.041895771711175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5371700116880599%3A0xa8729c07b8fca9f1!2s1122%203%20St%20SE%20Unit%201906%2C%20Calgary%2C%20AB%20T2G%200E7%2C%20Canada!5e0!3m2!1sen!2sin!4v1729172689683!5m2!1sen!2sin"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
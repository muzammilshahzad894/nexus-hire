@extends('layouts.frontend.app')

@section('content')
<div class="container-fluid bg-breadcrumb-service">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
        </ol>
    </div>
</div>
<!-- About Start -->
<div class="container-fluid about overflow-hidden my-5 py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="{{ asset('frontend-assets/uploads/about/1728446020.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="NexusHire Team">
                    <div class="about-exp"><span>16+ Years of Excellence</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <!-- <h4 class="text-primary text-uppercase">About Us</h4> -->
                    <h1 class="display-5 mb-3">Simplifying Workforce Management</h1>
                    <p class="mb-2 justify-text">
                    <p>NexusHire Workforce Solutions Inc. is a Canada-based staffing company located in Alberta specializing in solutions for the administrative, call centre, manufacturing, warehouse, and logistics fields.<br>With AI technology, we can more quickly attract, capture, screen, and match the best candidates for your company’s available positions. The faster we are able to engage active people, instead of spending critical time on chasing down passive candidates, the faster we can match the most motivated and qualified candidate to your available position! Once a candidate accepts a position at one of our customers, we’re able to keep them warm and engaged while they are waiting for the start date to arrive, and to be more responsive to their progress while they are out on.</p>
                    </p>
                    <!-- <p class="mb-2">
                        With AI technology, we can more quickly attract, capture, screen, and match the best candidates for your company’s available positions. The faster we are able to engage active people, instead of spending critical time on chasing down passive candidates, the faster we can match the most motivated and qualified candidate to your available position! Once a candidate accepts a position at one of our customers, we’re able to keep them warm and engaged while they are waiting for the start date to arrive, and to be more responsive to their progress while they are out on
                        </p> -->
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                            <i class="fas fa-robot text-white fa-2x"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="h4 d-inline-block mb-3">AI-Driven Recruitment Success</a>
                                        <p class="mb-0">
                                            NexusHire has made a significant investment in Artificial Intelligence (AI) recruiting technology helping increase our engagement with our candidates and out-to-work assignment employees.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- additional Start -->

<div class="container-fluid bestmatch overflow-hidden py-2">
    <div class="container py-2">
        <div class="row g-5">

            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <!-- <h4 class="text-primary text-uppercase">About Us</h4> -->
                    <h1 class="display-5 mb-3">Making the Industry’s Best Matches</h1>
                    <p class="mb-4">
                        NexusHire is widely recognized as one of the industry’s fastest growing staffing agencies. Thanks to our longstanding experience in various industries, we have the capacity to build meaningful, long-lasting relationships with all our clients. Our success is a result of our commitment to the best people, the best solutions and the best results. We have dedicated our focus and passion to finding highly skilled and motivated talents for a variety of hiring companies. Our goal is to know your hiring needs as well as you do.
                    </p>

                    <!-- <div class="bg-light rounded p-4 mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="pe-4">
                                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                    <i class="fas fa-thumbs-up text-white fa-2x"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="h4 d-inline-block mb-3">Satisfied Clients</a>
                                                <p class="mb-0">We pride ourselves on delivering solutions that meet client needs, earning their trust and loyalty.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                            <!-- <i class="fas fa-check-circle text-white fa-2x"></i> -->
                                            <i class="fas fa-phone-alt text-white fa-2x"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="h4 d-inline-block mb-2">Get in touch</a>
                                        <p class="mb-0">
                                            We invite you to contact one of our team members. They are committed to providing you, our clients, with an experience focused on what you value most. Get in touch with us today and move one step closer to achieving your employment goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('frontend.contact') }}" class="btn btn-secondary rounded-pill py-3 px-5">Contact us</a>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bestmatch-img rounded h-100">
                    <img src="{{ asset('frontend-assets/uploads/about/1727942062.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="NexusHire Team">
                    <div class="bestmatch-exp"><span>Building Strong Partnerships</span></div>
                </div>
            </div>
        </div>
        <!-- <div class="mt-5">
                    <h2 class="text-primary">Get in Touch</h2>
                    <p>We invite you to contact one of our team members. They are committed to providing you, our clients, with an experience focused on what you value most. Get in touch with us today and move one step closer to achieving your employment goals.</p>
                </div> -->
    </div>
</div>
<!-- additional End -->

<!-- Fact Counter -->
<div class="container-fluid counter py-5 bg-dark">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-briefcase fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Positions Filled</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">800</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-building fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Companies Served</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">70</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-user-tie fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Candidates Placed</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">3200</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-calendar-check fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Years of Experience</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">16</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fact Counter End -->
@endsection
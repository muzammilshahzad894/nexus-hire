@extends('layouts.frontend.app')

@section('css')
<style>
    .about-img {
        height: 400px;
        padding: 5px;
        border: 5px solid green;
    }

    .about-img img {
        height: 100%;
    }
</style>
@endsection

@section('content')
<!-- Page Title Start -->
<section class="page-title title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>About Us</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- Page Title End -->

<!-- About Section Start -->
<section class="about-section ptb-100">
    <div class="container">
        <div class="row align-items-center justify-content-center pb-70">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('frontend-assets/img/work-force.jpg') }}" alt="about image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <h2>Simplifying Workforce Management</h2>
                    </div>

                    <p>NexusHire Workforce Solutions Inc. is a Canada-based staffing company in Alberta, specializing in administrative, call center, manufacturing, warehouse, and logistics staffing. Leveraging AI technology, we quickly attract, screen, and match top candidates to your openings. By focusing on active job seekers, we deliver faster placements with motivated and qualified talent. Once hired, we keep candidates engaged before their start date and ensure ongoing support for a smooth transition and continued success.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <h2>Making the Industry’s Best Matches</h2>
                    </div>

                    <p>NexusHire is widely recognized as one of the industry’s fastest growing staffing agencies. Thanks to our longstanding experience in various industries, we have the capacity to build meaningful, long-lasting relationships with all our clients. Our success is a result of our commitment to the best people, the best solutions and the best results. We have dedicated our focus and passion to finding highly skilled and motivated talents for a variety of hiring companies. Our goal is to know your hiring needs as well as you do.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('frontend-assets/img/business-meeting.jpg') }}" alt="about image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Counter Section Start -->
<div class="counter-section pt-100 pb-70">
    <div class="container">
        <div class="row counter-area">
            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class="flaticon-resume"></i>
                    <h2><span>1225</span></h2>
                    <p>Job Posted</p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class="flaticon-recruitment"></i>
                    <h2><span>145</span></h2>
                    <p>Job Filed</p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class="flaticon-portfolio"></i>
                    <h2><span>170</span></h2>
                    <p>Company</p>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="counter-text">
                    <i class="flaticon-employee"></i>
                    <h2><span>125</span></h2>
                    <p>Members</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->

<!-- Why Choose Section Start -->
<section class="why-choose-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Why You Choose Us Among Other Job Site?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="choose-card">
                    <i class="flaticon-resume"></i>
                    <h3>Advertise Job</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="choose-card">
                    <i class="flaticon-recruitment"></i>
                    <h3>Recruiter Profiles</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6  ">
                <div class="choose-card">
                    <i class="flaticon-employee"></i>
                    <h3>Find Your Dream Job</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Section End -->
@endsection
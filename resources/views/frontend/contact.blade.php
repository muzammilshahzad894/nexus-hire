@extends('layouts.frontend.app')

@section('content')
<!-- Page Title Start -->
<section class="page-title title-bg23">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Contact Us</h2>
            <ul>
                <li>
                    <a href="{{ route('frontend.index') }}">Home</a>
                </li>
                <li>Contact Us</li>
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

<!-- Contact Section Start -->
<div class="contact-card-section ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card">
                            <i class='bx bx-phone-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:07497684874">
                                        07497684874
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card">
                            <i class='bx bx-mail-send'></i>
                            <ul>
                                <li>
                                    <a href="mailto:Nexushireltd@gmail.com">
                                        <span class="__cf_email__">Nexushireltd@gmail.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6  ">
                        <div class="contact-card">
                            <i class='bx bx-location-plus'></i>
                            <ul>
                                <li>
                                    123, Denver, USA
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->

<!-- Contact Form Start -->
<section class="contact-form-section pb-100">
    <div class="container">
        <div class="contact-area">
            <h3>Lets' Talk With Us</h3>
            <form method="post" action="{{ route('frontend.contactPost') }}" enctype="multipart/form-data" onsubmit="document.getElementById('submit-btn').disabled = true; document.getElementById('submit-btn').innerHTML = 'Sending...';">
                @csrf
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
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name *" required value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *" required value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Number *" required value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject *" value="{{ old('subject') }}">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control message-field" id="message" cols="30" rows="7" placeholder="Write Message *" required>{{ old('message') }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="default-btn contact-btn" id="submit-btn">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Contact Form End -->
@endsection
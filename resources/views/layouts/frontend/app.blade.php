<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<title>NexusHire</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&amp;family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/all.css') }}" />
	<link href="{{ asset('frontend-assets/css/bootstrap-icons.css') }}" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="{{ asset('frontend-assets/lib/animate/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

	<link rel="icon" href="{{ asset('frontend-assets/images/favicon.ico') }}" type="image/x-icon">
	<link rel="shortcut icon" href="{{ asset('frontend-assets/images/favicon.ico') }}" type="image/x-icon">
	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{ asset('frontend-assets/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="{{ asset('frontend-assets/css/style.css') }}" rel="stylesheet">

	<!-- Custom Stylesheet -->
	<link href="{{ asset('frontend-assets/css/custom.css') }}" rel="stylesheet">
</head>

<body>

	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Spinner End -->

	<!-- Navbar & Hero Start -->
	<div class="container-fluid position-relative p-0">
		<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 bg-light shadow-sm">
			<a href="{{ route('frontend.index') }}" class="navbar-brand p-0">
				<h1 class="text-primary d-flex align-items-center">
					Nexus
					<img src="{{ asset('frontend-assets/images/Logo.png') }}" class="logo-image px-1" alt="Logo" />
					ire
				</h1>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto py-0">
					<a href="{{ route('frontend.index') }}" class="nav-item nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}">Home</a>
					<a href="{{ route('frontend.about') }}" class="nav-link nav-item {{ request()->routeIs('frontend.about') ? 'active' : '' }}">About</a>
					<a href="{{ route('frontend.jobboard') }}" class="nav-link nav-item {{ request()->routeIs('frontend.jobboard') ? 'active' : '' }}">Job Board</a>
					<a href="{{ route('frontend.contact') }}" class="nav-item nav-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}">Contact</a>
				</div>
			</div>
		</nav>
		<!-- Carousel Start -->
        @if(request()->routeIs('frontend.index'))
		<div class="carousel-header">
			<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselId" data-bs-slide-to="0" class="active"></li>
					<li data-target="#carouselId" data-bs-slide-to="1" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img src="{{ asset('frontend-assets/uploads/banners/1727250519.png') }}" class="img-fluid w-100" alt="NexusHire">
						<div class="carousel-caption-2">
							<div class="carousel-caption-2-content" style="max-width: 900px;">
								<h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s; letter-spacing: 3px;">NexusHire</h4>
								<h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Connecting Talent with Opportunity</h1>
								<p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
									We specialize in recruiting top talent for both permanent and contract positions. At NexusHire, we prioritize understanding your unique skills, experience, and career goals
								</p>
								<div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
									<a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Join Us</a>
									<a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item ">
						<img src="{{ asset('frontend-assets/uploads/banners/1727250534.png') }}" class="img-fluid w-100" alt="NexusHire">
						<div class="carousel-caption-2">
							<div class="carousel-caption-2-content" style="max-width: 900px;">
								<h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s; letter-spacing: 3px;">NexusHire</h4>
								<h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Connecting Talent with Opportunity</h1>
								<p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
									We specialize in recruiting top talent for both permanent and contract positions. At NexusHire, we prioritize understanding your unique skills, experience, and career goals.
								</p>
								<div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
									<a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Join Us</a>
									<a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="carousel-item"></div>
                <img src="./images/banner1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption-2">
                    <div class="carousel-caption-2-content" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s; letter-spacing: 3px;">NexusHire</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Connecting Talent with Opportunity</h1>
                        <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
                            We specialize in recruiting top talent for both permanent and contract positions. At NexusHire, we prioritize understanding your unique skills, experience, and career goals.
                        </p>
                        <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                            <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Join Us</a>
                            <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div> -->
					<!-- <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption-2">
                    <div class="carousel-caption-2-content" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Importance life</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Always Want Safe Water For Healthy Life</h1>
                        <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                            <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order Now</a>
                            <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">Free Estimate</a>
                        </div>
                    </div>
                </div>
            </div> -->
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
					<span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
					<span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
        @endif
		<!-- Carousel End -->
	</div>
	<!-- Navbar & Hero End -->
     
    @yield('content')

	<!-- Footer Start -->
	<div class="container-fluid footer  wow fadeIn" data-wow-delay="0.2s">
		<div class="container py-5">
			<div class="row g-5 mb-5 align-items-center">
				<div class="col-lg-7">
					<div class="position-relative mx-auto">
						<input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Email address to Subscribe">
						<button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="d-flex align-items-center justify-content-center justify-content-lg-end">
						<a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
						<a class="btn btn-secondary btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
			<div class="row g-5">
				<div class="col-md-7 col-lg-7 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<div class="footer-item">
							<div class="d-flex justify-content-between align-items-start">
								<div class="d-flex p-2" style="flex: 1;">
									<img src="{{ asset('frontend-assets/images/Logo.png') }}" class="img-fluid footer-img" alt="">
								</div>
								<div style="flex: 2;">
									<h4 class="h4 text-white mb-4">NEXUSHIRE WORKFORCE SOLUTIONS INC.</h4>
								</div>
							</div>
							<p class="mb-3">
								NexusHire Workforce Solutions Inc. is a Canada-based staffing company that specializes in staffing solutions for the administrative, call centre, manufacturing, warehouse and logistics fields. We have multiple branches across Canada, located in Alberta and Ontario.
							</p>
						</div>
						<div class="position-relative">
							<input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
							<button type="button" class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-lg-5 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">About Us</h4>
						<a href="about.html"><i class="fas fa-angle-right me-2"></i> Why Choose Us</a>
						<a href="jobseeker/work-with-us.html"><i class="fas fa-angle-right me-2"></i> For Jobseekers</a>
						<a href="employer/expertise.html"><i class="fas fa-angle-right me-2"></i> For Employers</a>
						<a href="employer/service.html"><i class="fas fa-angle-right me-2"></i> Services</a>
						<a href="contact.html"><i class="fas fa-angle-right me-2"></i> Contact us</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">Business Hours</h4>
						<div class="mb-3">
							<h6 class="text-muted mb-0">Mon - Friday:</h6>
							<p class="text-white mb-0">
								08:00 AM
								to
								05:00 PM
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">Contact Info</h4>

						<a href="https://maps.app.goo.gl/gAhw9R2UGHbXwDWF9"><i class="fa fa-map-marker-alt me-2"></i> 1122 3 St SE Ste 1906 Calgary, AB T2G 0E7</a>
						<a href="mailto:info@nexushire.ca"><i class="fas fa-envelope me-2"></i> info@nexushire.ca</a>
						<a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +1 (587)-200-2325</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6 text-center text-md-start mb-md-0">
					<span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>NexusHire

						</a>, All right reserved.</span>
				</div>
				<div class="col-md-6 text-center text-md-end text-body">

				</div>
			</div>
		</div>
	</div>
	<!-- Copyright End --> <!-- Footer End -->

	<!-- Back to Top -->
	<a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

	<!-- JavaScript Libraries -->
	<script src="{{ asset('frontend-assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend-assets//js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/lib/wow/wow.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/lib/easing/easing.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/lib/waypoints/waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/lib/counterup/counterup.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

	<script src="{{ asset('frontend-assets/js/main.js') }}"></script>
    
    @yield('javascript')
</body>

</html>
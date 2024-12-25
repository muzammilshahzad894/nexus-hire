<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/bootstrap.min.css') }}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.carousel.min.css') }}">
	<!-- Owl Carousel Theme Default CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.theme.default.min.css') }}">
	<!-- Box Icon CSS-->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/boxicons.min.css') }}">
	<!-- Flaticon CSS-->
	<link rel="stylesheet" href="{{ asset('frontend-assets/fonts/flaticon/flaticon.css') }}">
	<!-- Meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/meanmenu.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/style.css') }}">
	<!-- Dark CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/dark.css') }}">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/css/responsive.css') }}">
	<!-- Title CSS -->
	<title>Nexus Hire</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('nexus-logo-favicon.png') }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	
	@yield('css')
</head>

<body>

	<!-- Pre-loader Start -->
	<div class="loader-content">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="sk-circle">
					<div class="sk-circle1 sk-child"></div>
					<div class="sk-circle2 sk-child"></div>
					<div class="sk-circle3 sk-child"></div>
					<div class="sk-circle4 sk-child"></div>
					<div class="sk-circle5 sk-child"></div>
					<div class="sk-circle6 sk-child"></div>
					<div class="sk-circle7 sk-child"></div>
					<div class="sk-circle8 sk-child"></div>
					<div class="sk-circle9 sk-child"></div>
					<div class="sk-circle10 sk-child"></div>
					<div class="sk-circle11 sk-child"></div>
					<div class="sk-circle12 sk-child"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader End -->

	<!-- Navbar Area Start -->
	<div class="navbar-area">
		<!-- Menu For Mobile Device -->
		<div class="mobile-nav">
			<a href="{{ route('frontend.index') }}" class="logo">
				<img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" height="45px" width="90px">
			</a>
		</div>

		<!-- Menu For Desktop Device -->
		<div class="main-nav">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="{{ route('frontend.index') }}">
						<img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" height="60px" width="120px">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{ route('frontend.index') }}" class="nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}">Home</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('frontend.about') }}" class="nav-link {{ request()->routeIs('frontend.about') ? 'active' : '' }}">About</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('frontend.jobboard') }}" class="nav-link {{ request()->routeIs('frontend.jobboard') ? 'active' : '' }}">Job Board</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('frontend.contact') }}" class="nav-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- Navbar Area End -->

	@yield('content')

	<!-- Footer Section Start -->
	<footer class="footer-area pt-100 pb-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="{{ route('frontend.index') }}">
								<img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" height="80px" width="150px">
							</a>
						</div>

						<p>Nexus Hire connects businesses with top talent through efficient, tailored recruitment solutions, making hiring quick and effective.</p>

						<div class="footer-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-60">
						<h3>About Us</h3>
						<ul>
							<li>
								<a href="{{ route('frontend.index') }}">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Home
								</a>
							</li>
							<li>
								<a href="{{ route('frontend.about') }}">
									<i class='bx bx-chevrons-right bx-tada'></i>
									About
								</a>
							</li>
							<li>
								<a href="{{ route('frontend.jobboard') }}">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Job Board
								</a>
							</li>
							<li>
								<a href="{{ route('frontend.contact') }}">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Contact
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-60">
						<h3>Business Hours</h3>
						<div class="mb-3">
							<h6 class="custom-text-muted mb-0">Mon - Friday:</h6>
							<p class="text-white mb-0">
								08:00 AM
								to
								05:00 PM
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget footer-info">
						<h3>Contact Info</h3>
						<ul>
							<li class="d-flex">
								<span>
									<i class='bx bxs-phone'></i>
								</span>
								<a href="tel:+4407497684874" class="px-1">
									07497684874
								</a>
							</li>

							<li class="d-flex">
								<span>
									<i class='bx bxs-envelope'></i>
								</span>
								<a href="mailto:Nexushireltd@gmail.com" class="px-1">
									<span class="__cf_email__">Nexushireltd@gmail.com</span>
								</a>
							</li>

							<li class="d-flex">
								<span>
									<i class='bx bx-location-plus'></i>
									123, Denver, USA
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Back To Top Start -->
	<div class="top-btn">
		<i class='bx bx-chevrons-up bx-fade-up'></i>
	</div>
	<!-- Back To Top End -->

	<!-- jQuery first, then Bootstrap JS -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{ asset('frontend-assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend-assets/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('frontend-assets/js/owl.carousel.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('frontend-assets/js/jquery.nice-select.min.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('frontend-assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Subscriber Form JS -->
	<script src="{{ asset('frontend-assets/js/jquery.ajaxchimp.min.js') }}"></script>
	<!-- Form Velidation JS -->
	<script src="{{ asset('frontend-assets/js/form-validator.min.js') }}"></script>
	<!-- Contact Form -->
	<script src="{{ asset('frontend-assets/js/contact-form-script.js') }}"></script>
	<!-- Meanmenu JS -->
	<script src="{{ asset('frontend-assets/js/meanmenu.js') }}"></script>
	<!-- Custom JS -->
	<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
	
	@yield('javascript')
</body>

</html>
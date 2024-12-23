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
	<title>Jovie - Job Board & Hiring Portal HTML Template</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('frontend-assets/img/favicon.png') }}">
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
			<a href="index.html" class="logo">
				<img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" height="45px" width="90px">
			</a>
		</div>

		<!-- Menu For Desktop Device -->
		<div class="main-nav">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="index.html">
						<img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" height="60px" width="120px">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle active">Home</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="index.html" class="nav-link active">Home One</a>
									</li>
									<li class="nav-item">
										<a href="index-two.html" class="nav-link">Home Two</a>
									</li>
									<li class="nav-item">
										<a href="index-three.html" class="nav-link">Home Three</a>
									</li>
									<li class="nav-item">
										<a href="index-four.html" class="nav-link">Home Four</a>
									</li>
									<li class="nav-item">
										<a href="index-five.html" class="nav-link">Home Five</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="about.html" class="nav-link">About</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">Jobs</a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="find-job.html" class="nav-link">Find A Job</a>
									</li>
									<li class="nav-item">
										<a href="post-job.html" class="nav-link">Post A Job</a>
									</li>
									<li class="nav-item">
										<a href="job-list.html" class="nav-link">Job List</a>
									</li>
									<li class="nav-item">
										<a href="job-grid.html" class="nav-link">Job Grid</a>
									</li>
									<li class="nav-item">
										<a href="job-details.html" class="nav-link">Job Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">Candidates</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="candidate.html" class="nav-link">Candidates</a>
									</li>
									<li class="nav-item">
										<a href="candidate-details.html" class="nav-link">Candidates Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="company.html" class="nav-link">Company</a>
									</li>
									<li class="nav-item">
										<a href="pricing.html" class="nav-link">Pricing</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Profile</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="account.html" class="nav-link">Account</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link dropdown-toggle">Member</a>

												<ul class="dropdown-menu">
													<li class="nav-item">
														<a href="sign-in.html" class="nav-link">Sign In</a>
													</li>
													<li class="nav-item">
														<a href="sign-up.html" class="nav-link">Sign Up</a>
													</li>
													<li class="nav-item">
														<a href="reset-password.html" class="nav-link">Reset Password</a>
													</li>
												</ul>
											<li>
											<li class="nav-item">
												<a href="resume.html" class="nav-link">Resume</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="404.html" class="nav-link">404 Page</a>
									</li>
									<li class="nav-item">
										<a href="testimonial.html" class="nav-link">Testimonials</a>
									</li>
									<li class="nav-item">
										<a href="faq.html" class="nav-link">FAQ</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">Catagories</a>
									</li>
									<li class="nav-item">
										<a href="privacy-policy.html" class="nav-link">Privacy & Policy</a>
									</li>
									<li class="nav-item">
										<a href="terms-condition.html" class="nav-link">Terms & Conditions</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="blog.html" class="nav-link">Blog</a>
									</li>
									<li class="nav-item">
										<a href="blog-two.html" class="nav-link">Blog Two</a>
									</li>
									<li class="nav-item">
										<a href="blog-details.html" class="nav-link">Blog Details</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="contact.html" class="nav-link">Contact Us</a>
							</li>
						</ul>

						<div class="other-option">
							<a href="sign-up.html" class="signup-btn">Sign Up</a>
							<a href="sign-in.html" class="signin-btn">Sign In</a>
						</div>
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
							<a href="index.html">
								<img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo" height="80px" width="150px">
							</a>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna. Sed eiusmod tempor incididunt ut.</p>

						<div class="footer-social">
							<a href="https://www.facebook.com/login/" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="https://www.pinterest.com/" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
							<a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-60">
						<h3>For Candidate</h3>
						<ul>
							<li>
								<a href="job-grid.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Browse Jobs
								</a>
							</li>
							<li>
								<a href="account.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Account
								</a>
							</li>
							<li>
								<a href="catagories.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Browse Categories
								</a>
							</li>
							<li>
								<a href="resume.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Resume
								</a>
							</li>
							<li>
								<a href="job-list.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Job List
								</a>
							</li>
							<li>
								<a href="sign-up.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Sign Up
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-60">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="index.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Home
								</a>
							</li>
							<li>
								<a href="about.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									About
								</a>
							</li>
							<li>
								<a href="faq.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									FAQ
								</a>
							</li>
							<li>
								<a href="pricing.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Pricing
								</a>
							</li>
							<li>
								<a href="privacy.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Privacy
								</a>
							</li>
							<li>
								<a href="contact.html">
									<i class='bx bx-chevrons-right bx-tada'></i>
									Contact
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget footer-info">
						<h3>Information</h3>
						<ul>
							<li>
								<span>
									<i class='bx bxs-phone'></i>
									Phone:
								</span>
								<a href="tel:882569756">
									+101 984 754
								</a>
							</li>

							<li>
								<span>
									<i class='bx bxs-envelope'></i>
									Email:
								</span>
								<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9ef7f0f8f1def4f1e8f7fbb0fdf1f3">
									<span class="__cf_email__" data-cfemail="1a73747c755a70756c737f34797577">[email&#160;protected]</span>
								</a>
							</li>

							<li>
								<span>
									<i class='bx bx-location-plus'></i>
									Address:
								</span>
								123, Denver, USA
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
</body>

</html>
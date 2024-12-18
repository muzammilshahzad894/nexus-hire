@extends('layouts.frontend.app')

@section('content')
<!-- About Start -->
<div class="container-fluid about overflow-hidden mb-5 py-5">
	<div class="container py-5">
		<div class="row g-5">
			<div class="col-xl-6 wow" data-wow-delay="0.2s">
				<div class="about-img rounded h-100">
					<img src="{{ asset('frontend-assets/uploads/about/work-force.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="NexusHire Team">
					<div class="about-exp"><span>16+ Years of Excellence</span></div>
				</div>
			</div>
			<div class="col-xl-6 wow" data-wow-delay="0.2s">
				<div class="about-item">
					<h4 class="text-primary text-uppercase">About Us</h4>
					<h1 class="display-5 mb-3">Simplifying Workforce Management</h1>
					<p class="mb-4 text-truncate-ellipsis">
						NexusHire Workforce Solutions Inc. is a Canada-based staffing company located in Alberta specializing in solutions for the administrative, call centre, manufacturing, warehouse, and logistics fields.With AI technology, we can more quickly attract, capture, screen, and match the best candidates for your company’s available positions. The faster we are able to engage active people, instead of spending critical time on chasing down passive candidates, the faster we can match the most motivated and qualified candidate to your available position! Once a candidate accepts a position at one of our customers, we’re able to keep them warm and engaged while they are waiting for the start date to arrive, and to be more responsive to their progress while they are out on.
					</p>


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
					<a href="about.html" class="btn btn-secondary rounded-pill py-3 px-5">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->


<!-- Best Match Start -->
<div class="container-fluid bestmatch overflow-hidden mt-5 py-5">
	<div class="container py-5">
		<div class="row g-5">

			<div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="about-item">
					<!-- <h4 class="text-primary text-uppercase">About Us</h4> -->
					<h1 class="display-5 mb-3">Making the Industry’s Best Matches</h1>
					<p class="mb-4">
						NexusHire is widely recognized as one of the industry’s fastest growing staffing agencies. Thanks to our longstanding experience in various industries, we have the capacity to build meaningful, long-lasting relationships with all our clients. Our success is a result of our commitment to the best people, the best solutions and the best results. We have dedicated our focus and passion to finding highly skilled and motivated talents for a variety of hiring companies. Our goal is to know your hiring needs as well as you do.
					</p>

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
					<img src="{{ asset('frontend-assets/uploads/about/business-meeting.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="NexusHire Team">
					<div class="bestmatch-exp"><span>Building Strong Partnerships</span></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Best Match End -->

<!-- Service Start -->
<div class="container-fluid service bg-light overflow-hidden py-5">
	<div class="container py-5">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
			<h4 class="text-uppercase text-primary">Our Services</h4>
		</div>
		<div class="row gx-0 gy-4 align-items-center">
			<div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="text-end mb-3">
					<h3>JobSeekers</h3>
				</div>

				<!-- Job Seekers Cards -->
				<div class="service-item rounded p-4 mb-3 d-flex flex-column h-100">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="service-content text-end">
									<a href="jobseeker/work-with-us.html" class="h4 d-inline-block mb-2">The Right Opportunity</a>
									<p class="mb-0 service-text-truncate-ellipsis">
										Finding the right job is more than simply looking for a position that reflects your skillset. How the company works and thinks, the people you work with, the opportunities available for your career in the future, all these things matter. That is why here at NexusHire we take the time to understand what you are looking for.
										That means the way you like to work, the kind of environment that you feel comfortable in, what your future goals are. We get to know you so that you can have the job that really fits your needs, not just today, but into the future. Our focus is always on helping you build the career you want and deserve. Helping you create a path to your goals and giving you the tools to succeed.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-3 d-flex flex-column h-100">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="service-content text-end">
									<a href="jobseeker/work-with-us.html" class="h4 d-inline-block mb-2">Hiring Process</a>
									<p class="mb-0 service-text-truncate-ellipsis">
										Finding a new job, or even your first, can be a stressful experience, which is why we aim to make everything as easy as possible for you. Our hiring process gets you into that dream job as quickly as possible, and that begins with our job board.
										Take a look at our current job vacancies to see if there is anything to suit. You can filter by job type, so it’s fast and easy to find the kind of jobs that you are looking for. If you do find one, you can apply directly through the system. Don’t forget, as a major recruitment specialist, our job board is constantly updated, so sign up for alerts to get first notice of new jobs that fit your needs.
										In addition, you can apply to us directly, just send your resume, and we will look out for suitable positions for you, get in touch and schedule a phone or in-person interview as required.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-3 d-flex flex-column h-100">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="service-content text-end">
									<a href="jobseeker/work-with-us.html" class="h4 d-inline-block mb-2">Job Support</a>
									<p class="mb-0 service-text-truncate-ellipsis">
										From CV optimization to interview techniques, our expert team are here to help you every step of the way. Whether you are looking for your first job or securing that last move on your career ladder, we are here to help. Our highly- experienced recruitment specialists will ensure that you don’t have to face the job market alone. Check out our Candidate Resource Centre or get in touch today and see how we can help you find that dream job.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Center Image -->
			<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
				<div class="bg-transparent text-center">
					<img src="{{ asset('frontend-assets/images/staff.html') }}" class="img-fluid w-100" alt="Staff Image">
				</div>
			</div>
			<div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
				<div class="mb-3">
					<h3>Employers</h3>
				</div>
				<!-- Employers Cards -->
				<div class="service-item rounded p-4 mb-3 d-flex flex-column h-100">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="service-content">
									<a href="employer/service.html" class="h4 d-inline-block mb-2">Flex Staff</a>
									<p class="mb-0 service-text-truncate-ellipsis">
										NexusHire offers flexible staffing solutions that can provide our clients with short and long-term contingent workers to meet their seasonal, project or growth requirements.  We maintain an active database of qualified registered contingent workers who have been tested and met stringent quality control standards in regards to safety, functional literacy, math, and operationally specific skills.  We are continually recruiting for new workers through our online and offline channels and can deploy new workers in as little as 3 hours’ notice.  We work with some of the largest companies in Canada to meet their on-demand workforce requirements
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-3 d-flex flex-column h-100">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="service-content">
									<a href="employer/service.html" class="h4 d-inline-block mb-2">Temp to Perm</a>
									<p class="mb-0 service-text-truncate-ellipsis">
										In some cases our clients are looking to hire a candidate on a temporary basis at first and then over a period of time transition that candidate to a permanent role.  As such, we offer a temp to perm service to support these requirements.  Our temp to perm services operate similar to our permanent placement service in that we engage in a targeted search for a candidate that meets specific requirements.  Once found, that candidate is placed with the client in the role specified, but remains a temporary employee for a period up to 90 days. This gives the client an opportunity to assess their performance in-situ at your premises and take them on full-time once they have proven their ability to perform at the level required. Hiring without risk.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-3 d-flex flex-column h-100">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="service-content">
									<a href="employer/service.html" class="h4 d-inline-block mb-2">Direct Hiring</a>
									<p class="mb-0 service-text-truncate-ellipsis">
										When you need the right people for your team, our direct recruitment solution delivers results. Our
										professional recruitment consultants will identify and screen candidates for you, providing a shortlist
										to of preselected, high-quality candidates to choose from. This saves you time, streamlining the
										recruitment process and delivering the recruitment outcomes your business needs.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Service End-->

<!-- Hiring system Start -->
<div class="container-fluid feature bg-light py-5">
	<div class="container py-5">
		<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
			<h4 class="text-uppercase text-primary">Our Hiring System</h4>
			<h1 class="display-3 text-capitalize mb-3">Industry’s Best Matches</h1>
		</div>
		<div class="row g-4">
			<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
				<div class="feature-item p-4 h-100 d-flex flex-column">
					<div class="feature-icon mb-3"><i class="fas fa-briefcase text-white fa-3x"></i></div>
					<a href="#" class="h4 mb-3">Hiring Technology</a>
					<p class="mb-0">
						Using cutting-edge technology our system matches candidates with open positions,
						selecting those most suitable for the role not just in skill, but in personality.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
				<div class="feature-item p-4 h-100 d-flex flex-column">
					<div class="feature-icon mb-3"><i class="fas fa-file-alt text-white fa-3x"></i></div>
					<a href="#" class="h4 mb-3">Job Descriptions</a>
					<p class="mb-0">
						We help you define the tasks, responsibilities, and expectations of any position.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
				<div class="feature-item p-4 h-100 d-flex flex-column">
					<div class="feature-icon mb-3"><i class="fas fa-user-check text-white fa-3x"></i></div>
					<a href="#" class="h4 mb-3">Best Candidates</a>
					<p class="mb-0">
						Our unmatched recruitment insight ensures that you enjoy a streamlined process that selects
						only the most suitable candidates for interview.
					</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
				<div class="feature-item p-4 h-100 d-flex flex-column">
					<div class="feature-icon mb-3"><i class="fas fa-tasks text-white fa-3x"></i></div>
					<a href="#" class="h4 mb-3">Assessment</a>
					<p class="mb-0">
						We gain a deeper understanding of the types of jobs and tasks each candidate is naturally
						predisposed for and will be a success at.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Refer a friend End-->

<!-- Expertise Start -->
<!-- <div class="container-fluid service bg-light overflow-hidden py-5">
	<div class="container py-5">
		<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
			<h4 class="text-uppercase text-primary">Our Expertise</h4>
			<h1 class="display-3 text-capitalize mb-3">Delivering Excellence Through Our Expert Staff</h1>
		</div>
		<div class="row gx-4 gy-4 align-items-center">
			<div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="service-item rounded p-4 mb-4">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn">
										<i class="fas fa-truck text-white fa-2x"></i>
									</div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Logistics & Warehousing</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Order pickers</li>
										<li>Packers</li>
										<li>Shippers/receivers</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-4">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-apple-alt text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Food Processing & Distribution</a>
									<ul class=" list list-style-none mb-0 pl-0">
										<li>Packers</li>
										<li>Mixers</li>
										<li>Quality control</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-0">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-car text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Automotive</a>
									<ul class=" list list-style-none mb-0 pl-0">
										<li>Assembly Line workers</li>
										<li>Quality control</li>
										<li>Machine operators</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
				<div class="service-item rounded p-4 mb-4">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn">
										<i class="fas fa-headset text-white fa-2x"></i>
									</div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Customer Service & Client Care</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Customer support representatives</li>
										<li>Help desk agents</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-4">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-phone-alt text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Call Centre & Telemarketing</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Call centre agents</li>
										<li>Telemarketing reps</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-0">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-user-cog text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Management & Executive Search</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Operations managers</li>
										<li>Warehouse managers</li>
										<li>Account executives</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-item rounded p-4 mb-4">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-box-open text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Packaging</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Press operators</li>
										<li>Laminators</li>
										<li>Print operators</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-4">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-user text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">General Office & Admin</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Receptionists/Front office</li>
										<li>Office administrators</li>
										<li>Sales support</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="service-item rounded p-4 mb-0">
					<div class="row">
						<div class="col-12">
							<div class="d-flex">
								<div class="pe-4">
									<div class="service-btn"><i class="fas fa-calculator text-white fa-2x"></i></div>
								</div>
								<div class="service-content">
									<a href="#" class="h4 d-inline-block mb-3">Accounting & Bookkeeping</a>
									<ul class="list list-style-none mb-0 pl-0">
										<li>Bookkeepers</li>
										<li>Order entry clerks</li>
										<li>Collection agents</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Expertise End -->

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

<!-- Blog Start -->
<!-- <div class="container-fluid blog pb-5">
	<div class="container pb-5">

		<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
			<h1 class="display-3 text-uppercase text-primary mt-4">NexusHire</h1>
			<h1 class="display-3 text-capitalize mb-3"> Insights & Updates</h1>
		</div>
		<div class="row g-4 justify-content-center">
			<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
				<div class="blog-item">
					<div class="blog-img">
						<img src="{{ asset('frontend-assets/uploads/blog/1727323465.jpg') }}" class="img-fluid rounded-top w-100" alt="NexusHire Blog 1">
					</div>
					<div class="blog-content rounded-bottom p-4">
						<a href="https://www.freecodecamp.org/news/how-to-crack-almost-any-interview/" class="h4 d-inline-block mb-3">How To Crack Almost Any Job Interview</a>
						<p>Are you preparing for an upcoming job interview? Read up on these super helpful interview tips to make sure you’re ready for it! Because, why not …?</p>
						<a href="https://www.freecodecamp.org/news/how-to-crack-almost-any-interview/" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
				<div class="blog-item">
					<div class="blog-img">
						<img src="{{ asset('frontend-assets/uploads/blog/1727323251.jpg') }}" class="img-fluid rounded-top w-100" alt="NexusHire Blog 1">
					</div>
					<div class="blog-content rounded-bottom p-4">
						<a href="#" class="h4 d-inline-block mb-3">How to Network with Confidence</a>
						<p>As you begin to strike up a conversation, just focus on being yourself. You will feel more at ease and it will come across when speaking with others. People tend to spot people who are insincere pretty quickly.</p>
						<a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
				<div class="blog-item">
					<div class="blog-img">
						<img src="{{ asset('frontend-assets/uploads/blog/1727323783.jpg') }}" class="img-fluid rounded-top w-100" alt="NexusHire Blog 1">
					</div>
					<div class="blog-content rounded-bottom p-4">
						<a href="https://www.reed.co.uk/career-advice/how-to-deal-with-stress-in-an-interview/" class="h4 d-inline-block mb-3">How to deal with job interview stress</a>
						<p>What if I forget everything I’ve ever learned when I’m asked a question?’ ‘What if I trip up on the way in?’ ‘What if I get lost on the way there, I forget my umbrella, get soaked – and somehow lose a shoe?’.</p>
						<a href="https://www.reed.co.uk/career-advice/how-to-deal-with-stress-in-an-interview/" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Blog End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
	<div class="container pb-5">
		<div class="text-center mx-auto pb-5 wow" data-wow-delay="0.2s" style="max-width: 800px;">
			<!-- <h4 class="text-uppercase text-primary">What NexusHire Users Say</h4> -->
			<h1 class="display-3 text-capitalize mb-3">Our Client's Success Stories</h1>
		</div>
		<div class="owl-carousel testimonial-carousel wow " data-wow-delay="0.3s">
			<!-- Testimonial 1 -->
			<div class="testimonial-item text-center p-4">
				<p>“I really appreciated the outstanding time, work, and effort that the entire staff put into findingme an excellent job placement. Professional, Dependable, Good people to work&amp;nbsp;with, thank youvery&amp;nbsp;much!!!”</p>
				<!-- <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/uploads/testimonial/1727319202.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div> -->
				<div class="d-block">
					<h4 class="text-dark">Prabhjot Gill</h4>
					<p class="m-0 pb-3">Business Analyst</p>
					<div class="d-flex justify-content-center text-secondary">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
			</div>
			<!-- Testimonial 1 -->
			<div class="testimonial-item text-center p-4">
				<p>“I am thrilled with my new job and this is largely due to the care taken by NexusHire to find me aposition which closely matched my skills, personality and the conditions I had described asbeing my “ideal”. In my opinion, NexusHire offers a very professional service, and all the staffdisplay a strong focus on customer service. I would not hesitate to recommend them to anyemployer looking for staff or to anyone seeking employment.&quot;</p>
				<!-- <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/uploads/testimonial/1727774388.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div> -->
				<div class="d-block">
					<h4 class="text-dark">Christine</h4>
					<p class="m-0 pb-3">Warehouse Operations</p>
					<div class="d-flex justify-content-center text-secondary">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
			</div>
			<!-- Testimonial 1 -->
			<div class="testimonial-item text-center p-4">
				<p>NexusHire made my recruiting life completely painless and quite enjoyable! Recruitment is soincredibly important to the success of my team but it’s the last thing I ever have time in mycalendar to complete. I am grateful to have them as a partner.</p>
				<!-- <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/uploads/testimonial/1727773988.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div> -->
				<div class="d-block">
					<h4 class="text-dark">Tammy</h4>
					<p class="m-0 pb-3">Plant Manager</p>
					<div class="d-flex justify-content-center text-secondary">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
			</div>
			<!-- Testimonial 1 -->
			<div class="testimonial-item text-center p-4">
				<p>After trying multiple agencies, I reached out to NexusHire and stopped looking elsewhere. Thecandidates are head &amp;amp; shoulders above the competition. The team’s attentiveness to my staffing needs make me feel prioritized, also to mention their billing is perfectly consistent.</p>
				<!-- <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/uploads/testimonial/1727774173.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div> -->
				<div class="d-block">
					<h4 class="text-dark">Rebecca Fisher</h4>
					<p class="m-0 pb-3">V.P Human resources</p>
					<div class="d-flex justify-content-center text-secondary">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
			</div>
			<!-- Testimonial 1 -->
			<div class="testimonial-item text-center p-4">
				<p>NexusHire team is always very responsive when I call. I always feel like my request will receiveimmediate attention, and this means a lot to me. I’ve never felt like I’m going on the backburner. I will continue to use their services for all my needs.</p>
				<!-- <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/uploads/testimonial/1727774344.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div> -->
				<div class="d-block">
					<h4 class="text-dark">S. William</h4>
					<p class="m-0 pb-3">Director</p>
					<div class="d-flex justify-content-center text-secondary">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
			</div>
			<!-- Testimonial 1 -->
			<div class="testimonial-item text-center p-4">
				<p>“I have utilized NexusHire staffing services for almost a year now and am extremely pleased withthe professionalism of the staff and the quality of the candidates. It is refreshing to work withan agency that listens to your needs and supplies candidates that perfectly match therequirements. I thoroughly enjoyed working with everyone at NexusHire, hearing the smiles onthe phone and knowing that customer service is superior.”</p>
				<!-- <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/uploads/testimonial/1727774402.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div> -->
				<div class="d-block">
					<h4 class="text-dark">Peter Mayer</h4>
					<p class="m-0 pb-3">HR Manager</p>
					<div class="d-flex justify-content-center text-secondary">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
			</div>
			<!-- Testimonial 2 -->
			<!-- <div class="testimonial-item text-center p-4">
                <p>"Thanks to NexusHire, our team coordination has improved significantly, and we're able to manage shifts more effectively than ever."</p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://www.nexushire.ca/img/testimonial-2.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="Client Image">
                </div>
                <div class="d-block">
                    <h4 class="text-dark">John Miller</h4>
                    <p class="m-0 pb-3">Team Lead</p>
                    <div class="d-flex justify-content-center text-secondary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div> -->
		</div>
	</div>
</div> <!-- Testimonial End -->
@endsection
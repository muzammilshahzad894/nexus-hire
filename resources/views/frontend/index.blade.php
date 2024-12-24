@extends('layouts.frontend.app')

@section('css')
<style>
	.owl-item .condidate-item {
		max-width: 100% !important;
		margin-bottom: 0px !important;
	}
</style>
@endsection

@section('content')
<!-- Banner Section Start -->
<div class="banner-section">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="banner-content text-center">
					<p>Find Jobs, Employment & Career Opportunities</p>
					<h1>Drop Resume & Get Your Desire Job!</h1>

					<ul class="keyword">
						<li>Trending Keywords:</li>
						<li><a href="#">Automotive,</a></li>
						<li><a href="#">Education,</a></li>
						<li><a href="#">Health</a></li>
						<li>and</li>
						<li><a href="#">Care Engineering</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Banner Section End -->
 
<!-- Candidate Section Start -->
<section class="candidate-section pt-100 pb-70">
	<div class="container">
		<div class="section-title text-center">
			<h2>Our Services</h2>
		</div>

		<div class="condidate-slider owl-carousel owl-theme">
			<div class="condidate-item">
				<div class="choose-card">
					<i class="fas fa-bullseye"></i>
					<h3>The Right Opportunity</h3>
					<p>Discover the Right Opportunity to Grow, Succeed, and Achieve Your Goals—Start Your Journey Today with Confidence!</p>
				</div>
			</div>
			
			<div class="condidate-item">
				<div class="choose-card">
					<i class="fas fa-user-check"></i>
					<h3>Hiring Process</h3>
					<p>Navigate the Hiring Process with Ease—Find the Right Job, Apply Quickly, and Start Your Career Journey Today!</p>
				</div>
			</div>
			
			<div class="condidate-item">
				<div class="choose-card">
					<i class="fas fa-life-ring"></i>
					<h3>Job Support</h3>
					<p>From resume tips to interview strategies, our experts guide you—find your dream job and start your journey today!</p>
				</div>
			</div>
			
			<div class="condidate-item">
				<div class="choose-card">
					<i class="fas fa-users-cog"></i>
					<h3>Flex Staff</h3>
					<p>Flex Staff provides scalable staffing solutions—quickly deploy skilled workers to meet seasonal or project needs!</p>
				</div>
			</div>
			
			<div class="condidate-item">
				<div class="choose-card">
					<i class="fas fa-sync-alt"></i>
					<h3>Temp to Perm</h3>
					<p>Temp to Perm offers flexible hiring—start with temporary staff and transition to permanent roles with confidence!</p>
				</div>
			</div>
			
			<div class="condidate-item">
				<div class="choose-card">
					<i class="fas fa-user-tie"></i>
					<h3>Direct Hiring</h3>
					<p>Direct Hiring simplifies recruitment—get pre-screened, high-quality candidates to build your team quickly and efficiently!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Candidate Section End -->

<!-- Category Section Start -->
<section class="categories-section pt-50 pb-70">
	<div class="container">
		<div class="section-title text-center">
			<h2>Our Hiring System</h2>
			<p>Industry’s Best Matches connect top talent with leading opportunities—ensuring the perfect fit for success and growth!"</p>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="job-list.html">
					<div class="category-card">
						<i class="fas fa-laptop"></i>
						<h3>Hiring Technology</h3>
						<p>Using cutting-edge technology our system matches candidates with open positions, selecting those most suitable for the role not just in skill, but in personality.</p>
					</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="job-list.html">
					<div class="category-card">
						<i class="fas fa-file-alt"></i>
						<h3>Job Descriptions</h3>
						<p>We assist in defining tasks, responsibilities, and expectations for every position to ensure clarity, success, alignment, growth, efficiency, and productivity.</p>
					</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="job-list.html">
					<div class="category-card">
						<i class="fas fa-user-check"></i>
						<h3>Best Candidates</h3>
						<p>Our unmatched recruitment insight ensures that you enjoy a streamlined process that selects only the most suitable candidates for interview.</p>
					</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="job-list.html">
					<div class="category-card">
						<i class="fas fa-bullseye"></i>
						<h3>Assessment</h3>
						<p>We gain a deeper understanding of the types of jobs and tasks each candidate is naturally predisposed for and will be a success at, ensuring optimal fit.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- Category Section End -->
 
<!-- Why Choose Section Start -->
<section class="why-choose">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-7 p-0">
				<div class="why-choose-text pt-100 pb-70">
					<div class="section-title text-center">
						<h2>Why You Choose Nexus Hire?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorei.</p>
					</div>

					<div class="row justify-content-center">
						<div class="col-sm-6">
							<div class="media">
								<i class="flaticon-group align-self-center mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0">Best Talented People</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="media">
								<i class="flaticon-research align-self-center mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0">Easy To Find Canditate</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="media">
								<i class="flaticon-discussion align-self-center mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0">Easy To Communicate</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="media">
								<i class="flaticon-recruitment align-self-center mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0">Global Recruitment Option</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row counter-area">
						<div class="col-md-3 col-6">
							<div class="counter-text">
								<h2><span>127</span></h2>
								<p>Job Posted</p>
							</div>
						</div>

						<div class="col-md-3 col-6">
							<div class="counter-text">
								<h2><span>137</span></h2>
								<p>Job Filed</p>
							</div>
						</div>

						<div class="col-md-3 col-6">
							<div class="counter-text">
								<h2><span>180</span></h2>
								<p>Company</p>
							</div>
						</div>

						<div class="col-md-3 col-6">
							<div class="counter-text">
								<h2><span>144</span></h2>
								<p>Members</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 p-0">
				<div class="why-choose-img">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Why Choose Section End -->
 
<!-- Job Info Section Start -->
<div class="job-info pt-100 pb-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="looking-job">
					<div class="media">
						<i class='flaticon-group align-self-start mr-3'></i>
						<div class="media-body">
							<h5 class="mt-0">Looking For a Job</h5>
							<p>Your next role could be with one of these top leading organizations</p>

							<a href="job-list.html">
								Apply Now
								<i class='bx bx-chevrons-right'></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="recruiting-card">
					<div class="media">
						<i class='flaticon-resume align-self-start mr-3'></i>
						<div class="media-body">
							<h5 class="mt-0">Are You Recruiting?</h5>
							<p>Your next role could be with one of these top leading organizations</p>

							<a href="post-job.html">
								Apply Now
								<i class='bx bx-chevrons-right'></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Job Info Section End -->
@endsection
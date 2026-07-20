@extends('layouts.top-layout')
@section('title', 'Services')
@section('description', 'What We Offer')
@section('content')
	
	<!-- Title Bar -->
	<div class="pbmit-title-bar-wrapper">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner container">
							<h1 class="pbmit-tbar-title"> About Us</h1>
						</div>
					</div>
					<div class="pbmit-breadcrumb">
						<div class="pbmit-breadcrumb-inner">
							<span>
								<a title="" href="#" class="home"><span>GET</span></a>
							</span>
							<i class="pbmit-base-icon-arrow-right-2"></i>
							<span><span class="post-root post post-post current-item"> About Us</span></span>
						</div>
					</div>
				</div>
			</div>  
		</div> 
	</div>
	<!-- Title Bar End-->

	<!-- Page Content -->
	<div class="page-content about-us">

	<!-- About Start -->
		<section class="section-xl">
			<div class="container">
				<div class="row g-0">
					<div class="col-md-12 col-xl-6" data-aos="fade-up" data-aos-duration="800">
						<div class="about-one-leftbox">
							<div class="about-img text-end">
								<img src="images/homepage-1/about-01.png" class="img-fluid" alt="">
							</div>
							<div class="spinner-box">
								<div class="pbmit-spinner pbmit-spinner-box-style-1">
									<div class="pbmit-ihbox-box">
										<div class="pbmit-ihbox-icon">
											<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
												<svg id="svg6" clip-rule="evenodd" fill-rule="evenodd" height="512" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" width="512">
													<path id="path2" d="m11 5.414-5.293 5.293c-.39.39-1.024.39-1.414 0s-.39-1.024 0-1.414l7-7c.39-.391 1.024-.391 1.414 0l7 7c.39.39.39 1.024 0 1.414s-1.024.39-1.414 0l-5.293-5.293v15.586c0 .552-.448 1-1 1s-1-.448-1-1z"></path>
												</svg>
											</div>
										</div>
										<svg version="1.1" viewBox="0 0 200 200">
											<defs>
												<path d="M0, 100a100, 100 0 1, 0 200, 0a100, 100 0 1, 0 -200, 0" id="txt-path"></path>
											</defs>
											<circle cx="160" cy="100" r="80" fill="none"></circle>
											<text>
												<textPath startOffset="0" xlink:href="#txt-path">10+ Years of Experience 10+ Years of Experience</textPath>
											</text>
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-md-12 col-xl-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
						<div class="about-one-rightbox">
							<div class="pbmit-heading-subheading">
								<h4 class="pbmit-subtitle">Why Choose us</h4>
								<h2  class="pbmit-title">Leading Environmentalist In The Industry</h2>
							</div>
							<p class="pbmit-firstletter">GET are specialist in environmental and water resource advisory firm providing integrated environmental governance, regulatory compliance, hydrological, hydrogeological, geochemical expertise, and advanced data-driven solutions.</p>
							<p>provider of groundwater supply solutions and hydrogeological investigations, serving clients across a wide range of industries.</p>
							<div class="row align-items-center">
								<div class="col-md-6 list-group-col">
									<ul class="list-group">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i class="pbmit-base-icon-tick-1"></i>						
											</span>
											<span class="pbmit-icon-list-text">Hydrogeology and water resource management</span> 
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i class="pbmit-base-icon-tick-1"></i>						
											</span>
											<span class="pbmit-icon-list-text">Regulatory compliance and audit assurance</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i class="pbmit-base-icon-tick-1"></i>						
											</span>
											<span class="pbmit-icon-list-text">ESG-aligned water stewardship</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i class="pbmit-base-icon-tick-1"></i>						
											</span>
											<span class="pbmit-icon-list-text">Environmental data science and digital transformation</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i class="pbmit-base-icon-tick-1"></i>						
											</span>
											<span class="pbmit-icon-list-text">Machine learning and AI-driven compliance analytics</span>
										</li>
									</ul>
								</div>
								<div class="col-md-6 about-02-img-col">
									<img src="images/homepage-1/about-02.png" class="rounded-4 img-fluid" alt="">
								</div>
							</div>
							<div class="mt-4">
								<a href="our-team.html" class="pbmit-btn">
									<span class="pbmit-button-text">View all Team</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- About Start -->







@include('layouts.footer')
@endsection
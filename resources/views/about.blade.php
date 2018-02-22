@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/page-about-banner-1.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Nahorr Analytics</h1>
					<div class="separator-2"></div>
					<p class="lead">A software and data analytics company.</p>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">What we do</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							
							<div class="row">
								<div class="col-md-8">
									<p>Nahorr Analytics is a software and data analytics company. We bring software, data and ideas together to meet local and global needs. We belive in using software and data to better processes and to provide and display information in a manner that improves decision making and planning.</p>
									
									<p>We are a new but fast growing company made up of a team of thinkers, builders, doers, and innovators. We bring passion to what we do. We meet opportunities and challenges head-on, with unwavering optimism, innovation, collaboration, and resourcefulness.</p>
									<h2>Core Services</h2>
									<ul class="list-icons">
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall"><i class="icon-check"></i> Software Development</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check"></i>Data Collection and Analysis</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300"><i class="icon-check"></i> Data Driven Website Development</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="500"><i class="icon-check"></i>Training and Talent Development</li>
									</ul>
									<a class="btn btn-lg btn-default" href="{{asset('/contact')}}"><i class="fa fa-users pr-10"></i> Contact Us</a>
								</div>
								<!-- sidebar start -->
								<aside class="sidebar col-md-4">
									<div class="side vertical-divider-left">
										<div class="block clearfix">
											<h3 class="title margin-top-clear">Latest projects</h3>
											<div class="separator"></div>
											<div class="gallery row">
												<div class="gallery-item col-xs-4">
													<div class="overlay-container">
														<img src="{{asset('idea/images/totalgrades.jpg')}}" alt="totalgrades">
														<a href="https://totalgrades.com/" target="_blank" class="overlay small">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</aside><!-- sidebar end -->
							</div>
							<hr>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

        @include('includes.footer')

        @include('includes.subfooter')
@endsection


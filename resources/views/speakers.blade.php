@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/about.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>SPEAKERS</h1>
					<div class="separator-2"></div>
					<p class="lead">Speakers will include NOC's presenting/marketing their local content policies, IOCs, OSCs, local content professionals and institutions in oil and gas industry. </p>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- banner start -->
			<!-- ================ -->
			
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="images/section-image-5.png" alt="" class="object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0">
						</div>						
						<div class="col-md-6">
							<br>
							<h1 class="object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="200">IDea - Bootstrap Theme</h1>
							<br>
							<div class="box-style-3 object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="400">
								<div class="icon-container default-bg">
									<i class="fa fa-laptop"></i>
								</div>
								<div class="body">
									<h2>Very Flexible</h2>
									<p>Iure sequi unde hic. Sapiente quaerat labore inventore veritatis cumque.</p>
									<a href="page-services.html" class="link"><span>Read More</span></a>
								</div>
							</div>
							<div class="box-style-3 object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="600">
								<div class="icon-container default-bg">
									<i class="fa fa-sitemap"></i>
								</div>
								<div class="body">
									<h2>Latest Technologies</h2>
									<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
									<a href="page-services.html" class="link"><span>Read More</span></a>
								</div>
							</div>
							<div class="box-style-3 object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="800">
								<div class="icon-container default-bg">
									<i class="fa fa-bicycle"></i>
								</div>
								<div class="body">
									<h2>Easy to Use</h2>
									<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
									<a href="page-services.html" class="link"><span>Read More</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<!-- banner end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section white-bg clearfix">
				<div class="container">

					<h1>SPEAKERS</h1>
					<div class="separator-2"></div>

					<div class="row grid-space-20">

						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{asset('idea/images/michael_hackenbruch.jpg')}}" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title">Michael Hackenbruch</h3>
									<small>Conference Adviser</small>
									<div class="separator-2"></div>
									<small>Advisor Local Content / Sustainable Value Chains / Business Development Strategies</small>
									<div class="separator-2"></div>
									<h3 class="title">Paper:</h3>
									<small>Local Content and Procurement Requirements in Oil and Gas Contracts: Regional trends in the Middle East and North Africa</small>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{asset('idea/images/fred_agbedi.jpg')}}" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title"> Hon. Fred Agbedi</h3>
									<small>Speaker</small>
									<div class="separator-2"></div>
									<small>House Chairman, Committee on Gas, Nigerian National Assembly</small>
									<div class="separator-2"></div>
									<h3 class="title"></h3>
									<small>Local Content Law Implementation - Gas</small>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{asset('idea/images/willy_olsen.jpg')}}" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title">  Willy Olsen</h3>
									<small>Speaker</small>
									<div class="separator-2"></div>
									<small>Senior Advisor, INTSOK</small>
									<div class="separator-2"></div>
									<h3 class="title"></h3>
									<small>Local Content Strategy - Perspective of Norway</small>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{asset('idea/images/damilola_olawuyi.jpg')}}" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title">Damilola S. Olawuyi</h3>
									<small>Speaker</small>
									<div class="separator-2"></div>
									<small>Professor of Energy and Environmental Law | HBKU Law School, Qatar Foundation</small>
									<div class="separator-2"></div>
									<h3 class="title"></h3>
									<small>Analysis of Local Content Policies in MENA</small>
									<div class="separator-2"></div>
									<small>Profile at:<a href="https://www.damilolaolawuyi.com" target="_blank"> www.damilolaolawuyi.com</a> </small>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{asset('idea/images/andrea_moreno.jpg')}}" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title">Andrea Moreno</h3>
									<small>Speaker</small>
									<div class="separator-2"></div>
									<small>Chief Compliance Officer and Local Content Expert</small>
									<div class="separator-2"></div>
									<h3 class="title"></h3>
									<small> Grupo Mieres Angola Lda The Gate to Angola Business</small>
									<div class="separator-2"></div>
									<small><a href="https://www.grupomieres.com" target="_blank"> www.grupomieres.com</a></small>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{asset('idea/images/rogger_tissot.jpg')}}" alt="">
									<div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="image-box-body">
									<h3 class="title">Rogger Tissot</h3>
									<small>Speaker</small>
									<div class="separator-2"></div>
									<small>Senior Consultant Rene Roger Tissot. <br> International Local Content Consultant </small>
									<div class="separator-2"></div>
									<h3 class="title"></h3>
									<small>Local Content Policies Framework in MENA, Latin America and East Africa (Conference Adviser)</small>
								</div>
							</div>
						</div>
						
					</div>
					<div class="space"></div>
				</div>
			</div>
			<!-- section end -->

			<div class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="call-to-action">
                                <h1 class="title"> To get access to speakers</h1>
                                <a href="{{url('/contact')}}" target="_blank" class="btn btn-default contact">Click here <i class="pl-10 fa fa-check"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-top end -->

        @include('includes.footer')

        @include('includes.subfooter')
@endsection


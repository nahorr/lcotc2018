@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/nahorr-services.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Products & Services</h1>
					<div class="separator-2"></div>
					</div>
				</div>
			</div>
			<!-- banner end -->
			<br>
			<h1 class="text-center title">Core Services</h1>
			<div class="separator"></div>
			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
				<div class="container">
					<br>
					<h3 class="text-center title"><strong>Custom Software Solutions</strong></h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('idea/images/nahorr-services-1.png')}}" alt="">
							<div class="space hidden-md hidden-lg"></div>
						</div>
						<div class="col-md-6">
							<p class="space-top">Software development is the bedrock of the services we provide and the products we develope at Nahorr Analytics. We take pride in designing and developing custom software solutions for our clients. We belive in easy to use yet robost software solutions that increase efficiency and enhance productivity. </p>
							<p></p>
						</div>
					</div>
					<div class="text-center">
						<a href="{{asset('/contact')}}" class="btn btn-warning" >Contact Us</a>
					</div>
				</div>
			</div>
			<!-- section end -->
			<hr>

			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
				<div class="container">
					<br>
					<h3 class="text-center title"><strong>Data Collection and Analysis Services</strong></h3>
					<div class="row">
						<div class="col-md-6">
							<p class="space-top">Our world is becoming very dependent on our ability to collect and analyse data. Collecting and analysing data in government or business orginations can lead to better policies or improved business processes. Be it environmrntal, social, or economic data,  at Nahorr Analytics, we help build systems and procedures to effectively collect, analyse , and present data in a meaningful way. We carefully designed our data collection processes to ensure quality data that our clients can depend on and use confidently.</p>
							
						</div>
						<div class="col-md-6">
							<img src="{{asset('idea/images/nahorr-services-2.png')}}" alt="">
							<div class="space hidden-md hidden-lg"></div>
						</div>
					</div>
					<div class="text-center">
						<a href="{{asset('/contact')}}" class="btn btn-warning" >Contact Us</a>
					</div>
				</div>
			</div>
			<!-- section end -->
			<hr>
			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
				<div class="container">
					<br>
					<h3 class="text-center title"><strong>Data Driven Website Development</strong></h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('idea/images/nahorr-services-3.png')}}" alt="">
							<div class="space hidden-md hidden-lg"></div>
						</div>
						<div class="col-md-6">
							<p class="space-top">A company's websites is a getway into the world. It defines how the orgainization views itself. We belive that a website should display more that just information. It should be a dynamic and intelligent sets of codes that can interact with its users. At Nahorr Analytics, we will design a website you will feel very proud to own that you would tell the world about it at every oppurtunity.</p>
							
						</div>
					</div>
					<div class="text-center">
						<a href="{{asset('/contact')}}" class="btn btn-warning" >Contact Us</a>
					</div>
				</div>
			</div>
			<!-- section end -->
			<hr>
			<!-- section start -->
			<!-- ================ -->
			{{--
			<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
				<div class="container">
					<br>
					<h3 class="text-center title"><strong>Skills Training and Talent Development</strong></h3>
					<div class="row">
						<div class="col-md-6">
							<p class="space-top">When it comes to skills development and training, our philosophy is simple - THINK LEARN THINK. Thought is the way we bring things into existence. If you wish to develope a good software, you have to think about it first. So  at Nahorr Analytics, we belive that the best way to develpe a brian is through thinking, learning, and thinking.</p> <P>Our training programs are designed to show you how to develope your brain by thinking of and building real world applications that could be commercialized right away. But not to worry, you have a team of friends to help you all the way. We are like a family at nahorr analytics. We help you do what would even amaze you.</P>

							
							
						</div>
						<div class="col-md-6">
							<img src="{{asset('idea/images/nahorr-services-4.png')}}" alt="">
							<div class="space hidden-md hidden-lg"></div>
						</div>
					</div>
					<div class="text-center">
						<a href="{{asset('/contact')}}" class="btn btn-warning" >Contact Us</a>
					</div>
				</div>
			</div>
			<!-- section end -->
			--}}
			<!-- page-top start-->
			<!-- ================ -->
			<div id="page-top" class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="clearfix">
					<div class="col-md-12">
						<h1 class="text-center title">Products</h1>
						<div class="separator"></div>
						<p class="text-center">Totalgrades is our latest product.</p>
						<div class="row grid-space-20">
							<div class="col-md-12 col-lg-5">
								<br class="hidden-sm hidden-xs">
								<br class="hidden-sm hidden-xs">
								<iframe width="360" height="250" src="https://www.youtube.com/embed/Bzn9dMX7ISs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen class="object-non-visible center-block" data-animation-effect="fadeInUp" data-effect-delay="0"></iframe>
								
							</div>
							<div class="col-md-6 col-lg-3">
								<br class="hidden-xs">
								<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
									<div class="icon-container default-bg circle">
										<i class="fa fa-bar-chart"></i>
									</div>
									<div class="body">
										<h2>Totalgrades</h2>
										<p>Total Grades is an easy to use online gardes management platform that encourages and empowers students to improve their grades while allowing parents to be actively enganged.</p>
										<a href="https://totalgrades.com/" class="link"><span>Read More</span></a>
									</div>
								</div>
								<div class="text-center">
						<a href="{{asset('/contact')}}" class="btn btn-warning" >Contact Us</a>
					</div>
								
								<br class="hidden-xs hidden-sm">
							</div>
							<div class="col-md-6 col-lg-3">
								<br class="hidden-sm hidden-xs">
								<br class="hidden-sm hidden-xs">
								<img src="{{asset('idea/images/totalgrades-products.png')}}" alt="totalgrades" class="object-non-visible center-block" data-animation-effect="fadeInUp" data-effect-delay="0">
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			<!-- page-top end -->

					
            @include('includes.footer')

            @include('includes.subfooter')
@endsection
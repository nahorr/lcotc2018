@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/about.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>AGENDA</h1>
					<div class="separator-2"></div>
					<p class="lead">MORE TO COME LEARN MORE<br />    <a href=" {{url('/registration')}} "><strong>REGISTER NOW FOR 10% DISCOUNT WHILE OFFER LASTS</strong></a>​​</p>
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
							<p style="font-size: 18px;">The phrase “local content” is appearing more frequently in the laws, internal policies and tender protocols of governments and companies around the world, particularly with regard to the oil & gas industry. The main argument to justify the local content rules is the enhancement of the local industry and industrialisation. But is it working? At what cost? How does it affect investors bottomline? A white paper will be prepared after the conference to capture main ideas/recommendations to local content stakeholders.</p>
						</div>
						<!-- main end -->

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<h1 class="page-title">Local Content Conference Agenda</h1>
							<h2>Day 1</h2>
							<ul class="list-icons">
								<li><i class="fa fa-clock-o"></i> 07.30 - 09.00:&nbsp;&nbsp;&nbsp;Registration/Breakfast</li>
								<li><i class="fa fa-clock-o"></i> 07.30 - 09.00:&nbsp;&nbsp;&nbsp;Welcome Remarks ,and Opening Keynote Address by H.E Goodluck Jonathan, former president of the Federal Republic of Nigeria</li>
								<li><span style="visibility: hidden;"><i class="fa fa-clock-o"></i>07.30 - 09.00:</span>&nbsp;&nbsp;&nbsp;Paper: Local Content, FDI and Sustainable Development</li>
							</ul>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="box-style-1 gray-bg team-member">
										
											<img src="{{asset('idea/images/keynote_speaker-2.jpg')}}" alt="">
											
										
										<h3>SABIC (https://www.sabic.com/en)</h3>
									</div>
								</div>
								<div class="col-md-6">
									<h1 class="page-title">Conference Keynote Speaker</h1>
									<p>SABIC (https://www.sabic.com/en)</p>
									<p>A global leader in the global petrochemical industry headquartered in Riyadh, Saudi Arabia.</p>
									<p>70% of SABIC’s shares are owned by the Saudi Arabian government, with the remaining 30% publicly traded on the Saudi stock exchange - a remarkable local content success story. </p>
									
								</div>
								
							</div>

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section default-bg clearfix">
				<div class="container">
					<div class="call-to-action">
						<div class="row">
							<div class="col-md-8">
								<h1 class="title text-center"> <a href=" {{url('/agendafiles/Conference_Agenda_10.pdf')}} " target="_blank">Click here <br>View or download full agenda</a></h1>
								
							</div>
							<div class="col-md-4">
								<div class="text-center">
									<a href="{{ url('/agendafiles/Conference_Agenda_10.pdf') }}" target="_blank" class="btn btn-white btn-lg"> Full Agenda </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
           
            @include('includes.footer')

            @include('includes.subfooter')
			
@endsection
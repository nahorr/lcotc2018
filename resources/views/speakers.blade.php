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
			<!-- section start -->
            <!-- ================ -->
            <div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1 class="text-center">CONFERENCE KEYNOTE SPEAKER</h1>
                            <div class="separator"></div>
                            <p class="lead text-center">SABIC (https://www.sabic.com/en)<br> A global leader in the global petrochemical industry headquartered in Riyadh, Saudi Arabia.<br>70% of SABIC’s shares are owned by the Saudi Arabian government, with the remaining 30% publicly traded on the Saudi stock exchange - a remarkable local content success story.</p>
                            <!-- Tabs Top -->
                            <div class="text-center">
                                <img src="{{asset('idea/images/section-image-11.png')}}" alt="localcontentotc2018" data-tab-animation-effect="fadeInRightSmall">
                                
                                <div class="space"></div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section white-bg clearfix">
				<div class="container">

					<h1 class="text-center">SPEAKERS</h1>
					<div class="separator"></div>

					<div class="row grid-space-20">
						@foreach($event_speakers as $speaker)

						<div class="col-lg-6 col-md-12">
							<div class="image-box team-member white-bg option-3">
								<div class="overlay-container">
									<img src="{{ asset('/event_speakers/images/'.$speaker->picture) }}" alt="">
									
								</div>
								<div class="image-box-body">
									<h3 class="title">{{$speaker->fullname}}</h3>
									<small>Speaker</small>
									<div class="separator-2"></div>
									<p><small>{{$speaker->content_1}}</small></p>
									<p><small>{{$speaker->content_2}}</small></p>
									<p><small>{{$speaker->content_3}}</small></p>
									<p><small>{{$speaker->paper}}</small></p>
									
								</div>
							</div>
						</div>
						
						@endforeach
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


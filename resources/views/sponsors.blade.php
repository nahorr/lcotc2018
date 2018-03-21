@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/about.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>SPONSORS</h1>
					<div class="separator-2"></div>
					<p class="lead">Here are some of our sponsors </p>
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

                            <h1 class="text-center">DIAMOND SPONSOR</h1>
                            <div class="separator"></div>
                            <p class="lead text-center">SABIC (https://www.sabic.com/en)</p>
                            <!-- Tabs Top -->
                            <div class="text-center">
                                <img src="{{asset('idea/images/diamond-sponsor.png')}}" alt="localcontentotc2018" data-tab-animation-effect="fadeInRightSmall">
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->
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
							<h1 id="image-boxes" class="page-title">Sponsors</h1>
							
							<!-- page-title end -->

							<div class="space-bottom"></div>
							<div class="row grid-space-20">
								<div class="col-md-4">
									<div class="image-box mb-20 object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
										<div class="overlay-container">
											<img src="{{asset('idea/images/sponsor-enh.jpg')}}" alt="">
											<a href="http://www.enh.co.mz/" target="_blank" class="overlay small">
												<img src="{{asset('idea/images/sponsor-enh.jpg')}}" alt="">
												<span>ENH, NOC of the Republic of Mozambique</span>
											</a>
										</div>
										<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">ENH</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="image-box mb-20 object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="200">
										<div class="overlay-container">
											<img src="{{asset('idea/images/sponsor-roeson.jpg')}}" alt="">
											<a href="#" target="_blank" class="overlay small">
												<img src="{{asset('idea/images/sponsor-roeson.jpg')}}" alt="">
												<span>Roeson Global Engineering Services Limited</span>
											</a>
										</div>
										<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">ROESON</a>
									</div>
								</div>
								
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

        @include('includes.footer')

        @include('includes.subfooter')
@endsection


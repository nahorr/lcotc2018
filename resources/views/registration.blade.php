@extends('layouts.app-public')

@section('content')

            @include('includes.header')

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- ================ -->
            <div class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="call-to-action">
                                <h1 class="title">UPCOMING EVENT</h1>
                                <h2 class="title">LOCAL CONTENT CONFERENCE 2018 ON May 01 - 02 MAY, HOUSTON TEXAS</h2>
                                <p>DON'T MISS OUT. This is the only major international local content event in the oil and gas industry in 2018. You'll meet local content experts from Middle East, Europe, Asia, Africa and South America.</p>
                                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="{{ env('PAYPAL_FORM_VALUE') }}">
									<input type="image" src="{{asset('idea/images/register_now.png')}}" border="0" name="submit" alt="PayPal - Register Now">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-top end -->

						

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Cancellation Policy</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							
							<div class="row">
								<div class="col-md-12">
									<ul class="list-icons">
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall"><i class="icon-check"></i> If a registrant is unable to attend the event they may substitute someone else from the same company/organisation <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;provided the substitution is done in writing to info@marakconsulting.com on or before 28 February 2018</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check"></i>Registrations cancelled on or before 30 February 2018 will attract $150 administration cost</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300"><i class="icon-check"></i>  Registrations cancelled after 30 February 2018 will not be eligible for refund</li>
									</ul>
								</div>
								
							</div>
							<hr>
						</div>
						<!-- main end -->

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Attendees Information</h1>
							<!-- page-title end -->

							<hr>
							<h2>Event Location</h2>
							<p>The event will take place at the Crowne Plaza Houston Near Reliant - Medical</p>
							<ul class="list-icons">
								<li><i class="fa fa-home"></i> Address: 8686 Kirby Drive, Houston, TX, 77054, US</li>
								<li><i class="fa fa-envelope"></i> <a href="mailto:mail@idea.con">Contact: info@marakconsulting.com</a></li>
							</ul>
							<hr>
							<h2>Visa Application</h2>
							<p>The event will take place at the Crowne Plaza Houston Near Reliant - Medical</p>
							<p>Organizer of Local Content Houston 2018 is happy to provide an official letter of invitation to delegates. Email: info@marakconsulting.com for the letter after registration.</p>
							<hr>
							<h2>HOTEL</h2>
							<p>Hotels can be booked from various sites including but not limited to hotels.com. Please note that the Local Content Alliance event will be holding during the OTC 2018 week so it’s advisable to reserve accommodation well in advance</p>
							<hr>
							<h2>SPEED NETWORKING</h2>
							<p>Bring plenty of classic business cards for the speed networking session and your charm to find new business associates and expand your network. We’ll make it work for you!</p>
							
							<hr>


							<!-- main start -->
							<!-- ================ -->
							<div class="main col-md-4">

								<!-- page-title start -->
								<!-- ================ -->
								<h2 class="page-title"><strong>Sponsorship Details: </strong></h2>
								<h3> email: info@marakconsulting.com for details.We value your privacy and business</h3>
								<hr>
							
								<h3><strong>Benefits of sponsorship</strong></h3>
								<p>A list of items in which the order does not explicitly matter.</p>
								<ul>
									<li>Advertise your business to target audience</li>
									<li>Get exposure to international markets and many more</li>
									
								</ul>
						
							</div>
							<!-- main end -->

							<!-- sidebar start -->
							<aside class="col-md-4">
								<div class="sidebar">
									<div class="block clearfix">
										<h3 class="title">Lunch</h3>
										<p>Day 1, and day 2 </p>
										<hr>
									
										<h3 class="title">Adverts</h3>
										<p>Advert for the Local Content Summit </p>
										<hr>
									
										<h3 class="title">Coffee</h3>
										<p>Coffee breaks for day 1, and day 2 </p>
										<hr>
									
										<h3 class="title">Banners</h3>
										<p>Banners for the event will also advertise sponsorship details </p>
										<hr>
									</div>
								</div>
							</aside>
							<!-- sidebar end -->

							<!-- sidebar start -->
							<aside class="col-md-4">
								<div class="sidebar">
									<div class="block clearfix">
										<h3 class="title">Dinner - welcome reception</h3>
										<p>Dinner event on day 1</p>
										
										<hr>
									
										<h3 class="title">Cocktail</h3>
										<p></p>
										<hr>
									
										<h3 class="title">Gifts and summit bags</h3>
										<p></p>
										<hr>
																						
									</div>
								</div>
							</aside>
							<!-- sidebar end -->
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
           
            @include('includes.footer')

            @include('includes.subfooter')
			
@endsection
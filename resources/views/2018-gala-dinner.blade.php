@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/about.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Gala Dinner – African Nite</h1>
					<div class="separator-2"></div>
					<p class="lead">Local Content Conference on 13 June 2018 at Calgary Petroleum Club.<br /> During Global Petroleum Show Week</p>
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

			            <div class="main col-md-8 col-md-offset-2">



			              <h1 class="title text-center">Gala Dinner – African Nite</h1>

			              <br>

			              <p class="text-center">Join us for an African Nite gala dinner on 13 June 2018 at 6.30pm at the Calgary Petroleum Club during the Global Petroleum Show week.</p>

			              

			              <!-- countdown start -->

			              <div id="defaultCountdown" class="countdown"></div>

			              <!-- countdown end -->



			            </div>

			            <!-- main end -->



			        </div>

			    </div>

			</section>
			<!-- main-container end -->

        @include('includes.footer')

        @include('includes.subfooter')
@endsection


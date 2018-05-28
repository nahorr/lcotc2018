@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/press-release.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Pictures-2018 Conference</h1>
					<div class="separator-2"></div>
					<p class="lead">The Local Content Conference is being organised by Marak Alliance LLC in conjunction with international local content experts.<br /> Contact: info@marakconsulting.com</p>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- main-container start -->

			<!-- ================ -->

			<section class="main-container">



			  <div class="container">

			    <div class="row">
			    	<div class="row">
				    	<div class="col-md-6">
				    		<img src="{{ asset('press_release/pr-img1.jpg') }}" class="img-responsive" alt="press-release" width="100%" height="300">
				    	</div>
				    	<div class="col-md-6">
				    		<img src="{{ asset('press_release/pr-img2.jpg') }}" class="img-responsive" alt="press-release" width="100%" height="300">
				    	</div>
				    </div>
			    	<hr>
			    	<div class="row">
			    		<iframe src="{{ asset('press_release/pr-pdf-1.pdf') }}" width="100%" height="1200"></iframe>
			    	</div>
			    	<hr>
			    	<div class="row">
			    		<iframe src="{{ asset('press_release/pr-doc-1.pdf') }}" width="100%" height="1200"></iframe>
			    	</div>


			    </div>

			  </div>

			</section>

			<!-- main-container end -->


        @include('includes.footer')

        @include('includes.subfooter')
@endsection


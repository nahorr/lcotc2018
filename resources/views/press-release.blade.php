@extends('layouts.app-public')

@section('content')

            @include('includes.header')


			<!-- main-container start -->

			<!-- ================ -->

			<section class="main-container">



			  <div class="container">

			    <div class="row">
			    	<div class="col-md-10 col-md-offset-1">
			    		<img src="{{ asset('press_release/1.jpg') }}" class="img-responsive" alt="press-release" width="100%" height="auto">
			    		<img src="{{ asset('press_release/2.jpg') }}" class="img-responsive" alt="press-release" width="100%" height="auto">
			    		<img src="{{ asset('press_release/3.jpg') }}" class="img-responsive" alt="press-release" width="100%" height="auto">
			    		<img src="{{ asset('press_release/4.png') }}" class="img-responsive" alt="press-release" width="100%" height="auto">
				    </div>
			    

			    </div>

			  </div>

			</section>

			<!-- main-container end -->


       
        @include('includes.subfooter')
@endsection
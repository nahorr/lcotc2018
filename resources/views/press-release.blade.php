@extends('layouts.app-public')

@section('content')

            @include('includes.header')


			<!-- main-container start -->

			<!-- ================ -->

			<section class="main-container">



			  <div class="container">

			    <div class="row">
			    	<div class="col-md-10 col-md-offset-1">
			    		<img src="{{ asset('press_release/1.png') }}" class="img-responsive" alt="press-release" width="100%" height="300">
			    		<img src="{{ asset('press_release/2.png') }}" class="img-responsive" alt="press-release" width="100%" height="300">
			    		<img src="{{ asset('press_release/3.png') }}" class="img-responsive" alt="press-release" width="100%" height="300">
			    		<img src="{{ asset('press_release/4.png') }}" class="img-responsive" alt="press-release" width="100%" height="300">
				    </div>
			    

			    </div>

			  </div>

			</section>

			<!-- main-container end -->


       
        @include('includes.subfooter')
@endsection


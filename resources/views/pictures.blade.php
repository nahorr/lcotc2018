@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/about.jpg');">
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



			      <!-- main start -->

			      <!-- ================ -->

			      <div class="main col-md-8 col-md-offset-2">



			        <!-- page-title start -->

			        <!-- ================ -->

			        <h1 id="lightbox" class="page-title">2018 Localcontent Pictures</h1>

			        <div class="alert alert-info alert-dismissible" role="alert">

			          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>

			          2018 Localcontent Pictures just concluded

			        </div>

			        <br>

			        <!-- page-title end -->



			        <!-- Progress Bars start -->

		
			        <div class="overlay-container">

			          <img src="{{asset('idea/images/portfolio-item-2.jpg')}}" alt="">

			          <a href="{{asset('idea/images/portfolio-item-2.jpg')}}" class="overlay popup-img" title="First image title">

			            <i class="fa fa-search-plus"></i>

			          </a>

			        </div>

			        <div class="space-bottom"></div>

			        <div class="row grid-space-20">

			          <div class="col-xs-3">

			            <div class="overlay-container">

			              <img src="{{asset('idea/images/portfolio-item-1.jpg')}}" alt="">

			              <a href="{{asset('idea/images/portfolio-item-1.jpg')}}" class="overlay small popup-img" title="Second image title">

			                <i class="fa fa-search-plus"></i>

			              </a>

			            </div>

			          </div>

			          <div class="col-xs-3">

			            <div class="overlay-container">

			              <img src="{{asset('idea/images/portfolio-2.jpg')}}" alt="">

			              <a href="{{asset('idea/images/portfolio-2.jpg')}}" class="overlay small popup-img" title="Third image title">

			                <i class="fa fa-search-plus"></i>

			              </a>

			            </div>

			          </div>

			          <div class="col-xs-3">

			            <div class="overlay-container">

			              <img src="{{asset('idea/images/portfolio-3.jpg')}}" alt="">

			              <a href="{{asset('idea/images/portfolio-3.jpg')}}" class="overlay small popup-img" title="Fourth image title">

			                <i class="fa fa-search-plus"></i>

			              </a>

			            </div>

			          </div>

			          <div class="col-xs-3">

			            <div class="overlay-container">

			              <img src="{{asset('idea/images/portfolio-4.jpg')}}" alt="">

			              <a href="{{asset('idea/images/portfolio-4.jpg')}}" class="overlay small popup-img" title="Fifth image title">

			                <i class="fa fa-search-plus"></i>

			              </a>

			            </div>

			          </div>

			        </div>

			        <div class="space-bottom"></div>

			      </div>

			      <!-- main end -->




			    </div>

			  </div>

			</section>

			<!-- main-container end -->


        @include('includes.footer')

        @include('includes.subfooter')
@endsection


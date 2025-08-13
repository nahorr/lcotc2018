@extends('layouts.app-public')

@section('content')

            @include('includes.header')

            <!-- banner start -->
			<!-- ================ -->
			<div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('idea/images/about.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>2018 Conference Papers</h1>
					<div class="separator-2"></div>
					<p class="lead">The Local Content Conference is being organised by Marak Alliance LLC in conjunction with international local content experts.<br /> Contact: info@marakalliance.com</p>
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

							              <h2>2018 Conference Papers</h2>

              <br>

              <table class="table">

                <thead>

                  <tr>

                    <th>#</th>

                    <th>Title</th>

                    <th>Speaker</th>

                    <th>View/Download</th>

                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td>1</td>

                    <td>LOCAL CONTENT AS A DRIVER FOR TECHNOLOGICAL DEVELOPMENT</td>

                    <td>Dr. Goodluck Jonathan</td>

                    <td><a href="{{url('/papers-2018/Dr_Goodluck_Jonathan_Final_Local_Content_Speech.pdf')}} " target="_blank">View/Download</a></td>

                  </tr>

                  <tr>

                    <td>2</td>

                    <td>MEXICO NATIONAL CONTENT - THE CHALLENGING ALIGNMENT OF DOMESTIC INDUSTRY WITH FOREIGN INVESTMENT.</td>

                    <td>Dr. Miriam Grunstein</td>

                    <td><a href="{{url('/papers-2018/Dr_Miriam_Grunstein_National_content.pdf')}} " target="_blank">View/Download</a></td>

                  </tr>

                  <tr>

                    <td>3</td>

                    <td>CATALYZING LOCAL CONTENT CREATION IN THE KINGDOM</td>

                    <td>KSA - SABIC</td>

                    <td><a href="{{url('/papers-2018/KSA_SABIC_NUSANED_LCBDU.pdf')}} " target="_blank">View/Download</a></td>

                  </tr>
                  <tr>

                    <td>4</td>

                    <td>Effective Local Content Policies for optimizing development outcomes in the African extractive sector</td>

                    <td>Charles NYIRAHUKU</td>

                    <td><a href="{{url('/papers-2018/PRESENTATION_OF_AFDB_LOCAL_CONTENT_POLICY_FORMULATION_24042018.pdf')}} " target="_blank">View/Download</a></td>

                  </tr>
                  <tr>

                    <td>5</td>

                    <td>Implementing Local Content initiatives in Oil & Gas through Suppliers Development Programs in Argentina</td>

                    <td>Prof. Marcelo Neuman</td>

                    <td><a href="{{url('/papers-2018/Prof_Neuman_Supplier_Dev.pdf')}} " target="_blank">View/Download</a></td>

                  </tr>

                </tbody>

              </table>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

        @include('includes.footer')

        @include('includes.subfooter')
@endsection


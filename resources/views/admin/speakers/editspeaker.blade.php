@extends('admin.layouts.app')
@section('content')
    @include('admin.includes.sidebar')
    @include('admin.includes.top-nav')
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           @include('admin.includes.top-head')
          <!-- /top tiles -->

          <div class="x_panel">
            <div class="x_title">
              <h2>Editing Speaker - {{$speaker->fullname}} <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Edit Speakers</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

            @include('flash::message')

            <div class="col-md-6  col-md-push-3">

              <!-- start form for validation -->
              <form id="edit-speaker" class="form-group" action="{{ url('/admin/speakers/posteditspeaker', [$speaker->id]) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                
                <div class="form-group>">
                  <label for="fullname">Full Name * :</label>
                  <input type="text" id="fullname"  name="fullname" class="form-control" value="{{$speaker->fullname}}" required />
                </div>
                <br>

                <div class="form-group>">
                  <label for="email">Email * :</label>
                  <input type="email" id="email" name="email" class="form-control" value="{{$speaker->email}}" required />
                </div>
                <br>

                <div class="form-group>">
                  <label for="message">Content 1 (please leave empty if no content to add,, 150 max) :</label>
                  <textarea id="content_1" class="form-control" name="content_1">{{$speaker->content_1}}</textarea>
                </div>
                <br>

                 <div class="form-group>">
                  <label for="message">Content 2 (please leave empty if no content to add,, 150 max) :</label>
                  <textarea id="content_1" class="form-control" name="content_2">{{$speaker->content_2}}</textarea>
                </div>
                <br>

                 <div class="form-group>">
                  <label for="message">Content 3 (please leave empty if no content to add,, 150 max) :</label>
                  <textarea id="content_1" class="form-control" name="content_3">{{$speaker->content_3}}</textarea>
                </div>
                <br>

                 <div class="form-group>">
                  <label for="message">Content 4 (please leave empty if no content to add,, 150 max) :</label>
                  <textarea id="content_1" class="form-control" name="paper">{{$speaker->paper}}</textarea>
                </div>
                <br>

                <div class="form-group">
                   <label for="exampleFormControlFile1">Upload Speaker picture again - jpg and png formats only</label>
                   <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <br/>
                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
              <!-- end form for validations -->

              <div class="alert-danger">
          
                <ul>
                  @foreach($errors->all() as $error)

                    <li> {{ $error }}</li>

                  @endforeach

                </ul>

              </div>

            </div>
          </div>
       

        </div>
        <!-- /page content -->   
    @include('admin.includes.footer')                     
@endsection

@extends('admin.layouts.app')
@section('content')
    @include('admin.includes.sidebar')
    @include('admin.includes.top-nav')
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           @include('admin.includes.top-head')
          <!-- /top tiles -->

          <div class="col-md-6">
            <div class="x_title">
              <h2>Replacing Picture - {{$picture->picture}} <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <a href="{{ route('addpicture') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Add New Picture </a>
              </ul>
              <div class="clearfix"></div>
            </div>

            @include('flash::message')

            <div class="col-md-6  col-md-push-3">

              <!-- start form for validation -->
              <form id="edit-speaker" class="form-group" action="{{ url('/admin/pictures/posteditpicture', [$picture->id]) }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}     
                
                <div class="form-group">
                   <label for="exampleFormControlFile1">This action will replace existing picture with the new one - jpg and png formats only</label>
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

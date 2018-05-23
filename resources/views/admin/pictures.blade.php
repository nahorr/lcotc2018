@extends('admin.layouts.app')
@section('content')
    @include('admin.includes.sidebar')
    @include('admin.includes.top-nav')
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           @include('admin.includes.top-head')
          <!-- /top tiles -->

          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Picture table<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('addpicture') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>Add New Picture </a>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Picture Name</th>
                          <th>Date Uploaded</th>
                          <th>Date Modified</th>
                          <th>Action</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($pictures as $key=>$picture)
                        <tr>
                          
                            <td>{{$key+1}}</td>
                            <td>{{$picture->picture}}</td>
                            <td>{{$picture->created_at}}</td>
                            <td>{{$picture->updated_at}}</td>
                            <td>
                              
                              <a href="{{ route('editpicture', [$picture->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-trash-o"></i>Edit </a>
                              <a href="{{ route('deletepicture', [$picture->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                              <a href="{{ asset('eventpictures/images/'.$picture->picture) }}" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-view"></i> View Picture </a>
                            </td>
                          
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       

        </div>
        <!-- /page content -->   
    @include('admin.includes.footer')                     
@endsection

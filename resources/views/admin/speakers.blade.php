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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of users<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{route('addspeaker')}}">Add a speaker</a>
                          </li>
                          <li><a href="#">Add registration code</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Content 1</th>
                          <th>Content 2</th>
                          <th>Content 3</th>
                          <th>paper</th>
                          <th>picture</th>
                          <th>Date Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($speakers as $key=>$speaker)
                        <tr>
                          
                            <td>{{$speaker->fullname}}</td>
                            <td>{{$speaker->email}}</td>
                            <td>{{$speaker->content_1}}</td>
                            <td>{{$speaker->content_2}}</td>
                            <td>{{$speaker->content_3}}</td>
                            <td>{{$speaker->paper}}</td>
                            <td>{{$speaker->picture}}</td>
                            <td>{{$speaker->created_at}}</td>
                            <td>
                              <a href="{{ route('editspeaker', [$speaker->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-trash-o"></i>Edit </a>
                              <a href="{{ route('deletespeaker', [$speaker->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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

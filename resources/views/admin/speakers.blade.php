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
                          <li><a href="#">Add a user</a>
                          </li>
                          <li><a href="#">Add registration code</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
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
                          <th>Date Created</th>
                          <th>picture</th>
                          <th>Content 1</th>
                          <th>Content 2</th>
                          <th>Content 3</th>
                          <th>Content 4</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($sponsors as $key=>$sponsor)
                        <tr>
                          
                            <td>{{$sponsor->name}}</td>
                            <td>{{$sponsor->email}}</td>
                            <td>{{$sponsor->created_at}}</td>
                            <td>{{$sponsor->logo}}</td>
                            <td><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
                          
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

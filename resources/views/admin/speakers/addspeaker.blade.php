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
              <h2>Add New Speaker <small></small></h2>
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
            <div class="x_content">

              <!-- start form for validation -->
              <form id="add-speaker" method="POST" data-parsley-validate>
                
                <label for="fullname">Full Name * :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required />

                <label for="email">Email * :</label>
                <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />



                <label for="message">Content 1 (20 chars min, 100 max) :</label>
                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                  data-parsley-validation-threshold="10"></textarea>

                <label for="message">Content 1 (20 chars min, 100 max) :</label>
                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                  data-parsley-validation-threshold="10"></textarea>

                <label for="message">Content 2 (20 chars min, 100 max) :</label>
                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                  data-parsley-validation-threshold="10"></textarea>

                <label for="message">Content 3 (20 chars min, 100 max) :</label>
                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                  data-parsley-validation-threshold="10"></textarea>

                <label for="message">Paper Info (20 chars min, 100 max) :</label>
                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                  data-parsley-validation-threshold="10"></textarea>

                <br/>
                <span class="btn btn-primary">Add Speaker</span>

              </form>
              <!-- end form for validations -->

            </div>
          </div>
       

        </div>
        <!-- /page content -->   
    @include('admin.includes.footer')                     
@endsection

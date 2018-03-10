        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/home')}}" class="site_title"><img src="{{asset('/gentelella/build/images/nahorr_logo.png')}}" alt="nahorr_logo"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('/gentelella/build/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Dashboard</h3>
                <ul class="nav side-menu">
              
                <li {{{ (Request::is('admin/home') ? 'class=active' : '') }}}>
                    <a href="{{ url('/admin/home') }}">
                        <i class="fa fa-home"></i>
                        Admin Home
                    </a>
                </li>

                <!--
                <li {{{ (Request::is('admin/sponsors') ? 'class=active' : '') }}}>
                    <a href="{{ url('/admin/sponsors') }}">
                        <i class="fa fa-money"></i>
                        Sponsors
                    </a>
                </li>
                -->

                <li {{{ (Request::is('admin/speakers') ? 'class=active' : '') }}}>
                    <a href="{{ url('/admin/speakers') }}">
                        <i class="fa fa-suitcase"></i>
                        Speakers
                    </a>
                </li>

                <li {{{ (Request::is('admin/contactformsubmissions') ? 'class=active' : '') }}}>
                    <a href="{{ url('/admin/contactformsubmissions') }}">
                        <i class="fa fa-envelope"></i>
                        Contact Form
                    </a>
                </li>

                <li {{{ (Request::is('home') ? 'class=active' : '') }}}>
                    <a href="{{ url('/home') }}">
                        <i class="fa fa-user"></i>
                        User Profile
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                          <i class="fa fa-power-off"></i>Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                </li>

               </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>
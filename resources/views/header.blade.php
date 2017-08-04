<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Life Cycle BD</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/bootstrap/css/bootstrap.min.css') }}"> 
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style --><!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}">
        <!--  Admin Tempalte -->
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/dist/css/skins/_all-skins.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('public/AdminLTE/dist/css/mystyle.css') }}"> 
        
        

        <script src="{{ asset('public/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
        <script src="{{ asset('public/AdminLTE/plugins/ckeditor/ckeditor.js')}}"></script>
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
        </script>
    </head> 
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="{{url('/')}}/admin/home" class="logo"> 
                    <span class="logo-lg"><b>Lifecycle </b>BD</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                <?php  $header=admin_header_bar(); ?>
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                         
                        <ul class="nav navbar-nav">
                      <!-- Messages: style can be found in dropdown.less-->
                      <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-envelope-o"></i>
                          <span class="label label-success"> {{$header['admin_message_count']}}</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="header">You have {{$header['admin_message_count']}} messages</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                            @foreach($header['admin_message'] as $row)
                              <li><!-- start message -->
                                <a href="{{url('/')}}/admin/mailbox/read/{{$row->id}}">
                                  <div class="pull-left">                                     
                                    <div style="height: 30px; width: 30px; border:1px solid red;"></div>
                                  </div>
                                  <h4>{{$row->sender_email}}<small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                  <p>{{$row->message}}</p>
                                </a>
                              </li> 
                              @endforeach


                            </ul>
                          </li>
                          <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                      </li>
                      <!-- Notifications: style can be found in dropdown.less -->
                      <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-bell-o"></i>
                          <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="header">You have 10 notifications</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                              <li>
                                <a href="#">
                                  <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                  page and may cause design problems
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-users text-red"></i> 5 new members joined
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-user text-red"></i> You changed your username
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="footer"><a href="#">View all</a></li>
                        </ul>
                      </li>
                      <!-- Tasks: style can be found in dropdown.less -->
                      <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-flag-o"></i>
                          <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="header">You have 9 tasks</li>
                          <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                              <li><!-- Task item -->
                                <a href="#">
                                  <h3>
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                  </h3>
                                  <div class="progress xs">
                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                      <span class="sr-only">20% Complete</span>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- end task item -->
                              <li><!-- Task item -->
                                <a href="#">
                                  <h3>
                                    Create a nice theme
                                    <small class="pull-right">40%</small>
                                  </h3>
                                  <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                      <span class="sr-only">40% Complete</span>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- end task item -->
                              <li><!-- Task item -->
                                <a href="#">
                                  <h3>
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                  </h3>
                                  <div class="progress xs">
                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                      <span class="sr-only">60% Complete</span>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- end task item -->
                              <li><!-- Task item -->
                                <a href="#">
                                  <h3>
                                    Make beautiful transitions
                                    <small class="pull-right">80%</small>
                                  </h3>
                                  <div class="progress xs">
                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                      <span class="sr-only">80% Complete</span>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- end task item -->
                            </ul>
                          </li>
                          <li class="footer">
                            <a href="#">View all tasks</a>
                          </li>
                        </ul>
                      </li>

                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login </a></li>
                        <li><a href="{{ route('register') }}">Register </a></li>
                        @else
                      <!-- User Account: style can be found in dropdown.less -->
                      <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('public/AdminLTE/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                          <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header"> 
                            <img src="{{asset('public/AdminLTE/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">     

                            <p>
                              {{ Auth::user()->name }} - Web Developer
                              <small>Member since Nov. 2012</small>
                            </p>
                          </li>
                          <!-- Menu Body -->
                          <li class="user-body">
                          A+ Blood Donor
                          </li>
                          <!-- Menu Footer-->
                          <li class="user-footer">
                            <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">

                                <a class="btn btn-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form> 
                            </div>
                          </li>
                        </ul>
                      </li>
                      @endif 
                    </ul>
                    </div>
                </nav>
            </header>


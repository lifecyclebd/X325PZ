<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Life Cycle BD | @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('/')}}public/frontend/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/style.css">
        <link rel="stylesheet" href="{{ asset('/')}}public/user/css/style.css">
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/half-slider.css">
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/font-awesome.min.css">         
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet"> 

        <style type="text/css">
            input[type="text"].login:focus, input[type="password"].login:focus, input[type="email"].login:focus, textarea.login:focus {
                background: none;
                outline: none;
                color: white;
            }

            button.login {
                border-radius: 5px;
                background-color: #393939;
                color: white;
                height: 34px;
            }
            .logout{
                color: white;
                padding: 10px;
                text-decoration: none;
                list-style: none;
            }
            .logout a{
                color:red;

            }
            .dropdown-menu>li>a.li_menu {
    color: #fbfbfb !important;
}
            .dropdown-menu>li>a.li_menu:hover {
    color: black !important;
}
        </style>
    </head>
    <body id="top" data-spy="scroll">
        <!--top header-->
        <?php $site_info = get_footer(); ?>
        <header id="home">
            <section class="top-nav hidden-xs life_topbar" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-left" style="padding: 10px;">
                                <ul> 
                                    <li><i class="fa fa-envelope" aria-hidden="true"> </i> info@lifecyclebd.org </li>
                                    <?php if (!empty($site_info->phone1)) { ?> 
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><span class="phone"> 01709848480</span></li>
                                    <?php } if (!empty($site_info->fb_url)) { ?>                                        
                                        <li><a href="{{$site_info->fb_url}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                                    <li><a href="{{url('https://twitter.com/')}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php } if (!empty($site_info->web_url)) { ?>                                     
                                        <li><a href="{{$site_info->web_url}}" target="_blank"><i class="fa fa-internet-explorer" aria-hidden="true"></i></a></li>
                                    <?php } if (!empty($site_info->tw_url)) { ?> 
                                        <li><a href="{{$site_info->tw_url}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php } if (!empty($site_info->link_url)) { ?> 
                                        <li><a href="$site_info->link_url}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-right">
                              <?php 
                              $data=after_login();
                                $login_user= get_session();
                                if(!empty($login_user)){
                                $login_profile=$login_user->pic_path;
                                $login_address=$login_user->address; 
                                  ?>
                                    <ul class="nav navbar-nav">
                                       <li class="dropdown" style="min-width: 80px;">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                                <span class="hidden-xs" style="margin-left: 10px"> <i style="font-size: 16px; color: red" class="fa fa-envelope"></i> <span class="badge" style="margin-top: -20px;">{{$data['last5messageCount']}}</span></span>
                                            </a>
                                            <ul class="dropdown-menu" style="    background: rgb(132, 125, 125);">
                                                <!-- User image -->
                                                @foreach($data['last5message'] as $row)
                                                <li class="" style="min-width: 250px;"> 
                                                     <a class="li_menu" href="{{url('/')}}/donor-profile/message-show/{{$row->id}}" style="text-transform: none;"> {{$row->message}} </a> 
                                                </li> 
                                                @endforeach
                                            </ul>
                                        </li>

                                           <li class="dropdown" style="min-width: 80px;">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                                <span class="hidden-xs" style="margin-left: 10px"> 
                                                <i style="font-size: 22px; color: red" class="fa fa-tint" aria-hidden="true"></i>
                                               <sup> <span class="badge"  style="margin-top: -20px;">  {{$data['bloodRequestCount']}}</span></sup> </span>
                                            </a>
                                            <ul class="dropdown-menu" style="    background: rgb(132, 125, 125);">
                                                <!-- User image -->
                                                @foreach($data['blood_request'] as $row)
                                                <li class="" style="min-width: 250px;"> 
                                                     <a class="li_menu" href="{{url('/')}}/donor-profile/request-show/{{$row->id}}" style="text-transform: none;">
You are requested for {{$row->number_blood_bag}} bag of 
<span class="badge badge-danger" style="background: red">{{$row->request_blood_group}}</span> Blood.


                                                       </a> 
                                                </li> 
                                                @endforeach
                                            </ul>
                                        </li>


                                        

                             <li class="dropdown user user-menu" style="min-width: 250px;">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{$login_profile}}" class="user-image" alt="User Image" style="width: 30px; height: 30px;">
                                    <span class="hidden-xs" style="margin-left: 10px">{{$login_user->fname}}</span>
                                </a>
                                <ul class="dropdown-menu" style="    background: rgb(132, 125, 125);">
                                    <!-- User image -->
                                    
                                    <li class="user-header" style="min-width: 250px;">
                                        <img src="{{$login_profile}}" class="user-image" alt="User Image" style="width: 30px; height: 30px;">
                                         <span class="hidden-xs">{{$login_user->fname}} {{$login_user->lname}}</span>
                                        <p>
                                            {{$login_user->address}}
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a style="background: #969090;padding: 5px;margin: 5px;" href="{{url('/donor-profile')}}" class="btn-sm btn-primary btn-flat">Profile </a>
                                        </div>
                                        <div class="pull-right">

                                            <a style="padding: 5px;margin: 5px;" class="btn-sm btn-danger" href="{{url('/')}}/donor-logout">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{url('/')}}/donor-logout" method="post" style="display: none;">
                                             {!! csrf_field() !!}
                                                <input type="hidden" name="_token" value="jYCpfqZBLnxqW69PrYECMgnqbBB9rM7FCtx2XABB">
                                            </form> 
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                           <?php } else { ?>
                                    <form action="{{url('/donor/login')}}" method="post" class="navbar-form navbar-right">
                                     {!! csrf_field() !!}
                                        <div class="form-group">
                                            <input type="text" class="form-control login" name="email" placeholder="Email">
                                            <input type="Password" class="form-control login" name="password" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-default login">Login</button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--main-nav-->

            <div id="main-nav">

                <nav class="navbar">
                    <div class="container">

                        <div class="navbar-header">
                            <a href="{{url('/')}}" class="navbar-brand">
                                <img class="img img-responsive" style="position: relative;width: 150px;height: 90px; margin-top: -35px;" src="{{asset('/')}}/public/frontend/images/logoo.png">
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse" id="ftheme">


                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/blood-request') }}">Blood Request</a></li>
                                <li><a href="{{ url('/search-doctor') }}">Doctor</a></li>
                                <li><a href="{{ url('/view-hospital') }}">Hospital</a></li>
                                <!--
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Health
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/search-doctor') }}">Find Doctor</a></li>
                                        <li><a href="{{ url('/view-hospital') }}">Hospital</a></li>
                                        <li><a href="{{ url('/view-ambulance') }}">Ambulence</a></li>
                                        <li><a href="{{ url('/write-to-doctor') }}">Write To Doctor</a></li>
                                    </ul>
                                </li> 
                                -->

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activity
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/news') }}">News</a></li>
                                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/seeMoreBloodInfo') }}">Blood Info</a></li>
                                        <!--
                                        <li><a href="{{ url('/search-blood-donor') }}">Search Donor</a></li>
                                        <li><a href="{{ url('/blood-news') }}">Blood News</a></li>
                                        
                                        -->
                                        <li><a href="{{ url('/events') }}">Events</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/recent-event') }}">Recent</a></li>
                                        <li><a href="{{ url('/upcoming-event') }}">Upcoming</a></li> 
                                    </ul>
                                </li>
                                
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Join
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/volunteer') }}">Be a Volunteer</a></li>
                                        <li><a href="{{ url('/make-donation') }}">Make a Donation</a></li> 
                                    </ul>
                                </li>
                                -->
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}">contact</a></li> 
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

        </header>
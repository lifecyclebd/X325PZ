<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Life Cycle | @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/style.css"> 
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/half-slider.css">
        <link rel="stylesheet" href="{{ asset('/')}}public/frontend/css/font-awesome.min.css">         
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet"> 

<style type="text/css">
   input[type="text"].login:focus, input[type="password"].login:focus, input[type="email"].login:focus, textarea.login:focus {
    background: none;
    outline: none;
    color: #333;
}

button.login {
    border-radius: 5px;
    background-color: #393939;
    color: white;
    height: 34px;
}
</style>
    </head>
    <body id="top" data-spy="scroll">
        <!--top header-->

        <header id="home">
            <section class="top-nav hidden-xs life_topbar" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-left" style="padding: 10px;">
                                <ul> 
                                    <li><i class="fa fa-envelope" aria-hidden="true"> </i> info@lifecyclebd.org </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><span class="phone"> +880 1711 111 222</span></li>
                                    <li><a href="{{url('https://www.facebook.com/')}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="{{url('https://twitter.com/')}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="{{url('https://www.linkedin.com/')}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="{{url('https://vk.com/')}}" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                    <li><a href="{{url('https://www.instagram.com/')}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-right">
                                <form action="" method="post" class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <input type="text" class="form-control login" placeholder="Username">
                                        <input type="Password" class="form-control login" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-default login">Login</button>
                                </form>
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
                                
                                
                                
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Blood
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/search-blood-donor') }}">Search Donor</a></li>
                                        <li><a href="{{ url('/blood-news') }}">Blood News</a></li>
                                        <li><a href="{{ url('/blood-info') }}">Blood Info</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Health
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/view-doctor') }}">Doctor</a></li>
                                        <li><a href="{{ url('/view-hospital') }}">Hospital</a></li>
                                        <li><a href="{{ url('/view-ambulance') }}">Ambulence</a></li>
                                        <li><a href="{{ url('/write-to-doctor') }}">Write To Doctor</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activity
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/news') }}">News</a></li>
                                        <li><a href="{{ url('/blog') }}">Blog</a></li> 
                                    </ul>
                                </li>
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
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}">contact</a></li> 
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

        </header>
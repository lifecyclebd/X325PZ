<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Life Cycle | Home</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!------------------------------------------------------------------------------------>
        <link rel="stylesheet" href="{{ asset("public/frontend/css/flexslider.css") }}">
        <link rel="stylesheet" href="{{ asset("public/frontend/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("public/frontend/css/font-awesome.min.css") }}">
        <link rel="stylesheet" href="{{ asset("public/frontend/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("public/frontend/css/animate.css") }}">
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
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contract us</a></li>
                                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="phone"> 123456</span></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-right">
                                <form action="" method="post" class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <input type="Password" class="form-control" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-default">Login</button>
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
                            <a href="blood_info.html" class="navbar-brand">LifeCycle</a>
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
                                <li><a href="{{ url('/blood-info') }}">Blood Info</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Health
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
                                        <li><a href="{{ url('/news-page') }}">News</a></li>
                                        <li><a href="{{ url('/blog-page') }}">Blog</a></li> 
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
                                <li class="hidden-sm hidden-xs">
                                    <a href="#" id="ss"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>

                        <div class="search-form">
                            <form>
                                <input type="text" id="s" size="40" placeholder="Search..." />
                            </form>
                        </div>

                    </div>
                </nav>
            </div>

        </header>
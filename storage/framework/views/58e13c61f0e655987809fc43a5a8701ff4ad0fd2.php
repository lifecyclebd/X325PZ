<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Life Cycle BD | <?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo e(asset('/')); ?>public/frontend/css/style.css"> 
        <link rel="stylesheet" href="<?php echo e(asset('/')); ?>public/frontend/css/half-slider.css">
        <link rel="stylesheet" href="<?php echo e(asset('/')); ?>public/frontend/css/font-awesome.min.css">         
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
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><span class="phone"> +880 1711 111 222</span></li>
                                    <?php } if (!empty($site_info->fb_url)) { ?>                                        
                                        <li><a href="<?php echo e($site_info->fb_url); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                                    <li><a href="<?php echo e(url('https://twitter.com/')); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php } if (!empty($site_info->web_url)) { ?>                                     
                                        <li><a href="<?php echo e($site_info->web_url); ?>" target="_blank"><i class="fa fa-internet-explorer" aria-hidden="true"></i></a></li>
                                    <?php } if (!empty($site_info->tw_url)) { ?> 
                                        <li><a href="<?php echo e($site_info->tw_url); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <?php } if (!empty($site_info->link_url)) { ?> 
                                        <li><a href="$site_info->link_url}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-right">
                                <?php if (isset($_SESSION['donor_login']) && !empty($_SESSION['donor_login'])) { ?>
                                    <li class="logout"> <?php echo $_SESSION['donor_login']; ?>  
                                        <a class="" href="<?php echo e(url('/')); ?>/donor-lo                                                      gout">Log Out</a>
                                    </li>
                                <?php } else { ?>
                                    <form action="" method="post" class="navbar-form navbar-right">
                                        <div class="fo                                                  rm-group">
                                            <input type="text" class="form-control login" placeholder="Username">
                                            <input type="Password" class="form-control login" placeholder="Password">
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
                            <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                                <img class="img img-responsive" style="position: relative;width: 150px;height: 90px; margin-top: -35px;" src="<?php echo e(asset('/')); ?>/public/frontend/images/logoo.png">
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
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('/blood-request')); ?>">Blood Request</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Health
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo e(url('/find-doctor')); ?>">Find Doctor</a></li>
                                        <li><a href="<?php echo e(url('/view-doctor')); ?>">view Doctor</a></li>
                                        <li><a href="<?php echo e(url('/view-hospital')); ?>">Hospital</a></li>
                                        <li><a href="<?php echo e(url('/view-ambulance')); ?>">Ambulence</a></li>
                                        <li><a href="<?php echo e(url('/write-to-doctor')); ?>">Write To Doctor</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activity
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo e(url('/news')); ?>">News</a></li>
                                        <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                                        <li><a href="<?php echo e(url('/search-blood-donor')); ?>">Search Donor</a></li>
                                        <li><a href="<?php echo e(url('/blood-news')); ?>">Blood News</a></li>
                                        <li><a href="<?php echo e(url('/blood-info')); ?>">Blood Info</a></li>
                                        <li><a href="<?php echo e(url('/events')); ?>">Events</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Events
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo e(url('/recent-event')); ?>">Recent</a></li>
                                        <li><a href="<?php echo e(url('/upcoming-event')); ?>">Upcoming</a></li> 
                                    </ul>
                                </li>
                                
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Join
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo e(url('/volunteer')); ?>">Be a Volunteer</a></li>
                                        <li><a href="<?php echo e(url('/make-donation')); ?>">Make a Donation</a></li> 
                                    </ul>
                                </li>
                                -->
                                <li><a href="<?php echo e(url('/about-us')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(url('/contact')); ?>">contact</a></li> 
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

        </header>
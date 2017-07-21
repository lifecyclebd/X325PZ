<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('pageTitle', 'About Us'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>

<style type="text/css">

    .search_button{
        border-radius: 0px;
        height: 43px;
        background-color: #8f0002;
        font-weight: 700;
        border: 1px solid #8f0002;
    }

    .search_button:hover{
        background: #ee1b2e;
        color: white;
        border: 1px solid #ee1b2e;
    }
    .map_marker{
        color: #8f0002;
        font-size: 30px;
    }
    .signup_button{
        width: 100%;
        padding: 10px;
        margin: 10px;
        height: 43px;
        background: #db3328;
    }

    .signup_button.focus, .signup_button:focus, .signup_button:hover {
        color: #fff !important;
        text-decoration: none;
        background: red !important;
    }
    .carousel-inner.onebyone-carosel { margin: auto; width: 90%; }
    .onebyone-carosel .active.left { left: -33.33%; }
    .onebyone-carosel .active.right { left: 33.33%; }
    .onebyone-carosel .next { left: 33.33%; }
    .onebyone-carosel .prev { left: -33.33%; }
    .recent_donor{
        width: 335px; 
        height: 152px;
        border: 2px solid red;
    }
 .what_people_say {
    padding: 5px;
    background: red;
    color: white; 
    border: 2px solid red;
    border-radius: 5px;
    margin: 0 auto;
}
    .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
        height: 148px;
    }
    .carousel-control.left,  .carousel-control.right{
        background: none;
    }
    .carousel-inner.onebyone-carosel {
        margin: auto;
        width: 100%;
    }
    .blood_stock{ 
        background: #eee;
        padding:20px; 
    }
</style>

<!-- Half Page Image Background Carousel Header -->
<header id="imgSlider" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#imgSlider" data-slide-to="0" class="active"></li>
        <li data-target="#imgSlider" data-slide-to="1"></li>
        <li data-target="#imgSlider" data-slide-to="2"></li>
        <li data-target="#imgSlider" data-slide-to="3"></li>
        <li data-target="#imgSlider" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <?php $i = 0; ?>
        <?php $__currentLoopData = $data['slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="item <?php if ($i == 0) {
            echo 'active';
        } ?>"> 
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo e(asset('/')); ?>public/images/gallery/<?php echo e($row->photo_name); ?>');"></div>
            <div class="carousel-caption">

                <h2><?php if (!empty($row->caption)) {
            echo $row->caption;
        } ?></h2>
                <h4><?php if (!empty($row->sub_caption)) {
            echo $row->sub_caption;
        } ?></h4>
            </div>
        </div>
<?php $i++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#imgSlider" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#imgSlider" data-slide="next">
        <span class="icon-next"></span>
    </a>
    <div class="clearfix"></div>

    <div class="row" style="min-height: 100px; background-color: #8f0002; padding: 10px; margin: 0 auto;">
        <div class="col-md-8">
            <form class="form-horizontak" method="post" action="<?php echo e(url('/')); ?>/search-any" style="margin: 10px;">
                <?php echo csrf_field(); ?>

                <div class="input-group">
                    <span class="input-group-addon" style="padding: 0px 30px; font-size: 25px;"><i class="fa fa-map-marker map_marker"></i></span>

                    <input type="text" style="height: 45px;    background: white;    font-size: 20px;" class="form-control" aria-label="Search Donor" placeholder="Search Donor Location" name="searchany">
                    <div id="map" style="overflow: hidden;"></div>
                    <span class="input-group-addon" style="padding: 0px 0px; font-size: 25px;">

                        <button class="btn  btn-serach search_button" > SEARCH </i> </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <a href="<?php echo e(url('/donor-register')); ?>"><button class="btn  btn-serach signup_button" > SIGN UP </i> </button></a>
        </div>
    </div>


</header>

<div class="More_about_info">
    <div class="container"> 
        <h3 class="life_title " style="margin-bottom:50px">More about blood</h3>  
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <div class="position_info">
                    <span class="back_icon1 pull-center">  </span>
                </div>
                <p class="title"><?php echo e($data['donor_24']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['donor_24']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['donor_24']->id); ?>"><button class="btn_read_more">Read More</button></a>
               
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon2 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['platelet']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['platelet']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['platelet']->id); ?>"><button class="btn_read_more">Read More</button></a>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon3 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['type']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['type']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['type']->id); ?>"><button class="btn_read_more">Read More</button></a>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon4 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['journey']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['journey']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['journey']->id); ?>"><button class="btn_read_more">Read more</button></a>
                </div>
            </div> 
        </div>

    </div> 




    <div class="container" style="margin-top: 30px">  
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <div class="position_info">
                    <span class="back_icon1 pull-center">  </span>
                </div>
                <p class="title"><?php echo e($data['donor_24']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['donor_24']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['donor_24']->id); ?>"><button class="btn_read_more">Read More</button></a>
               
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon2 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['platelet']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['platelet']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['platelet']->id); ?>"><button class="btn_read_more">Read More</button></a>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon3 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['type']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['type']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['type']->id); ?>"><button class="btn_read_more">Read More</button></a>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon4 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['journey']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['journey']->short_description); ?>

                </p>
                <div class="text-center">
                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['journey']->id); ?>"><button class="btn_read_more">Read more</button></a>
                </div>
            </div> 
        </div>

    </div> 


</div>


<div class="get_well_soon">        
    <div class="container"> 
        <h3 class="life_title " style="margin-bottom:30px">Get Well Soon</h3> 
        <div class="col-md-3">
            <div class="get_well_soon_sec">
                <br>
                <span class="back_icon5 pull-center" style="margin-top: 100px">  </span>
                <p class="text-white">Connect With Doctor</p>
                <div class="get_well_soon_div">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                    <div class="text-center">
                        <a href="<?php echo e(url('/write-to-doctor')); ?>"><button class="btn_read_more2">Find out more</button></a>
                    </div>
                </div>

            </div> 
        </div>
        <div class="col-md-3">
            <div class="get_well_soon_sec">
                <br>
                <span class="back_icon6 pull-center" style="height: 200px">  </span>
                <p class="text-white">Find Hospital</p>
                <div class="get_well_soon_div">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                    <div class="text-center">
                        <a href="<?php echo e(url('/view-hospital')); ?>"><button class="btn_read_more2">Find out more</button></a>
                    </div>
                </div>

            </div> 
        </div>
        <div class="col-md-3">
            <div class="get_well_soon_sec">
                <br>
                <span class="back_icon7 pull-center" style="height: 200px">  </span>
                <p class="text-white">Hire Ambulance</p>
                <div class="get_well_soon_div">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                    <div class="text-center">
                        <button class="btn_read_more2">Find out more</button>
                    </div>
                </div>

            </div> 
        </div>
        <div class="col-md-3">
            <div class="get_well_soon_sec">
                <br>
                <span class="back_icon8 pull-center" style="height: 200px">  </span>
                <p class="text-white">News</p>
                <div class="get_well_soon_div">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                    <div class="text-center">
                        <a href="<?php echo e(url('/blog')); ?>"><button class="btn_read_more2">Find out more</button></a>
                    </div>
                </div>

            </div> 
        </div>
    </div> 
</div>        



<div class="" style="width: 100%;">
    <div class="col-md-6 become_donor">
        <div class="col-md-offset-2 col-md-8">
            <h2>Become a volenter </h2>
            <p class="text-justify ">
                A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
            </p>
            <div class="pull-center"> 
                <button class="join_now hidden-xs"   data-toggle="modal" data-target="#joinVolentier">Join Now</button>

            </div>

        </div>               
    </div>
    <div class="col-md-6 make_donation">
        <div class="col-md-offset-2 col-md-8">
            <h2>Make a Donation </h2>
            <p class="text-justify" style="color:white;">
                A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
            </p>
            <div class="pull-center">

                <button class="donate_now hidden-xs" data-target="#makeDonation" data-toggle="modal">Donate Now</button>

            </div>    
        </div>

    </div>
</div>   
<div class="clearfix"></div>     

<div class="upcomming_event">
    <div class="container">
        <h3 class="life_title ">Upcoming Events</h3>

        <div class="container"> 
            <div id="imgSlider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#imgSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#imgSlider" data-slide-to="1"></li>
                    <li data-target="#imgSlider" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <?php $i=0; ?>
                    <?php $__currentLoopData = $data['upcoming_event']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item <?php if($i==0) echo 'active'; ?>">                       
                        
                        <div class="col-md-6" style="margin-bottom: 20px">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img img-responsive img-thumbnail " src="<?php echo e(url('/')); ?>/public/images/content/upcoming_events/<?php echo e($row->content_photo); ?>" alt="New York" style="width:100%;height: auto;">
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <h3><?php echo e($row->title); ?></h3>
                                <p class="text-justify">
                                    <?php echo e($row->description); ?>

                                </p>
                                <span style="margin-top: 30px; float: right;" class="hidden-xs">
                                    <a style="padding: 10px; text-align: center;" href="#" class="btn-danger" ><?php echo date("l jS \of F"); ?> </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img img-responsive img-thumbnail " src="<?php echo e(url('/')); ?>/public/images/content/upcoming_events/<?php echo e($row->content_photo); ?>" alt="New York" style="width:100%;height: auto;">
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <h3><?php echo e($row->title); ?></h3>
                                <p class="text-justify">
                                    <?php echo e($row->description); ?></p>
                                <span style="margin-top: 30px; float: right;" class="hidden-xs">
                                    <a style="padding: 10px; text-align: center;" href="#" class="btn-danger" ><?php echo date("l jS \of F"); ?> </a>
                                </span>
                            </div>
                        </div>
                          
                        
                    </div> 
                    <?php $i++; ?>                                             
                        
                          
                         
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#imgSlider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#imgSlider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

</div>





<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="span12">
            <div class=" ">
                <h2 class="life_title" style="margin-bottom: 20px;">What People Say</h2>
                <div id="myCarousel" class="carousel fdi-Carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel">
                            <?php $i=0;?>
                            <?php $__currentLoopData = $data['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item <?php if($i==0)echo 'active';?>">
                                <div class="col-md-4" style="">
                                    <div class="what_people_say" style="height: 300px"> 
                                        <span style="padding-left: 10px;">
                                            <div class="text-left">
                                                <h4><?php echo e($row->name); ?></h4><small><?php echo e($row->designation); ?></small>
                                                <b><?php echo e($row->institution); ?></b>
                                                <hr>
                                                <p><?php echo e($row->message); ?></p> 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            


                        </div>
                        <a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
                    </div>
                    <!--/carousel-inner-->
                </div><!--/myCarousel-->
            </div><!--/well-->
        </div>
    </div>
</div>












<div class="clearfix"></div>
<div id="gallery"> 
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="life_title " style="margin-bottom: 30px">Blood Fighter</h3>

            </div>


            <br/>


            <?php $__currentLoopData = $data['blood_fighter']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 filter 
                 <?php echo e($row->page_name); ?>">
                <img src="<?php echo e(url('public/images/gallery')); ?>/<?php echo e($row->photo_name); ?>" class="img-responsive thumbnail" style="width: 300px;height: 200px;border: 5px solid red;">
            </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div> 

</div>
<!-- Modal -->
<div class="modal fade" id="joinVolentier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Join as Volentier</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body"> 
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contribution</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="Contribution"></textarea>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .margin{
        margin: 0 auto;
    }
</style>
<div class="blood_stock" style="  margin-top: 30px">
    <div class="container">
        <div class="row text-center">
            <h2 class="life_title" style="margin-bottom: 20px; margin-top: 30px">blood stock</h2>
            <p class="text-center">Current blood stock in bangladesh</p>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/1.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">45%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/2.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">50%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/3.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">36%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/4.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">62%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/5.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">78%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/6.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">25%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/7.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">49%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/8.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: red; text-align: center;padding: 10px">36%</span>
             </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="span12">
            <div class=" ">
                <h2 class="life_title" style="margin-bottom: 20px;">Recent Donor</h2>
                <div id="myCarousel" class="carousel fdi-Carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel">
                            <?php $i=0;?>
                            <?php $__currentLoopData = $data['recent_donor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item <?php if($i==0)echo 'active';?>">
                                <div class="col-md-4" style="">
                                    <div class="recent_donor">
                                        <span style="width: 40%; float: left;">
                                            <a href="#"><img src="<?php echo e(url('/')); ?>/public/images/content/donor/<?php echo e($row->profile_photo); ?>" class="img-responsive center-block img-thumbnail"></a>
                                        </span>
                                        <span style="float: right; width: 60%; padding-left: 10px;">
                                            <div class="text-left">
                                                <h4><?php echo e($row->fname.' '. $row->lname); ?></h4>
                                                <p><?php echo e($row->blood_group); ?></p><small><?php echo e($row->last_donation); ?></small> 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            


                        </div>
                        <a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
                    </div>
                    <!--/carousel-inner-->
                </div><!--/myCarousel-->
            </div><!--/well-->
        </div>
    </div>
</div>
<div class="modal fade" id="makeDonation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Make a donation</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body"> 
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contribution</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="Contribution"></textarea>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_link'); ?> 



<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript_code'); ?>


<script type="text/javascript">
    $(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 10000
        })
        $('.fdi-Carousel .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
    });



    $(document).ready(function () {
        $('.navbar a.dropdown-toggle').on('click', function (e) {
            var elmnt = $(this).parent().parent();
            if (!elmnt.hasClass('nav')) {
                var li = $(this).parent();
                var heightParent = parseInt(elmnt.css('height').replace('px', '')) / 2;
                var widthParent = parseInt(elmnt.css('width').replace('px', '')) - 10;

                if (!li.hasClass('open'))
                    li.addClass('open')
                else
                    li.removeClass('open');
                $(this).next().css('top', heightParent + 'px');
                $(this).next().css('left', widthParent + 'px');

                return false;
            }
        });
    });

    $(document).ready(function () {

    $(".filter-button").click(function () {
    var value = $(this).attr('data-filter');
            //    alert("home");
            if (value == "all")
    {
    $('.filter').removeClass('hidden');
            $('.filter').show();
            $('#all').addClass('active');
    }
    <?php $__currentLoopData = $data['gallery_category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            if (value == "<?php echo e($row->page_name); ?>") {
    $('.filter').addClass('hidden');
            $('.<?php echo e($row->page_name); ?>').removeClass('hidden');
            $(".<?php echo e($row->page_name); ?>").removeClass("active");
            //  $('.filter-button').addClass('active');
            $('.filter').show();
    }
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    });
            if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
    }
    $(this).addClass("active");
            });
            $(document).ready(function () {
    $('.carousel').carousel({
    interval: 5000
    });
            });
</script>  



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
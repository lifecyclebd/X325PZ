<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('pageTitle', 'About Us'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset("public/frontend/css/half-slider.css")); ?>">

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
        <?php $i=0; ?>
        <?php $__currentLoopData = $data['slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="item <?php if($i==0){echo 'active';}?>"> 
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo e(asset('/')); ?>public/images/gallery/<?php echo e($row->photo_name); ?>');"></div>
            <div class="carousel-caption">
            
                <h2><?php if (!empty($row->caption)) { echo $row->caption;} ?></h2>
                <h4><?php if (!empty($row->sub_caption)) { echo $row->sub_caption;} ?></h4>
            </div>
        </div>
        <?php $i++;  ?>
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
        <div class="col-md-offset-2 col-md-8">
            <form class="form-horizontak" method="" action="" style="margin: 10px;">
                <div class="input-group">
                    <span class="input-group-addon" style="padding: 0px 30px; font-size: 25px;"><i class="fa fa-map-marker"></i></span>
                    <input type="text" style="height: 45px;    background: white;    font-size: 20px;" class="form-control" aria-label="Search Donor" placeholder="Search Donor Location">
                    <span class="input-group-addon" style="padding: 0px 0px; font-size: 25px;">
                        <button class="btn  btn-serach" style="border-radius: 0px;  height: 40px;  background-color: #ff0000;"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    
    
</header>

<div class="More_about_info">
    <div class="container"> 
         <h3 class="life_title ">More about blood</h3>  
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon1 pull-center" style="height: 200px">  </span>
                <?php //dd($data['donor_24']); ?>
                <p class="title"><?php echo e($data['donor_24']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['donor_24']->short_description); ?>

                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon2 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['platelet']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['platelet']->short_description); ?>

                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon3 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['type']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['type']->short_description); ?>

                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon4 pull-center" style="height: 200px">  </span>
                <p class="title"><?php echo e($data['journey']->title); ?></p>
                <p class="text-justify" style="padding:30px">
                    <?php echo e($data['journey']->short_description); ?>

                </p>
                <div class="text-center">
                    <button class="btn_read_more">Find out more</button>
                </div>
            </div> 
        </div>

    </div> 
</div>
  

<div class="get_well_soon">        
    <div class="container"> 
        <h3 class="life_title ">Get Well Soon</h3> 
        <div class="col-md-3">
            <div class="get_well_soon_sec">
                <br>
                <span class="back_icon5 pull-center" style="margin-top: 100px">  </span>
                <p class="text-white">Blood Donor 24</p>
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
                <span class="back_icon6 pull-center" style="height: 200px">  </span>
                <p class="text-white">Blood Donor 24</p>
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
                <span class="back_icon7 pull-center" style="height: 200px">  </span>
                <p class="text-white">Blood Donor 24</p>
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
                <p class="text-white">Blood Donor 24</p>
                <div class="get_well_soon_div">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                    <div class="text-center">
                        <button class="btn_read_more2">Find out more</button>
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
            <form method="post" action="<?php echo e(url('/')); ?>/join-volenter">
                <button class="join_now hidden-xs">Join Now</button>
            </form>
            </div>

        </div>               
    </div>
    <div class="col-md-6 make_donation">
        <div class="col-md-offset-2 col-md-8">
            <h2>Make a volenter </h2>
            <p class="text-justify" style="color:white;">
                A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
            </p>
            <div class="pull-center">
            <form method="post" action="<?php echo e(url('/')); ?>/join-volenter">
                <button class="donate_now hidden-xs">Donate Now</button>
            </form>
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

                    <div class="item active">
                        <div class="col-md-6" style="margin-bottom: 20px">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img class="img img-responsive img-thumbnail " src="<?php echo e(url('/')); ?>/public/frontend/images/event.jpg" alt="New York" style="width:100%;height: auto;">
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <h3>Blood Donation Camp 1</h3>
                                <p class="text-justify">We love the Big Apple!We love the Big Apple!</p>
                                <span style="margin-top: 30px; float: right;" class="hidden-xs">
                                    <a style="padding: 10px; text-align: center;" href="#" class="btn-danger" ><?php echo date("l jS \of F");?> </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 20px">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <img src="<?php echo e(url('/')); ?>/public/frontend/images/event2.jpg" alt="New York" style="width:100%;height: auto;">
                            </div>  

                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <h3>Blood Donation Camp 1</h3>
                                <p class="text-justify">We love the Big Apple!We love the Big Apple! We love the Big Apple!We love the Big Apple!   </p>
                                <span style="margin-top: 30px; float: right;" class="hidden-xs">
                                    <a style="padding: 10px; text-align: center;" href="#" class="btn-danger" ><?php echo date("l jS \of F");?> </a>
                                </span>
                            </div>
                        </div>
                    </div> 

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


<div class="clearfix"></div>
<div id="gallery"> 
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h3 class="life_title ">Blood Fighter</h3>

            </div>

            <div align="center">
                <button class="btn filter-button" id="all" data-filter="all">All</button>
                <?php $__currentLoopData = $data['gallery_category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button class="btn filter-button" data-filter="<?php echo e($row->page_name); ?>"><?php echo e($row->gallery_name); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <br/>


            <?php $__currentLoopData = $data['galleries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-12 filter 
                 <?php echo e($row->page_name); ?>">
                <img src="<?php echo e(url('public/images/gallery')); ?>/<?php echo e($row->photo_name); ?>" class="img-responsive thumbnail" style="width: 300px;height: 200px">
            </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div> 

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_link'); ?> 


<script src="<?php echo e(asset('/')); ?>public/frontend/js/jquery.min.js"></script>
<script src="<?php echo e(asset('/')); ?>public/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/')); ?>public/frontend/js/jquery.flexslider.js"></script>
<script src="<?php echo e(asset('/')); ?>public/frontend/js/jquery.inview.js"></script>  
<script src="<?php echo e(asset('/')); ?>public/frontend/js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/')); ?>public/frontend/js/jquery-3.2.1.min.js"></script>   


<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript_code'); ?>


<script type="text/javascript">
$(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var elmnt = $(this).parent().parent();
        if (!elmnt.hasClass('nav')) {
            var li = $(this).parent();
            var heightParent = parseInt(elmnt.css('height').replace('px', '')) / 2;
            var widthParent = parseInt(elmnt.css('width').replace('px', '')) - 10;
            
            if(!li.hasClass('open')) li.addClass('open')
            else li.removeClass('open');
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
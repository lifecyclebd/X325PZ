<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('pageTitle', 'About Us'); ?>

<?php $__env->startSection('parentName', 'Home'); ?>

<?php $__env->startSection('content'); ?>







<link rel="stylesheet" href="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css')); ?>"> 

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

        background: #c9302c !important;

    }

    .carousel-inner.onebyone-carosel { margin: auto; width: 90%; }

    .onebyone-carosel .active.left { left: -33.33%; }

    .onebyone-carosel .active.right { left: 33.33%; }

    .onebyone-carosel .next { left: 33.33%; }

    .onebyone-carosel .prev { left: -33.33%; }

    .recent_donor{

        width: 335px; 

        height: 152px;

        border: 2px solid #c9302c;

    }

 .what_people_say {

    padding: 5px;

    background: #c9302c;

    color: white; 

    border: 2px solid #c9302c;

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
.signup_button {
    color: #fff !important;
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    background: #8f0002 !important;
    margin-top: 15px; 
    height: 50px;
}
.signup_button:hover {
        color: #fff !important;
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    background: #8f0002 !important;
    margin-top: 15px; 
    height: 50px;
}
</style>



<!-- Half Page Image Background Carousel Header -->

<header id="imgSlider" class="carousel slide" style="height: 409px">

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
 
        <?php $i = 0; if(!empty($data['slider'])){ ?>
        <?php $__currentLoopData = $data['slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="item <?php if ($i == 0) { echo 'active'; } ?>"> 
   
            <!-- Set the first background image using inline CSS below. -->

            <div class="fill" style="background-image:url('<?php echo e($row->pic_path); ?>'); background-size: 100% 100%"></div>

            <div class="carousel-caption">
 

                <h2><?php if (!empty($row->caption)) { echo $row->caption; } ?></h2>

                <h4><?php if (!empty($row->sub_caption)) { echo $row->sub_caption;  } ?></h4>

            </div>

        </div>

<?php $i++; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        <?php } ?> 
    </div>



    <!-- Controls -->

    <a class="left carousel-control" href="#imgSlider" data-slide="prev">

        <span class="icon-prev"></span>

    </a>

    <a class="right carousel-control" href="#imgSlider" data-slide="next">

        <span class="icon-next"></span>

    </a>

    <div class="clearfix"></div>



    <div class="row" style="min-height: 100px; background-color:red; padding: 10px; margin: 0 auto;"> 
        <div class="col-md-8 hidden-xs" style="margin-top: 8px"> 

             <form class="form-horizontak" method="get" action="<?php echo e(url('/')); ?>/search-doctor" style="margin: 10px;">

                <?php echo csrf_field(); ?> 

                <div class="input-group">

                    <span class="input-group-addon" style="padding: 0px 0px; font-size: 25px; width: 60px;"><i class="fa fa-map-marker map_marker"></i></span>



                    <input type="text" style="height: 45px;    background: white;    font-size: 20px;" class="form-control" aria-label="Search Donor" placeholder="Search Donor Location" name="searchany">

                     

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

    <div class="container-fluid" style="background-color: gray;height: auto"> 

        <h3 class="life_title " style="margin-bottom:50px;color: white"> রক্তদানের কিছু প্রয়োজনীয় কথা </h3> 



        <?php $__currentLoopData = $data['all_blood_info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

        <div class="col-md-3 col-sm-6 col-xs-12" style="border-radius: 8px; margin-bottom: 30px">

            <div class="info_abou_blood " style="min-height:350px; color: black">

                 

                <p class="title" style="font-size: 20px"><strong><?php echo e($row->title); ?></strong></p>

                <p class="text-justify" style="padding:10px">

                    <?php echo substr($row->description,0,600); ?>


                </p>

            </div>

                <div class="text-center more_blood_bottom">

                    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($row->id); ?>"><button class="btn_read_more" style="    margin-top: 30px;">আরো জানতে</button></a>

               

                </div> 

        </d iv>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 

        </div> 
    </div>

    <div class="container-fluid" style="padding: 20px; background-color: #4d4f54;  ">

    <a style="color: red; padding: 10px" class="pull-right btn btn-serach" href="<?php echo e(url('/')); ?>/seeMoreBloodInfo">একই রকম পোস্ট </a>

    </div>


<div class="get_well_soon">        

    <div class="container-fluid"> 

        <h3 class="life_title " style="margin-bottom:30px">আমাদের সেবাসমূহ </h3> 

        <div class="col-md-3">

            <div class="get_well_soon_sec">

                <br>

                <span class="back_icon5 pull-center" style="margin-top: 100px">  </span>

                <p class="text-white">ডাক্তার</p>

                <div class="get_well_soon_div">

                    

আমরা ২৪ ঘন্টাই প্রস্তুত আছি আপনাদের কথা শুনতে, সরাসরি এবং মোবাইলে। এছাড়াও আমরা জানিয়ে দিচ্ছি বাংলাদেশের সকল বিশেষজ্ঞ ডাক্তাররা কে, কোথায় , কখন বসছে এবং তাদের ফি সর্ম্পকে ।



                    <div class="text-center">

                        <a href="<?php echo e(url('/write-to-doctor')); ?>"><button class="btn_read_more2">আরো জানতে</button></a>

                    </div>

                </div>



            </div> 

        </div>

        <div class="col-md-3">

            <div class="get_well_soon_sec">

                <br>

                <span class="back_icon6 pull-center" style="height: 200px">  </span>

                <p class="text-white">হাসপাতাল </p>

                <div class="get_well_soon_div">

দরিদ্রের জন্য অল্প ব্যয়ে উন্নত চিকিৎসা সেবা ও সকলের জন্য হাসপাতাল সম্পর্কিত জরুরী তথ্য যেমন জরুরী নম্বর, ডাক্তার গণের তালিকা, কি ধরনের চিকিৎসা করে ইত্যাদি সর্ম্পকে জানানো ।

                    <div class="text-center">

                        <a href="<?php echo e(url('/view-hospital')); ?>"><button class="btn_read_more2">আরো জানতে</button></a>

                    </div>

                </div>



            </div> 

        </div>

        <div class="col-md-3">

            <div class="get_well_soon_sec">

                <br>

                <span class="back_icon7 pull-center" style="height: 200px">  </span>

                <p class="text-white">এ্যাম্বুলেন্স </p>

                <div class="get_well_soon_div">

                    যখন ও যেখানেই লাগবে জরুরী সেবায় ২৪ ঘন্টাই থাকবে আমাদের এ্যাম্বুলেন্স। এছাড়া ও বাংলাদেশের সকল হাসপাতালের এ্যাম্বুলেন্স নাম্বার, তাদের ফি সর্ম্পকিত যাবতীয় তথ্য পাওয়া যাবে এখানেই।

                    <div class="text-center">

                        <a href="<?php echo e(url('/view-ambulance')); ?>"><button class="btn_read_more2">আরো জানতে</button></a>

                    </div>

                </div>



            </div> 

        </div>

        <div class="col-md-3">

            <div class="get_well_soon_sec">

                <br>

                <span class="back_icon8 pull-center" style="height: 200px">  </span>

                <p class="text-white">স্বাস্থ্য সংবাদ</p>

                <div class="get_well_soon_div">

                    স্বাস্থ্য সর্ম্পকিত সকল সংবাদ এক ক্লিকেই আপনার হাতে। বাংলাদেশ সহ বিশ্বের সকল ধরনের প্রয়োজনীয় ও গুরুত্বপূর্ণ স্বাস্থ্য সংবাদগুলো আপনাদের প্রয়োজনে এখন লাইফ সাইকেলের  হাতের মুঠোয়।

                    <div class="text-center">

                        <a href="<?php echo e(url('/news')); ?>"><button class="btn_read_more2">আরো জানতে</button></a>

                    </div>

                </div>



            </div> 

        </div>

    </div> 

</div>        







<div class="" style="width: 100%;">

    <div class="col-md-6 become_donor" style="min-height: 350px;">

        <div class="col-md-offset-2 col-md-8">

            <h2> স্বেচ্ছাসেবক হন </h2>

            <p class="text-justify ">

            যারা জরুরী সময়ে মুমুর্ষ রোগির জন্য রক্তদাতা ম্যানেজ করে থাকেন, তাদেরকে সাধারণত আমরা আমাদের ভাষায় রক্তযোদ্ধা, রক্ত সৈনিক অথবা স্বেচ্ছাসেবক বলে থাকি। আমাদের স্বেচ্ছাসেবক হওয়া কঠিন নয়। আপনার ইচ্ছাই যথেষ্ট। স্বেচ্ছাসেবক হতে নিচের বাটনে ক্লিক করুন।

            </p>

            <div class="pull-center"> 

                <button class="join_now hidden-xs"   data-toggle="modal" data-target="#joinVolentier">যোগদান করুন </button>



            </div>



        </div>               

    </div>

    <div class="col-md-6 make_donation" style="min-height: 350px;">

        <div class="col-md-offset-2 col-md-8">

            <h2>দাতা হন  </h2>

            <p class="text-justify" style="color:white;">

            আমাদের সঙ্গে সামাজিক কাজে অংশগ্রহণ করতে আপনার হাত বাড়িয়ে দিতে পারেন। আমরা আপনার দানের ব্যপারে সর্বোচ্চ গোপনীয়তা বজায় রাখবো এবং সঠিক কাজে সঠিক জায়গায় কার্যকরে সচেষ্ট হবো। 

            </p>

            <div class="pull-center">



                <button class="donate_now hidden-xs" data-target="#makeDonation" data-toggle="modal"> দাতা হন </button>



            </div>    

        </div>



    </div>

</div>   

<div class="clearfix"></div>  

<div class="container-fluid">

    <div class="row" style="margin-bottom: 20px;">

        <div class="span12">

            <div class=" ">
                <h2 class="life_title" style="margin-bottom: 20px;">আসন্ন কর্মসূচী</h2>

                <div id="myCarousel" class="carousel fdi-Carousel slide">

                    <!-- Carousel items -->

                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">

                        <div class="carousel-inner onebyone-carosel">

                            <?php $i=0;?>   

                            <?php $__currentLoopData = $data['upcoming_event']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="item <?php if($i==0)echo 'active';?>">

                                <div class="col-md-4">

                                    <div style="background: #eee; padding: 5px; margin: 5px; max-height: 300px;min-height: 420px;">

                                        <span style="float: left; width: 100%">

                                            <img class="img img-responsive img-thumbnail" src="<?php echo e($row->pic_path); ?>" alt="testimonial" style="width:100%;height:200px;">

                                        </span>

                                        <span style="float: right; width: 100%; padding: 10px;"> 

                                            <span style="float: left; width: 30%; background: gray; color: white; text-align: center">

                                            <h4><?php echo e($row->created_at); ?></h4>

                                            </span>

                                            <span style="float: right; width: 70%">                                      

                                            <h4 style="color: #c9302c; font-size: 20px; padding-left: 10px;"><?php echo e($row->title); ?>  </h4>

                                            <p style="padding-left: 10px; border-top: 1px solid #c9302c;"> ঢাকা, বাংলাদেশ </p>   

                                            </span>                                              

                                            <span style="width: 100%; padding: 10px; float: left; margin-bottom: 10px">

                                            <p style="text-align:justify; margin-top: 10px;"><?php echo $row->description; ?></p>



                                            <a href="<?php echo e(url('/upcoming-event')); ?>/<?php echo e($row->id); ?>" class="btn-serach pull-right" style="color: #c9302c"> বিস্তারিত জানতে </a>

                                            </span> 

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







<div style="background: #eee">



<div class="container-fluid">

    <div class="row" style="margin-bottom: 20px;">

        <div class="span12">

            <div class=" ">

                <h2 class="life_title" style="margin-bottom: 20px;">রক্তদানে দাতাদের গল্প </h2>

                <div id="myCarousel" class="carousel fdi-Carousel slide">

                    <!-- Carousel items -->

                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">

                        <div class="carousel-inner onebyone-carosel">

                            <?php $i=0;?>

                            <?php $__currentLoopData = $data['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="item <?php if($i==0)echo 'active';?>">

                                <div class="col-md-4" style="">

                                    <div class="what_people_say" style="height: 450px;padding: 25px"> 

                                        <span style="padding-left: 10px;">

                                            <div class="text-left">

                                            <div class="row" style="margin-top: -40px">
                                            <div class="col-md-8">
                                                <h4><?php echo e($row->name); ?> </h4><p><?php echo e($row->designation); ?></p></h4>
                                                <span style="font-size: 16px"> 
                                                <a href="<?php echo e($row->fb_url); ?>"> <i class="fa fa-facebook-official"></i></a>
                                                <a href="<?php echo e($row->linked_url); ?>"> <i class="fa fa-linkedin-square"></i></a>
                                                <a href="<?php echo e($row->twitter_url); ?>"> <i class="fa fa-twitter-square"></i></a>
                                                <a href="<?php echo e($row->web_url); ?>"> <i class="fa fa-chrome" aria-hidden="true"></i>
</a>
                                                 </span>
                                                <p><?php echo e($row->title); ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <img class="img img-responsive img-thumbnail pull-right " src="<?php echo e($row->pic_path); ?>" alt="testimonial" style="width:100%; height: 100px;margin-top:0px">
                                            </div>
                                            </div>

                                                

                                                <hr>

                                                <div class="row">

                                                    <div style="text-align: justify; min-height: 220px;   background: white !important;color: black;padding: 10px;border-radius: 8px;">

                                                    <?php echo $row->description; ?>

                                                    </div>

                                                </div>

                                                 

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



</div>





















<div class="clearfix"></div>

<div id="gallery"> 

    <div class="container-fluid">

        <div class="row">

            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <h3 class="life_title " style="margin-bottom: 30px">রক্ত যোদ্ধা</h3>



            </div>





            <br/>





        <div class="popup-gallery">

            <?php $__currentLoopData = $data['blood_fighter']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <a href="<?php echo e($row->pic_path); ?>" title="The Cleaner" class="col-md-3" >

            <img src="<?php echo e($row->pic_path); ?>"  class="img-responsive thumbnail" style="width: 300px;height: 200px;border: 5px solid #c9302c; float: left;">

        </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

           

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
    .blood_bag {
    margin: 10px;     
    background: rgba(51, 51, 51, 0.64);
    padding: 15px;
    border-top-right-radius: 25px;
    border-bottom-left-radius: 25px;
    color: white    
} 
</style>

<div class="blood_stock" style="  margin-top: 30px">

    <div class="container-fluid">

        <div class="row text-center"> 
            <h2 class="life_title" style="margin-bottom: 20px; margin-top: 30px"> দাতা সংখ্যা </h2>
            <p class="text-center">Current blood stock in bangladesh</p>
             <div class="col-md-3">
                <div class="blood_bag">
                     <img src="<?php echo e(url('/')); ?>/public/images/bag/1.png" class="img img-responsive margin">
                     <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['a_positive']); ?></span><br>
                     <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_a_positive']); ?></span>
                 </div>
             </div>
             <div class="col-md-3">
                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/2.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['b_positive']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_b_positive']); ?></span>
             </div>
             </div>
             <div class="col-md-3">
                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/3.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['o_positive']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_o_positive']); ?></span>
                 </div>
             </div>
             <div class="col-md-3" >
                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/4.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['ab_positive']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_ab_positive']); ?></span>
                 </div>
             </div>
             <div class="col-md-3">

                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/5.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['a_negative']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_a_negative']); ?></span>
                 </div>
             </div>
             <div class="col-md-3">
                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/6.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['b_negative']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_b_negative']); ?></span>
             </div></div>


             <div class="col-md-3">

                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/7.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['o_negative']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_o_negative']); ?></span>
                 </div>
             </div>
             <div class="col-md-3">

                <div class="blood_bag">
                 <img src="<?php echo e(url('/')); ?>/public/images/bag/8.png" class="img img-responsive margin">
                 <span style="font-size: 16px; padding: 10px">সক্রিয় ডোনারঃ  <?php echo e($data['ab_negative']); ?></span><br>
                 <span style="font-size: 16px; padding: 10px">সর্বমোট ডোনারঃ  <?php echo e($data['t_ab_negative']); ?></span>
                 </div> 
            


        </div>

    </div>

</div>



<div class="container-fluid">

    <div class="row" style="margin-bottom: 20px;">

        <div class="span12">

            <div class=" ">

                <h2 class="life_title" style="margin-bottom: 20px;">সাম্প্রতিক দাতা</h2>

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

                                            <a href="#"><img src="<?php echo e($row->pic_path); ?>" class="img-responsive center-block img-thumbnail"></a>

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



<div class="video" style="    background: #313131;color: white; min-height: auto;font-size: 16px;text-align: center;">

	<div class="container-fluid">

		<div class="col-md-4"> 

			<div style="padding:15px;" style=" margin:0 auto;">

					<img src="<?php echo e(url('/')); ?>/public/images/videogallery.png" style="width:300px; height:200px; margin:0 auto" class="img img-responsive"> 

					<p style="margin:5px;">ভিডিও গ্যালারি </p>

 </div>

		</div>

		<div class="col-md-4">

	       <?php $info = get_footer(); ?>

			<div style="padding:15px;" style=" margin:0 auto;" class="text-left">
				<div class="col-md-12 text-center" style="font-size: 22px;margin-bottom: 35px">আমরা ২৪ ঘন্টায় আপনাদের সাথে, আপনাদের পাশে, আপনাদের কাজে নিয়োজিত ।। </div>
                <div class="col-md-6 pull-right">হটলাইন- </div><div class="col-md-6"><?php echo e($info->hot_line_phone); ?></div>
                <div class="col-md-6 pull-right">ডাক্তার- </div><div class="col-md-6"><?php echo e($info->doctor_phone); ?></div>
                <div class="col-md-6 pull-right">এ্যাম্বুলেন্স- </div><div class="col-md-6"><?php echo e($info->ambulance_phone); ?></div>
                <div class="col-md-6 pull-right">রক্তের জন্য- </div><div class="col-md-6"><?php echo e($info->blood_phone); ?></div>
                
			</div>

			 

		</div>

		<div class="col-md-4">

			<a href="<?php echo e(url('/')); ?>/donor-register"><img style="width:200px; height:200px;margin:0 auto" src="<?php echo e(url('/')); ?>/public/images/be-a-donor.jpg" class="img img-responsive"></a>

			 রক্তদাতা হন  

			

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



<script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js')); ?>"></script>



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





            $(document).ready(function() {

    $('.popup-gallery').magnificPopup({

        delegate: 'a',

        type: 'image',

        tLoading: 'Loading image #%curr%...',

        mainClass: 'mfp-img-mobile',

        gallery: {

            enabled: true,

            navigateByImgClick: true,

            preload: [0,1] // Will preload 0 - before current, and 1 after the current image

        },

        image: {

            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

            titleSrc: function(item) {

                return item.el.attr('title') + '<small>by lifecycle</small>';

            }

        }

    });

});





</script>  







<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
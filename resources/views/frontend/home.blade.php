@extends('layouts/front')
@section('title', 'Page Title')
@section('pageTitle', 'About Us')
@section('parentName', 'Home')
@section('content')
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css') }}"> 
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
        <?php $i = 0; ?>
        @foreach($data['slider'] as $row)

        <div class="item <?php if ($i == 0) {
            echo 'active';
        } ?>"> 
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('{{asset('/')}}public/images/gallery/{{$row->photo_name}}');"></div>
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
        @endforeach 
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
            <!--<form class="form-horizontak" method="get" action="" style="margin: 10px;">
                {!! csrf_field() !!}-->
                <div class="input-group">
                    <span class="input-group-addon" style="padding: 0px 30px; font-size: 25px;"><i class="fa fa-map-marker map_marker"></i></span>

                    <input type="text" style="height: 45px;    background: white;    font-size: 20px;" class="form-control" aria-label="Search Donor" placeholder="Search Donor Location" name="searchany">
                    <div id="map" style="overflow: hidden;"></div>
                    <span class="input-group-addon" style="padding: 0px 0px; font-size: 25px;">

                        <button class="btn  btn-serach search_button" > SEARCH </i> </button>
                    </span>
                </div>
            <!--</form>-->
        </div>
        <div class="col-md-4">
            <a href="{{url('/donor-register')}}"><button class="btn  btn-serach signup_button" > SIGN UP </i> </button></a>
        </div>
    </div>


</header>

<div class="More_about_info">
    <div class="container-fluid" style="background-color: gray;height: 580px"> 
        <h3 class="life_title " style="margin-bottom:50px;color: white"> রক্তদান - কিছু প্রয়োজনীয় কথা </h3> 

        @foreach($data['all_blood_info'] as $row) 
        <div class="col-md-3 col-sm-6 col-xs-12" style="border-radius: 8px">
            <div class="info_abou_blood " style="min-height:350px">
                 
                <p class="title">{{$row->title}}</p>
                <p class="text-justify" style="padding:10px">
                    {!!substr($row->description,0,600)!!}
                </p>
            </div>
                <div class="text-center more_blood_bottom">
                    <a href="{{url('/read-more')}}/detail/{{$row->id}}"><button class="btn_read_more">আরো জানতে</button></a>
               
                </div> 
        </div>
        @endforeach
        <br> 
    </div> 
    <div class="container-fluid" style="padding: 20px; background-color: #4d4f54">
    <a style="color: red; padding: 10px" class="pull-right btn btn-serach" href="{{url('/')}}/seeMoreBloodInfo">একই রকম পোস্ট </a></div>




    


<div class="get_well_soon">        
    <div class="container-fluid"> 
        <h3 class="life_title " style="margin-bottom:30px">Get Well Soon</h3> 
        <div class="col-md-3">
            <div class="get_well_soon_sec">
                <br>
                <span class="back_icon5 pull-center" style="margin-top: 100px">  </span>
                <p class="text-white">ডাক্তার</p>
                <div class="get_well_soon_div">
                    
আমরা ২৪ ঘন্টাই প্রস্তুত আছি আপনাদের কথা শুনতে, সরাসরি এবং মোবাইলে। এছাড়াও আমরা জানিয়ে দিচ্ছি বাংলাদেশের সকল বিশেষজ্ঞ ডাক্তাররা কে, কোথায় , কখন বসছে এবং তাদের ফি সর্ম্পকে ।

                    <div class="text-center">
                        <a href="{{url('/write-to-doctor')}}"><button class="btn_read_more2">আরো জানতে</button></a>
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
                        <a href="{{url('/view-hospital')}}"><button class="btn_read_more2">আরো জানতে</button></a>
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
                        <a href="{{ url('/view-ambulance') }}"><button class="btn_read_more2">আরো জানতে</button></a>
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
                        <a href="{{url('/news')}}"><button class="btn_read_more2">আরো জানতে</button></a>
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
<div class="container-fluid">
    <div class="row" style="margin-bottom: 20px;">
        <div class="span12">
            <div class=" ">
                <h2 class="life_title" style="margin-bottom: 20px;">Upcoming Events</h2>
                <div id="myCarousel" class="carousel fdi-Carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel">
                            <?php $i=0;?>
                            @foreach($data['upcoming_event'] as $row)
                            <div class="item <?php if($i==0)echo 'active';?>">
                                <div class="col-md-4">
                                    <div style="background: #eee; padding: 5px; margin: 5px; max-height: 300px;min-height: 420px;">
                                        <span style="float: left; width: 100%">
                                            <img class="img img-responsive img-thumbnail" src="{{$row->pic_path}}" alt="testimonial" style="width:100%;height:200px;">
                                        </span>
                                        <span style="float: right; width: 100%; padding: 10px;"> 
                                            <span style="float: left; width: 30%; background: gray; color: white; text-align: center">
                                            <h4>{{$row->created_at}}</h4>
                                            </span>
                                            <span style="float: right; width: 70%">                                      
                                            <h4 style="color: #c9302c; font-size: 20px; padding-left: 10px;">{{$row->title}} <?php echo $i;?></h4>
                                            <p style="padding-left: 10px; border-top: 1px solid #c9302c;">Static Location</p>   
                                            </span>                                              
                                            <span style="width: 100%; padding: 10px; float: left; margin-bottom: 10px">
                                            <p style="text-align:justify; margin-top: 10px;">{{substr($row->description,0,100)}}</p>

                                            <a href="{{url('/upcoming-event')}}/{{$row->id}}" class="btn-serach pull-right" style="color: #c9302c"> বিস্তারিত জানতে </a>
                                            </span> 
                                        </span>

                                    </div>                                
                                </div>
                            </div>
                            <?php $i++;?>
                            @endforeach
                            


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
                <h2 class="life_title" style="margin-bottom: 20px;">What People Say</h2>
                <div id="myCarousel" class="carousel fdi-Carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel">
                            <?php $i=0;?>
                            @foreach($data['testimonial'] as $row)
                            <div class="item <?php if($i==0)echo 'active';?>">
                                <div class="col-md-4" style="">
                                    <div class="what_people_say" style="height: 400px;padding: 25px"> 
                                        <span style="padding-left: 10px;">
                                            <div class="text-left">
                                            <div class="row" style="margin-top: -40px">
                                                <h4>{{ $row->name}}</h4><small>{{ $row->designation}}</small>
                                                <b>{{$row->institution}}</b>
                                                <img class="img img-responsive img-circle pull-right " src="{{url('/')}}/public/images/testimonial/{{$row->photo}}" alt="testimonial" style="width:130px;height:110px;margin-top: -50px">
                                            </div>
                                                
                                                <hr>
                                                <div class="row">
                                                    <p style="text-align: justify; min-height: 220px;   background: white !important;color: black;padding: 10px;border-radius: 8px;">
                                                    {{ $row->message}}</p>
                                                </div>
                                                 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;?>
                            @endforeach
                            


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
                <h3 class="life_title " style="margin-bottom: 30px">Blood Fighter</h3>

            </div>


            <br/>


        <div class="popup-gallery">
            @foreach($data['blood_fighter'] as $row)
        <a href="{{url('public/images/gallery')}}/{{$row->photo_name}}" title="The Cleaner" class="col-md-3" >
            <img src="{{url('public/images/gallery')}}/{{$row->photo_name}}"  class="img-responsive thumbnail" style="width: 300px;height: 200px;border: 5px solid #c9302c; float: left;">
        </a>
            @endforeach
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
</style>
<div class="blood_stock" style="  margin-top: 30px">
    <div class="container-fluid">
        <div class="row text-center">
            <h2 class="life_title" style="margin-bottom: 20px; margin-top: 30px">blood stock</h2>
            <p class="text-center">Current blood stock in bangladesh</p>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/1.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">45%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/2.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">50%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/3.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">36%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/4.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">62%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/5.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">78%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/6.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">25%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/7.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">49%</span>
             </div>
             <div class="col-md-3" style="margin-top:5px; border: 1px">
                 <img src="{{url('/')}}/public/images/bag/8.png" class="img img-responsive margin">
                 <span style="font-size: 22px; color: #c9302c; text-align: center;padding: 10px">36%</span>
             </div>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row" style="margin-bottom: 20px;">
        <div class="span12">
            <div class=" ">
                <h2 class="life_title" style="margin-bottom: 20px;">Recent Donor</h2>
                <div id="myCarousel" class="carousel fdi-Carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                        <div class="carousel-inner onebyone-carosel">
                            <?php $i=0;?>
                            @foreach($data['recent_donor'] as $row)
                            <div class="item <?php if($i==0)echo 'active';?>">
                                <div class="col-md-4" style="">
                                    <div class="recent_donor">
                                        <span style="width: 40%; float: left;">
                                            <a href="#"><img src="{{url('/')}}/public/images/content/donor/{{$row->profile_photo}}" class="img-responsive center-block img-thumbnail"></a>
                                        </span>
                                        <span style="float: right; width: 60%; padding-left: 10px;">
                                            <div class="text-left">
                                                <h4>{{$row->fname.' '. $row->lname}}</h4>
                                                <p>{{$row->blood_group}}</p><small>{{$row->last_donation}}</small> 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;?>
                            @endforeach
                            


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

<div class="video" style="background: black; color: white">
<div class="container">
    <div class="col-md-6">
        <h2 class="">Video</h2>
        <iframe width="333" height="220" src="https://www.youtube.com/embed/NqqPEwVP8Mo" frameborder="0" allowfullscreen></iframe>

        
    </div>
    <div class="col-md-3">
    <style type="text/css">
 i.icon_custom{ 
            font-size: 20px;
    padding: 5px;
    margin: 5px;
        }
    </style>
        <h2 class="">Social Media</h2>
        <span><i class="fa fa-facebook-official icon_custom"></i></span>
        <span><i class="fa fa-google-plus-square icon_custom"></i></span>
        <span><i class="fa fa-youtube-square icon_custom"></i></span>
        <span><i class="fa fa-twitter-square icon_custom"></i></span>
        <span><i class="fa fa-linkedin-square icon_custom"></i></span>
    </div>
    <div class="col-md-3">
        <h2 class="">Be Donor</h2>
        <a href="{{url('/')}}/"><img style="width: 100%" src="{{url('/')}}/public/images/be-a-donor.jpg" class="img img-responsive"></a>
        
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
@endsection

@section('script_link') 

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js')}}"></script>

@endsection

@section('javascript_code')


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
    @foreach($data['gallery_category'] as $row)
            if (value == "{{$row->page_name}}") {
    $('.filter').addClass('hidden');
            $('.{{$row->page_name}}').removeClass('hidden');
            $(".{{$row->page_name}}").removeClass("active");
            //  $('.filter-button').addClass('active');
            $('.filter').show();
    }
    @endforeach

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



@endsection


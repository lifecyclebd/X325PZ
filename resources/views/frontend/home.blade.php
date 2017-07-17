@extends('layouts/front')
@section('title', 'Page Title')
@section('pageTitle', 'About Us')
@section('parentName', 'Home')
@section('content')

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
        <?php $i=0; ?>
        @foreach($data['slider'] as $row)
        
        <div class="item <?php if($i==0){echo 'active';}?>"> 
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('{{asset('/')}}public/images/gallery/{{$row->photo_name}}');"></div>
            <div class="carousel-caption">
            
                <h2><?php if (!empty($row->caption)) { echo $row->caption;} ?></h2>
                <h4><?php if (!empty($row->sub_caption)) { echo $row->sub_caption;} ?></h4>
            </div>
        </div>
        <?php $i++;  ?>
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
            <form class="form-horizontak" method="" action="" style="margin: 10px;">
                <div class="input-group">
                    <span class="input-group-addon" style="padding: 0px 30px; font-size: 25px;"><i class="fa fa-map-marker map_marker"></i></span>
                    
                    <input type="text" style="height: 45px;    background: white;    font-size: 20px;" class="form-control" aria-label="Search Donor" placeholder="Search Donor Location" id="pac-input">
                       <div id="map" style="overflow: hidden;"></div>
                    <span class="input-group-addon" style="padding: 0px 0px; font-size: 25px;">

                        <button class="btn  btn-serach search_button" > SEARCH </i> </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-4">
             <button class="btn  btn-serach signup_button" > SIGN UP </i> </button>
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
                <?php //dd($data['donor_24']); ?>
                <p class="title">{{$data['donor_24']->title}}</p>
                <p class="text-justify" style="padding:30px">
                    {{$data['donor_24']->short_description}}
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon2 pull-center" style="height: 200px">  </span>
                <p class="title">{{$data['platelet']->title}}</p>
                <p class="text-justify" style="padding:30px">
                    {{$data['platelet']->short_description}}
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon3 pull-center" style="height: 200px">  </span>
                <p class="title">{{$data['type']->title}}</p>
                <p class="text-justify" style="padding:30px">
                    {{$data['type']->short_description}}
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info_abou_blood slideInDown" style="min-height:350px">
                <span class="back_icon4 pull-center" style="height: 200px">  </span>
                <p class="title">{{$data['journey']->title}}</p>
                <p class="text-justify" style="padding:30px">
                    {{$data['journey']->short_description}}
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
        <h3 class="life_title " style="margin-bottom:30px">Get Well Soon</h3> 
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
            <form method="post" action="{{url('/')}}/join-volenter">
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
            <form method="post" action="{{url('/')}}/join-volenter">
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
                                <img class="img img-responsive img-thumbnail " src="{{url('/')}}/public/frontend/images/event.jpg" alt="New York" style="width:100%;height: auto;">
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
                                <img src="{{url('/')}}/public/frontend/images/event2.jpg" alt="New York" style="width:100%;height: auto;">
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
              <h3 class="life_title " style="margin-bottom: 30px">Blood Fighter</h3>

            </div>

           
            <br/>


            @foreach($data['blood_fighter'] as $row)

            <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 filter 
                 {{$row->page_name}}">
                <img src="{{url('public/images/gallery')}}/{{$row->photo_name}}" class="img-responsive thumbnail" style="width: 300px;height: 200px;border: 5px solid red;">
            </div>


            @endforeach
        </div>
    </div> 

</div>
<div class="blood_stock" style="  margin: 30px 0px">
    <div class="container">
        <div class="row">
            <h2 class="life_title" style="margin-bottom: 20px; margin-top: 30px">blood stock</h2>
                <p class="text-center">Current blood stock in bangladesh</p>
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40% Complete (success)
                  </div><div class="pull-right  progress-bar-success progress-bar-striped" style="width:25px"> A+ </div>
                </div>

                <div class="progress">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                    50% Complete (info)
                  </div><div class="pull-right  progress-bar-info progress-bar-striped" style="width:25px"> B+ </div>
                </div>

                <div class="progress">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                    60% Complete (warning)
                  </div><div class="pull-right  progress-bar-warning progress-bar-striped" style="width:25px"> AB+ </div>
                </div>

                <div class="progress">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    70% Complete (danger)
                  </div><div class="pull-right  progress-bar-danger progress-bar-striped" style="width:25px"> A- </div>
                </div>

                <div class="progress">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    70% Complete (danger)
                  </div><div class="pull-right  progress-bar-warning progress-bar-striped" style="width:25px"> AB- </div>
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
                                <div class="item active">
                                    <div class="col-md-4" style="">
                                        <div class="recent_donor">
                                            <span style="width: 40%; float: left;">
                                            <a href="#"><img src="{{url('/')}}/public/images/jaman.jpg" class="img-responsive center-block img-thumbnail"></a>
                                            </span>
                                            <span style="float: right; width: 60%; padding-left: 10px;">
                                            <div class="text-left">
                                                <h4>Abdul Al-Amin</h4>
                                                <p>CEO</p><small>A+ blood Donor</small> 
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="item ">
                                    <div class="col-md-4">
                                        <div class="recent_donor">
                                            <span style="width: 40%; float: left;">
                                            <a href="#"><img src="{{url('/')}}/public/images/jaman.jpg" class="img-responsive center-block img-thumbnail"></a>
                                            </span>
                                            <span style="float: right; width: 60%;padding-left: 10px; ">
                                            <div class="text-left">
                                                <h4>Abdul Al-Amin</h4>
                                                <p>CEO</p><small>A+ blood Donor</small> 
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div> 

                                <div class="item ">
                                    <div class="col-md-4">
                                        <div class="recent_donor">
                                            <span style="width: 40%; float: left;">
                                            <a href="#"><img src="{{url('/')}}/public/images/jaman.jpg" class="img-responsive center-block img-thumbnail"></a>
                                            </span>
                                            <span style="float: right; width: 60%;padding-left: 10px; ">
                                            <div class="text-left">
                                                <h4>Abdul Al-Amin</h4>
                                                <p>CEO</p><small>A+ blood Donor</small> 
                                            </div>
                                            </span>
                                        </div>
                                    </div>
                                </div> 


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




@endsection

@section('script_link') 



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
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});



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
</script>  



@endsection


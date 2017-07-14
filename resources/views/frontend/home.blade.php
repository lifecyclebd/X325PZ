@extends('layouts/front')
@section('title', 'Page Title')
@section('pageTitle', 'About Us')
@section('parentName', 'Home')
@section('content')

<link rel="stylesheet" href="{{ asset("public/frontend/css/half-slider.css") }}">

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
            <div class="item active"> 
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('{{asset('/')}}public/images/slider/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('{{asset('/')}}public/images/slider/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('{{asset('/')}}public/images/slider/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('{{asset('/')}}public/images/slider/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('{{asset('/')}}public/images/slider/1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#imgSlider" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#imgSlider" data-slide="next">
            <span class="icon-next"></span>
        </a>
        <div class="clearfix"></div>

<div class="row" style="min-height: 100px; background-color: red; padding: 10px; margin: 0 auto;">
<div class="col-md-offset-2 col-md-8">
    <form class="form-horizontak" method="" action="" style="margin: 10px;">
         <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
  <input type="text" style="height: 60px;    background: white;    font-size: 20px;" class="form-control" aria-label="Search Donor" placeholder="Search Donor Location">
  <span class="input-group-addon">
<button class="btn  btn-serach" style="  height: 40px;  background-color: #ff0000;"> <i class="fa fa-search"></i> </button>
  </span>
</div>
    </form>
</div>
        <div class="clearfix" style="margin-top: 30px;"></div>
    </header>

<div class="More_about_info" style="margin-top:30px;">
    <div class="container"> 
        <p class="text-center" style="font-size: 20px">More about info</p>
        <hr>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon1 pull-center" style="height: 200px">  </span>
                <p class="title">Blood Donor 24</p>
                <p class="text-justify">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon2 pull-center" style="height: 200px">  </span>
                <p class="title">Blood Donor 24</p>
                <p class="text-justify">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon3 pull-center" style="height: 200px">  </span>
                <p class="title">Blood Donor 24</p>
                <p class="text-justify">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Read More</button>
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="info_abou_blood slideInDown">
                <span class="back_icon4 pull-center" style="height: 200px">  </span>
                <p class="title">Blood Donor 24</p>
                <p class="text-justify">
                    A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
                </p>
                <div class="text-center">
                    <button class="btn_read_more">Find out more</button>
                </div>
            </div> 
        </div>

    </div> 
</div>

<hr style="height: 5px; background: #eee; margin: 20px;"> 

<div class="get_well_soon">        
    <div class="container"> 
        <p class="text-center" style="font-size: 20px">Get Well Soon</p>
        <hr>
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
                <button class="join_now">Join Now</button>
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
                <button class="donate_now">Donate Now</button>
            </div>    
        </div>

    </div>
</div>   
<div class="clearfix"></div>     

<div class="upcomming_event">
    <div class="container">
        <h3 class="text-center gallery-title">Upcoming Events</h3>

        <div class="container">
            <h2>Carousel Example</h2>
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
                        <div class="col-md-6">
                            <img src="{{url('/')}}/public/frontend/images/about/about1.jpg" alt="New York" style="width:100%;height: 340px;">
                        </div>
                        <div class="col-md-6">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-6">
                            <img src="{{url('/')}}/public/frontend/images/about/about1.jpg" alt="New York" style="width:100%;height: 340px;">
                        </div>
                        <div class="col-md-6">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-6">
                            <img src="{{url('/')}}/public/frontend/images/about/about1.jpg" alt="New York" style="width:100%;height: 340px;">
                        </div>
                        <div class="col-md-6">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>

                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
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
                <h1 class="gallery-title">Blood Fighter</h1>

            </div>

            <div align="center">
                <button class="btn filter-button" id="all" data-filter="all">All</button>
                @foreach($data['gallery_category'] as $row)
                <button class="btn filter-button" data-filter="{{$row->page_name}}">{{$row->gallery_name}}</button>
                @endforeach
            </div>
            <br/>


            @foreach($data['galleries'] as $row)
            
            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter 
                 {{$row->page_name}}">
                <img src="{{url('public/images/gallery')}}/{{$row->photo_name}}" class="img-responsive thumbnail" style="width: 300px;height: 200px">
            </div>

            
            @endforeach
        </div>
    </div> 

</div>

@endsection

@section('script_link')
<!-- jQuery -->
<script src="{{ asset('/')}}/public/frontend/js/jquery.min.js"></script>
<script src="{{ asset('/')}}/public/frontend/js/bootstrap.min.js}}"></script>
<script src="{{ asset('/')}}/public/frontend/js/jquery.flexslider.js}}"></script>
<script src="{{ asset('/')}}/public/frontend/js/jquery.inview.js}}"></script> 
<script src="{{ asset('/')}}/public/frontend/js/script.js}}"></script>
<script src="{{ asset('/')}}/public/frontend/contactform/contactform.js}}"></script>
<script src="{{ asset('/')}}/public/frontend/js/jquery-3.2.1.min.js}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="{{ asset('/')}}/public/frontend/js/jquery-3.2.1.min.js }}"></script> 
<script src="{{ asset('/')}}/public/jquery.js}}"></script>  



@endsection

@section('javascript_code')


<script type="text/javascript">
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

</script>
    <script>
    $('.carousel').carousel({
        interval: 5000  
    })
    </script>

@endsection


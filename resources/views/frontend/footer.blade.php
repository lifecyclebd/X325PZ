<!--service-->
<div id="service">
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5978eff85dfc8255d623f1a8/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->

    <!--service gapping-->
    <div class="service-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8"> 
                    <p class="text-center find_out_where">বিশেষজ্ঞ ডাক্তারের পরামর্শ পেতে আপনার নিকটবর্তী ডাক্তার খুজুন </p> 
                    <form class="form-horizontal" method="post" action="{{url('/')}}/search-doctor"> 
                        <div class="input-group">
                            <input type="text" class="form-control search_place"  name="search" style="height: 40px">
                            <div class="input-group-btn">
                                <button class="btn btn-search " type="submit">খুজুন</button>
                            </div>
                        </div>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<div id="footer">
    <div class="container">
        <div class="row">
            <h3 class="footer_title">যোগাযোগ</h3>
            <?php $info = get_footer(); ?>

            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>হেড অফিস </span></h3>
                <p style="font-size: 16px; ">লাইফ সাইকেল বিডি </p>
                    <p  > স্থানঃ  {{$info->head_office}}
                         
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>সাইটের রুপরেখা </span></h3>
                    <ul>
                        <li><a href="#">হোমপেজ </a></li>
                        <li><a href="#"> আমাদের কথা  </a></li>
                        <li><a href="#"> দাতা হন  </a></li>
                        <li><a href="#"> আমাদের নিতীমালা </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>রক্ত দান </span></h3>
                    <div class="insta">
                        <p>আপনাদের পাশে ২৪/৭ ঘন্টায় উপস্থিত</p>
                        <h3>{{$info->phone1}}  </h3>
                        <p>
                           মানুষের জন্য মানুষ, রক্ত দরকারে কল করুন 
                        </p> 
                        <h3>{{$info->phone2}}</h3>

                        <div class="insta">
                            <button  class="foooter_button">সাইন আপ করুন </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>  রেজিস্টার ইউজার  </span></h3>
                    <div class="insta"> 
                        <button type="button" class="foooter_button" data-toggle="modal" data-target="#changeAddress">ঠিকানা পরিবর্তন</button>

                        <div id="changeAddress" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                
                                  <form class="form-horizontal" action="" method="post">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">আপনার ঠিকানা পরিবর্তন করুন </h4>
                                  </div>
                                  <div class="modal-body">
                                    <input type="text" class="form-control" name="changeAddress" placeholder="Current Location">

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
                                  </div>
                                </div>
                                </form>

                              </div>
                            </div>


                    </div><br>
                    <a href="#">
                    <div>
                        <img  style="width: 178px;height: 70px" class="img img-responsive img-rounded" src="public/images/googleplay_badge.jpg">
                    </div>
                    </a>
                    <h4> <span>আমাদের অনুসরণ করুন </span> </h4>
                    <div class="footer_bottom_fa"> 
                        <a href="{{url('https://www.facebook.com/')}}" target="_blank"><i style="padding: 5px;" class="fa fa-facebook" aria-hidden="true"></i> </a>
                        <a href="{{url('https://plus.google.com/')}}" target="_blank"><i style="padding: 5px;"  class="fa fa-google-plus" aria-hidden="true"></i> 
                            <a href="{{url('https://www.youtube.com/')}}" target="_blank"><i style="padding: 5px;"  class="fa fa-youtube" aria-hidden="true"></i> 
                                <a href="{{url('https://twitter.com/')}}" target="_blank"><i style="padding: 5px;"  class="fa fa-twitter" aria-hidden="true"></i> 

                                    </div>
                                    </div>
                                    
                                    </div>

                                    </div>
                                    </div>
                                    </div>

                                    <!--bottom footer-->
                                    <div id="bottom-footer" class="xs-hidden">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-12 col-sm-12 text-center" style="margin-bottom: 20px;">
                                                    <a href="{{url('/')}}" class="navbar-brand " style="width: 100%">
                                                        <img class="img img-responsive" style="width: 150px;height: 60px;" src="{{asset('/')}}/public/frontend/images/logoo.png">
                                                    </a>  <br><br><br>
                                                </div>

                                                <div class="col-md-8 col-xs-12 col-sm-12 text-center">
                                                    <div class="footer-left" style="margin-top: 40px; text-align: center;">
                                                        &copy; lifecylebd.org. All rights reserved 2017 | Designed by <a href="https://skybare.com/">Skybare IT</a> 
                                                    </div>
                                                    <div class="footer-right  text-center">
                                                        <ul class="list-unstyled list-inline">
                                                            <li><a href="{{ url('/') }}">Home</a></li>
                                                            <li><a href="{{ url('/about-us') }}">About</a></li>
                                                            <li><a href="#service">Service</a></li>
                                                            <li><a href="#portfolo">Portfolio</a></li>
                                                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



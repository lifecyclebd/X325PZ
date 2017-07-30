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
                    <p class="text-center find_out_where">Find out where to give blood</p> 
                    <form class="form-horizontal" method="post" action=""> 
                        <div class="input-group">
                            <input type="text" class="form-control search_place"  name="search" style="height: 40px">
                            <div class="input-group-btn">
                                <button class="btn btn-search " type="submit">SEARCH</button>
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
            <h3 class="footer_title">Contact Us</h3>
            <?php $info = get_footer(); ?>

            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>হেড অফিস </span></h3>
                    <p> স্থানঃ  <?php echo e($info->head_office); ?><br>
                    ফোনঃ +88 01711 42 42 42<br>
                    ইমেইলঃ info@lifecycle.org<br>
                         
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
                        <h3><?php echo e($info->phone1); ?>  </h3>
                        <p>
                            Please call for blood
                        </p> 
                        <h3><?php echo e($info->phone2); ?></h3>

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
                        <button  class="foooter_button">ঠিকানা পরিবর্তন </button>
                    </div><br><br>
                    <h4> আমাদের অনুসরণ করুন  </h4>
                    <div class="footer_bottom_fa"> 
                        <a href="<?php echo e(url('https://www.facebook.com/')); ?>" target="_blank"><i style="padding: 5px;" class="fa fa-facebook" aria-hidden="true"></i> </a>
                        <a href="<?php echo e(url('https://plus.google.com/')); ?>" target="_blank"><i style="padding: 5px;"  class="fa fa-google-plus" aria-hidden="true"></i> 
                            <a href="<?php echo e(url('https://www.youtube.com/')); ?>" target="_blank"><i style="padding: 5px;"  class="fa fa-youtube" aria-hidden="true"></i> 
                                <a href="<?php echo e(url('https://twitter.com/')); ?>" target="_blank"><i style="padding: 5px;"  class="fa fa-twitter" aria-hidden="true"></i> 

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
                                                    <a href="<?php echo e(url('/')); ?>" class="navbar-brand " style="width: 100%">
                                                        <img class="img img-responsive" style="width: 150px;height: 60px;" src="<?php echo e(asset('/')); ?>/public/frontend/images/logoo.png">
                                                    </a>  <br><br><br>
                                                </div>

                                                <div class="col-md-8 col-xs-12 col-sm-12 text-center">
                                                    <div class="footer-left" style="margin-top: 40px; text-align: center;">
                                                        &copy; lifecylebd.org. All rights reserved 2017 | Designed by <a href="https://skybare.com/">Skybare IT</a> 
                                                    </div>
                                                    <div class="footer-right  text-center">
                                                        <ul class="list-unstyled list-inline">
                                                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                                            <li><a href="<?php echo e(url('/about-us')); ?>">About</a></li>
                                                            <li><a href="#service">Service</a></li>
                                                            <li><a href="#portfolo">Portfolio</a></li>
                                                            <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



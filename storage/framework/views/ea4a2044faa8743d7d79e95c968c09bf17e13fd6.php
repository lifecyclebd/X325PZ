<!--service-->
<div id="service">
    <!--service gapping-->
    <div class="service-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8"> 
                    <p class="text-center find_out_where">Find out where to give blood</p> 
                    <form class="form-horizontal" method="post" action=""> 
                        <div class="input-group">
                            <input type="text" class="form-control search_place"  name="search">
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
            
            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>Head Office</span></h3>
                    <p><?php echo e($data['footer']->head_office); ?></p>
                    <p><b>Initial release:</b>December 29, 1985<br>
                        <b>Director:</b>Ken Finkleman<br><b>Box office:</b> 3.394 million USD<br><b>Screenplay: </b>Ken Finkleman
                </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>Site Map</span></h3>
                    <ul>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>Give Blood</span></h3>
                    <div class="insta">
                        <h2>01711111111</h2>
                        <p>Monday to Thursday 10am - 12pm and 2pm-4pm; Friday 10 am-12pm</p>
                        <p>
                            Please call for blood
                        </p>
                        <h3>01711111111</h3>
                        <div class="insta">
                            <button  class="foooter_button">Sign up to give Blood</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-heading">
                    <h3><span>Already Registered</span></h3>
                    <div class="insta">
                        <button  class="foooter_button">Change Address</button>
                    </div><br><br>
                    <h4>Follow Us</h4>
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#portfolo">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



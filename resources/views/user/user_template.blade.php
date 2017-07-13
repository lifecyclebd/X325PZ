@include('user/header')

<body>
<div class="se-pre-con"></div>
 <div class="top-bar hidden-xs ">
        <div class="container">
            <div class="social-icons pull-left">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- /.social-icons -->
            <div class="social-icons pull-right">
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <!-- /.left-text -->
        </div>
    </div>
    <!-- /.top-bar -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <a href="index-2.html">
                        <div class="logo">
                                <img src="{{ asset ("public/user/images/resources/logo.png")}}" alt="Awesome Image" />
                        </div>  
                    </a>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 hidden-xs ">
                    <div class="header-right-info pull-right sm-pull-none clearfix">
                        <div class="single-header-info pb-sm-20">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="flaticon-interface-2"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>EMAIL</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <div class="single-header-info">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="flaticon-telephone"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Call Now</h3>
                                <p><b> 00 1111 2222</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /.header -->

    <nav class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div class="nav-header pull-left">
                            <ul>
                                <li class="dropdown">
                                    <a href="index-2.html">Home</a>
                                    <ul class="submenu">
                                        <li><a href="events.html">Current Campaigns</a></li>
                                        <li><a href="gallery.html">Link to Galleries</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                              <li class="dropdown">
                                    <a href="vision-mission-values.html">About Us</a>
                                    <ul class="submenu">
                                        <li><a href="who-we-are.html">Who we are</a></li>
                                        <li><a href="vision-mission-values.html">Vision, Mission, Values</a></li>
                                        <li><a href="#">Message from our CEO</a></li>
                                        <li><a href="#">Our Donation Policy</a></li>
                                        <li><a href="faq.html">FAQ’s</a></li>
                                    </ul>
                                </li>
                                <li><a href="global-projects.html">Projects</a></li>
                                <li><a href="gallery.html">Galleries</a></li>
                                <li><a href="donate-now.html">Donate</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="donate-col col-xs-12 col-sm-12 col-lg-3 col-md-3">
                    <div class="donate-btn clearfix">
                        <!-- Modal: donate now Starts -->
                        <a class="thm-btn pull-right" data-toggle="modal" href="#modal-donate-now">Donate Now</a>

                        <div class="nav-footer pull-left">
                            <button><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>
    <!-- /.mainmenu-area -->

    <!--Rev Slider Wrapper Column-->
    <div class="rev_slider_wrapper bannercontainer">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/2.jpg"  alt=""  data-bgposition="50% 90%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="hidden-xs  tp-caption tp-resizeme rs-parallaxlevel-0 text-uppercase"
                  id="rs-1-layer-1"

                  data-x="['left','left','left','left']" 
                  data-hoffset="['370','50','30','17']" 
                  data-y="['center','center','center','center']" 
                  data-voffset="['10','110','180','160']" 
                  data-fontsize="['105','100','70','60']"
                  data-lineheight="['100','90','60','60']"
                  data-width="['none','none','none','400']"
                  data-height="none"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];" 
                  data-mask_out="x:inherit;y:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 6; letter-spacing:-3px; white-space: nowrap;"><span class="text-thm">Lorem  </span><span class="text-white">Ipsum  </span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="hidden-xs tp-caption BigBold-SubTitle tp-resizeme rs-parallaxlevel-0"
                  id="rs-1-layer-2"

                  data-x="['left','left','left','left']"
                  data-hoffset="['370','55','33','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['260','1','74','58']" 
                  data-fontsize="['15','15','15','13']"
                  data-lineheight="['24','24','24','20']"
                  data-width="['570','570','410','280']"
                  data-height="['60','100','100','100']"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 7;"><span class="text-white text-white-cap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="hidden-xs  tp-caption btn btn-default btn-lg thm-btn pl-40 pr-40 rs-parallaxlevel-0"

                  id="rs-1-layer-3"
                  data-x="['left','left','left','left']" 
                  data-hoffset="['370','480','30','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['212','0','30','20']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 8; white-space: nowrap;;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW
                </div>

                <!-- LAYER NR. 4 -->
                <div class="hidden-xs tp-caption btn btn-default btn-lg thm-btn inverse pl-40 pr-40 rs-parallaxlevel-0"

                  id="rs-1-layer-4"
                  data-x="['left','left','left','left']" 
                  data-hoffset="['590','480','30','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['212','0','30','20']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">read more
                </div>

              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/3.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="hidden-xs tp-caption tp-resizeme rs-parallaxlevel-0 text-uppercase"
                  id="rs-2-layer-1"

                  data-x="['left','left','left','left']" 
                  data-hoffset="['370','200','30','17']"
                  data-y="['center','center','center','center']" 
                  data-voffset="['10','110','180','160']"
                  data-fontsize="['78']"
                  data-lineheight="['60']"
                  data-width="['none','none','none','400']"
                  data-height="none"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];" 
                  data-mask_out="x:inherit;y:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 6; white-space: nowrap;"><span class="text-thm">Lorem</span> <span class="text-white">ipsum dolor</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="hidden-xs tp-caption BigBold-SubTitle tp-resizeme text-white rs-parallaxlevel-0"
                  id="rs-2-layer-2"

                  data-x="['left','left','left','left']"
                  data-hoffset="['370','55','33','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['260','1','74','58']"
                  data-fontsize="['15','15','15','13']"
                  data-lineheight="['24','24','24','20']"
                  data-width="['570','570','410','280']"
                  data-height="['60','100','100','100']"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 7; min-width: 570px; max-width: 570px; max-width: 60px; max-width: 60px; white-space: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="hidden-xs tp-caption btn btn-default btn-lg thm-btn pl-40 pr-40 rs-parallaxlevel-0"

                  id="rs-2-layer-3"
                  data-x="['left','left','left','left']" 
                  data-hoffset="['370','480','30','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['212','0','30','20']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 8; white-space: nowrap;;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW
                </div>

                <!-- LAYER NR. 4 -->
                <div class="hidden-xs tp-caption btn btn-default btn-lg thm-btn inverse pl-40 pr-40 rs-parallaxlevel-0"

                  id="rs-2-layer-4"
                  data-x="['left','left','left','left']" 
                  data-hoffset="['590','480','30','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['212','0','30','20']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">read more
                </div>

              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/4.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/4.jpg"  alt=""  data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="hidden-xs tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                  id="rs-3-layer-1"

                  data-x="['left','left','left','left']"
                  data-hoffset="['370','50','30','17']" 
                  data-y="['center','center','center','center']" 
                  data-voffset="['10','110','180','160']" 
                  data-fontsize="['110','100','70','60']"
                  data-lineheight="['100','90','60','60']"
                  data-width="['none','none','none','400']"
                  data-height="none"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];" 
                  data-mask_out="x:inherit;y:inherit;" 
                  data-start="500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 6; white-space: nowrap;"><span class="text-thm">Lorem</span> ipsum
                </div>

                <!-- LAYER NR. 2 -->
                <div class="hidden-xs tp-caption BigBold-SubTitle tp-resizeme text-white rs-parallaxlevel-0"
                  id="rs-3-layer-2"

                  data-x="['left','left','left','left']"
                  data-hoffset="['370','55','33','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['260','1','74','58']" 
                  data-fontsize="['15','15','15','13']"
                  data-lineheight="['24','24','24','20']"
                  data-width="['570','570','410','280']"
                  data-height="['60','100','100','100']"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 7; min-width: 570px; max-width: 570px; max-width: 60px; max-width: 60px; white-space: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="hidden-xs tp-caption btn btn-default btn-lg thm-btn pl-40 pr-40 rs-parallaxlevel-0"

                  id="rs-3-layer-3"
                  data-x="['left','left','left','left']" 
                  data-hoffset="['370','480','30','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['212','0','30','20']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 8; white-space: nowrap;;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">DONATE NOW
                </div>

                <!-- LAYER NR. 4 -->
                <div class="hidden-xs tp-caption btn btn-default btn-lg thm-btn inverse pl-40 pr-40 rs-parallaxlevel-0"

                  id="rs-3-layer-4"
                  data-x="['left','left','left','left']" 
                  data-hoffset="['590','480','30','20']" 
                  data-y="['bottom','bottom','bottom','bottom']" 
                  data-voffset="['212','0','30','20']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-start="650" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]'
                  data-basealign="slide" 
                  data-responsive_offset="on"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">read more
                </div>

              </li>
            </ul>
        </div>
    </div>

    <!--Featured Three Column-->
    <div class="featured-three-column mt-sm-70">
        <div class="container">
            <div class="row clearfix">
                <!--Column-->
                <div class="col-xs-12 col-sm-12 col-md-4 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="inner-box dark-overlay bg-img-cover" style="background-image: url(images/features/1.jpg);">
                        <div class="content">
                            <h3>Lorem ipsum </h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="link"><a href="global-projects.html" class="thm-btn inverse"><i class="fa fa-caret-right text-text-thmed"></i> read more</a></div>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-xs-12 col-sm-12 col-md-4 column wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <article class="inner-box bg-img-cover" style="background-image: url(images/features/2.jpg);">
                        <div class="content">
                            <h3>Lorem ipsum </h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="link"><a href="events.html" class="read-more thm-btn normal-btn"><span class="fa fa-caret-right"></span> Join Now</a></div>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="col-xs-12 col-sm-12 col-md-4 column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="inner-box dark-overlay bg-img-cover" style="background-image: url(images/features/3.jpg);">
                        <div class="content">
                            <h3>Lorem ipsum </h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="link"><a href="global-projects.html" class="read-more thm-btn normal-btn"><span class="fa fa-caret-right"></span> Join Now</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!--Start Our Event Area-->
    <div class="event-feature sec-padding" style="padding:20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h2 class="sec-color double-line-bottom font-weight-700 pb-25">Lorem ipsum </h2>
                    <div class="urgent-cause">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 pb-sm-30">
                                <div class="thumb">
                                    <img class="full-width" src="images/causes/b1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 pb-sm-30 p-md-0 p-xs-20">
                                <div class="causes-details">
                                    <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                                    <p class="p-title font-16">Lorem ipsum dolor sit amet, consectetur </p>
                                    <div class="inner-box">
                                        <ul class="cause-list pl-0 pb-10">
                                            <li class="clearfix border-bottom"><span class="pull-left">Dontators -</span> <strong class="pull-right">78</strong></li>
                                            <li class="clearfix border-bottom"><span class="pull-left">Goal -</span> <strong class="pull-right">$45,800</strong></li>
                                            <li class="clearfix border-bottom"><span class="pull-left">Raised -</span> <strong class="pull-right">$39,300</strong></li>
                                        </ul>
                                        <div class="progress-item">
                                            <div class="progress" data-value="85">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="value-holder"><span class="value"></span><span style="color: #fff">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
                                        <a class="thm-btn btn-xs" href="donate-now.html"><i class="fa fa-angle-double-right text-white"></i> Donate Now</a>
                                        <a href="global-projects.html" class="thm-btn inverse btn-xs ml-5"><i class="fa fa-heart text-text-thmed"></i> read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h2 class="sec-color double-line-bottom font-weight-700 pb-25">Lorem ipsum </h2>
                    <div class="bx-event-carousel">
                        <div class="event">
                            <div class="row pb-xs-15">
                                <div class="col-sm-4">
                                    <div class="event-thumb">
                                        <div class="thumb">
                                            <img class="full-width" src="images/event/1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="event-content">
                                        <h4 class="event-title"><a href="events.html">Lorem ipsum  </a></h4>
                                        <ul class="event-held pl-0 list-inline">
                                            <li data-text-color="#777"> <i class="fa fa-map-marker"></i> Langford WA 6147</li>
                                        </ul>
                                        <div class="event-date pl-0">
                                             <a class="thm-btn btn-xs" href="projects-single.html"><i class="fa fa-angle-double-right text-white"></i> read more</a>
                                        </div>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="row pb-xs-15">
                                <div class="col-sm-4">
                                    <div class="event-thumb">
                                        <div class="thumb">
                                            <img class="full-width" src="images/event/2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="event-content">
                                        <h4 class="event-title"><a href="events.html">Lorem ipsum </a></h4>
                                        <ul class="event-held pl-0 list-inline">
                                            <li data-text-color="#777"> <i class="fa fa-map-marker"></i> Langford WA 6147.</li>
                                        </ul>
                                        <div class="event-date pl-0">
                                            <a class="thm-btn btn-xs" href="projects-single.html"><i class="fa fa-angle-double-right text-white"></i> read more</a>
                                        </div>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="row pb-xs-15">
                                <div class="col-sm-4">
                                    <div class="event-thumb">
                                        <div class="thumb">
                                            <img class="full-width" src="images/event/3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="event-content">
                                        <h4 class="event-title"><a href="events.html">Lorem ipsum </a></h4>
                                        <ul class="event-held pl-0 list-inline">
                                            <li data-text-color="#777"> <i class="fa fa-map-marker"></i> Langford WA 6147.</li>
                                        </ul>
                                        <div class="event-date pl-0">
                                            <a class="thm-btn btn-xs" href="projects-single.html"><i class="fa fa-angle-double-right text-white"></i> read more</a>
                                        </div>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="row pb-xs-15">
                                <div class="col-sm-4">
                                    <div class="event-thumb">
                                        <div class="thumb">
                                            <img class="full-width" src="images/event/4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="event-content">
                                        <h4 class="event-title"><a href="events.html">Lorem ipsum </a></h4>
                                        <ul class="event-held pl-0 list-inline">
                                            <li data-text-color="#777"> <i class="fa fa-map-marker"></i> Langford WA 6147.</li>
                                        </ul>
                                        <div class="event-date pl-0">
                                            <a class="thm-btn btn-xs" href="projects-single.html"><i class="fa fa-angle-double-right text-white"></i> read more</a>
                                        </div>
                                        <p class="mb-0">TLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event">
                            <div class="row pb-xs-15">
                                <div class="col-sm-4">
                                    <div class="event-thumb">
                                        <div class="thumb">
                                            <img class="full-width" src="images/event/5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="event-content">
                                        <h4 class="event-title"><a href="events.html">Lorem ipsum </a></h4>
                                        <ul class="event-held pl-0 list-inline">
                                            <li data-text-color="#777"> <i class="fa fa-map-marker"></i> Langford WA 6147.</li>
                                        </ul>
                                        <div class="event-date pl-0">
                                            <a class="thm-btn btn-xs" href="projects-single.html"><i class="fa fa-angle-double-right text-white"></i> read more</a>
                                        </div>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--Start Our Event Area-->
    <div id="donation-forms" class="donation-section bg-img-cover layer-overlay overlay-white-9" data-bg-img="images/bg/1.jpg">
        <div class="container-fluid">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-6 promote-project text-left pb-sm-50 p-70 p-md-20 pl-120">
                        <h2 class="text-dark mb-30">ipsum dolor sit amet</h2>
                        <p class="pr-50 pr-50 mt-30" style="color:#453f3f; font-size:16px; line-height:19px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <p class="pr-50 pr-50 mt-30" style="color:#453f3f; font-size:16px; line-height:19px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <a href="donate-now.html" class="thm-btn inverse mt-20">Join Us</a>
                        <a href="who-we-are.html" class="read-more thm-btn btn-dark mt-20"> read more</a>
                    </div>
                    <div class="col-md-6 bg-f7 p-80 p-md-20 p-sm-70 pb-50">
                        <h2 class="text-dark mt-0 pb-20 text-uppercase font-weight-700">Make a donation</h2>
                        <form id="donation-form" class="donation-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label class="text-thm">Donation Amount</label>
                                        <div class="switch-field">
                                          <input type="radio" id="donateAmount0020" name="donateAmount" checked>
                                          <label for="donateAmount0020">$20</label>
                                          <input type="radio" id="donateAmount0050" name="donateAmount">
                                          <label for="donateAmount0050">$50</label>
                                                <input type="radio" id="donateAmount00100" name="donateAmount">
                                          <label for="donateAmount00100">$100</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                        <label class="text-thm">Donation Type</label>
                                         <div class="switch-field">
                                          <input type="radio" id="donateTypeOneTime" name="donateType"  checked>
                                          <label for="donateTypeOneTime">Once</label>
                                          <input type="radio" id="donateTypeMonthly" name="donateType">
                                          <label for="donateTypeMonthly">Monthly</label>
                                                <input type="radio" id="donateTypeYearly" name="donateType">
                                          <label for="donateTypeYearly">Yearly</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-thm">Your Name</label>
                                        <input type="text" placeholder="Enter Name" name="donate_name" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-thm">Your Email</label>
                                        <input type="text" placeholder="Enter Email" name="donate_email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="text-thm">Donation For</label>
                                        <select class="form-control">
                                            <option>Educate children</option>
                                            <option>Child Feed</option>
                                            <option>Give Clean Water</option>
                                            <option>Child Clothes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button data-loading-text="Please wait..." class="thm-btn mt-15" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Start Our Gallery Areas-->
    <div class="gallery-section full-width pb_2">
        <div class="container">
            <div class="sec-title text-center" style="margin-bottom:20px;">
                <span class="double-line"></span> &ensp;
                <h2>Our Gallery</h2> &ensp; <span class="double-line"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <!--Filter-->
            <div class="filters">
                <ul class="filter-tabs style-one clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".child">Child</li>
                    <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                    <li class="filter" data-role="button" data-filter=".sponsorship">Sponsorship</li>
                    <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>
                </ul>
            </div>
        </div>
        <div class="images-container">
            <div class="filter-list clearfix">
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s1.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s1.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s2.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s2.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s13.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s13.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s4.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s4.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s5.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s5.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s6.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s7.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s8.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s9.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s9.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all child charity">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s10.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s10.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="images/gallery/s11.jpg" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="images/gallery/s11.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
                <!--Image Box-->
                <div class="image-box mix mix_all charity sponsorship volunteering">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="{{ asset ("public/user/images/gallery/s12.jpg") }}" class="lightbox-image"><img src="{{ asset ("public/user/images/gallery/s12.jpg") }}" alt=""></a>
                        </figure>
                        <a href="{{ asset ("public/user/images/gallery/s12.jpg") }}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	    <!--Client logo div-->
    <div class="p-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-6.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-7.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-8.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-9.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-10.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-11.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-12.png") }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-box">
                                <img src="{{ asset ("public/user/images/clients/logo-13.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Start call to action Area-->
    <!--Start call to action Area-->
       <!--Start call to action Area-->
    <div class="footer-call-to-action">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4 sm-text-center">
                    <h3>Sign up for Updates </h3>
                    <p>By subscribing to our mailing list you will always be updated. </p>
                </div>
                <div class="col-md-8 text-right sm-text-center">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="text" name="email" placeholder="Email Address">
                    <a href="#" class="thm-btn inverse mt-sm-15">Subscribe Now</a>
                </div>
                
            </div>
        </div>
    </div>
    
  <!-- Footer -->
    @include('user/footer')
    
    
    <!-- switch color -->
    <div class="config open">
        <div class="config-options">
            <h4>Colors</h4>
            <ul>
                <li><a style="background: #37aecc;color: #37aecc" class="changecolor blue-text" href="#" title="Blue color">---</a></li>
                <li><a style="background: #cbebf7;color: #cbebf7"  class="changecolor light-blue-text" href="#" title="light Blue color">---</a></li>
                <li><a style="background: #32374b;color: #32374b"  class="changecolor oxford-text" href="#" title="Oxford color">---</a></li>
                <li><a style="background: #a1cf68;color: #a1cf68" class="changecolor green-text" href="#" title="Green color">---</a></li>
                <li><a style="background: #FF7619;color: #FF7619" class="changecolor orange-text" href="#" title="Orange color">---</a></li>
                <li><a style="background: #7300ab;color: #7300ab" class="changecolor purple-text" href="#" title="Purple color">---</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="#"><i class="fa fa-cog"></i></a>
    </div>

    
    <!--Scroll to top-->
    <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

    <!-- main jQuery -->
    <script src="{{ asset ("public/user/js/jquery-1.12.4.min.js") }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset ("public/user/js/bootstrap.min.js") }}"></script>
    <!-- bx slider -->
    <script src="{{ asset ("public/user/js/jquery.bxslider.min.js") }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset ("public/user/js/owl.carousel.min.js") }}"></script>
    <!-- validate -->
    <script src="{{ asset ("public/user/js/jquery-parallax.js") }}"></script>
    <!-- validate -->
    <script src="{{ asset ("public/user/js/validate.js") }}"></script>
    <!-- mixit up -->
    <script src="{{ asset ("public/user/js/jquery.mixitup.min.js") }}"></script>
    <!-- fancybox -->
    <script src="{{ asset ("public/user/js/jquery.fancybox.pack.js") }}"></script>
    <!-- easing -->
    <script src="{{ asset ("public/user/js/jquery.easing.min.js") }}"></script>
    <!-- circle progress -->
    <script src="{{ asset ("public/user/js/circle-progress.js") }}"></script>
    <!-- appear js -->
    <script src="{{ asset ("public/user/js/jquery.appear.js") }}"></script>
    <!-- count to -->
    <script src="{{ asset ("public/user/js/jquery.countTo.js") }}"></script>
    <!-- gmap helper -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzS7kYaXQy0aJGMMArSfa2dDYTyuOzYUc"></script>
    <!-- gmap main script -->
    <script src="{{ asset ("public/user/js/gmap.js") }}"></script>
    <!-- isotope script -->
    <script src="{{ asset ("public/user/js/isotope.pkgd.min.js") }}"></script>
    <!-- jQuery ui js -->
    <script src="{{ asset ("public/user/js/jquery-ui-1.11.4/jquery-ui.js") }}"></script>
    <!-- revolution scripts -->
    <script src="{{ asset ("public/user/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset ("public/user/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.carousel.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.parallax.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset ("public/user/revolution/js/extensions/revolution.extension.video.min.js") }}"></script>
    <!-- thm custom script -->
    <script src="{{ asset ("public/user/js/custom.js") }}"></script>

  
    <!-- For demo purposes – can be removed on production -->
    <script src="{{ asset ("public/user/switchstylesheet/switchstylesheet.js") }}"></script>
    
    <script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
</body>


 </html>

   
 
<?php $__env->startSection('content'); ?>
 <style type="text/css">
     #header{
            background: rgb(91, 2, 1);
    height: 45px;
    font-size: 22px;
    text-align: center;
    text-transform: uppercase;
    border: 1px solid rgba(238, 238, 238, 0.28);
    padding: 10px;
     }
     .contact-content .contact-form textarea, .contact-content .contact-form input {{
        background: none ! important;
     }
 </style>
<div class="" id="donor-register">
<div class="contact-content sec-padding">
       
<div class="container" id="header">Contact Us</div>

       <div class="container" style="background: rgba(189, 189, 189, 0.4); margin-bottom: 20px; padding: 30px;">
       
            <div class="row">
                <div class="col-md-4">
                    <h2>Address</h2>
                    <ul class="contact-info">
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4>Address</h4>
                                <p>H 00, 11-22 Avenue, <br>
								example, country </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4>Phone</h4>
                                <p>00 1111 2222 <br>Mobile: 00 111 222 333 </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4>Email</h4>
                                <p>info@example <br> donate@example</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h2>Contact Form</h2>
                    <form action="#" class="contact-form row" id="contact-page-contact-form">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-6">
                            <textarea name="message"  class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="thm-btn" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
              
        </div>
      


    </div>
 
</div>
<div style="min-height: 450px">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.6061408838555!2d90.39588331456119!3d23.72575508460154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e6474187cf%3A0xb3d3783755659522!2sDhaka+Medical+College+Hospital!5e0!3m2!1sen!2sbd!4v1501241907662" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
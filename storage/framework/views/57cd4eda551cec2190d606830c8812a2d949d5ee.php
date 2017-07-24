 
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

       <div class="container" style="background: rgba(189, 189, 189, 0.4); margin-bottom: 20px; padding: 30px">
       
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

<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
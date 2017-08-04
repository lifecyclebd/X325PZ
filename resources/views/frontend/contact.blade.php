@extends('layouts/front')

@section('content')
<style type="text/css">
    #header{
        background:rgba(204, 48, 48, 0.58);
    }
    #unknown{
    height: 45px;
    font-size: 22px;
    text-align: center;
    text-transform: uppercase;
    border: 1px solid rgba(238, 238, 238, 0.28);
    padding: 10px;
    }
    .contact-content .contact-form textarea, .contact-content .contact-form input {
        background: none ! important;
    }
    .leftborder{
        border-right: 3px solid #9e6363;
        min-width: 200px;
        max-width: 250px;}
    .form-control { background: none; color: white; font-size: 20px} 
    input[type="text"].contact, input[type="password"].contact, input[type="email"].contact, textarea.contact{
        background: none; color: white; font-size: 20px;
    }
    input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, textarea:focus { background: none; color: white; font-size: 20px;}
    #donor-register{
        height: auto;
    }
</style>
<div class="" id="donor-register">
    <div class="contact-content sec-padding">

        <div class="container" id="header" style="margin-top: -30px;color: white" ><h3 class="text-center">Contact Us</h3></div>

        <div class="container" style="background: rgba(189, 189, 189, 0.4); margin-bottom: 20px; padding: 30px;">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
                    <?php $info = get_footer(); ?>
                    <h3 style="color: white !important; padding-left: 10px">Address</h3> 
                    <ul class="contact-info">
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="content-box"  style="color: white !important">
                                <h4 style="color: white !important; padding-left: 10px">  Address</h4>
                                <p style="color: white !important; padding-left: 10px">ইউনাইটেড ন্যাশনস রোড,<br>গুলশান সার্কেল-২,<br> ঢাকা-১২১২</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 style="color: white !important; padding-left: 10px">Phone</h4>
                                <p style="color: white !important; padding-left: 10px">{{$info->hot_line_phone}} </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <div class="inner">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 style="color: white !important; padding-left: 10px">Email</h4>
                                <p style="color: white !important; padding-left: 10px">{{$info->email1}} <br> {{$info->email2}}</p>
                            </div>
                        </li>
                    </ul> 
                </div>

                <div class="col-md-8 col-sm-6 col-xs-12" >
                    <h3 style="color: white">Contact Form</h3>
                    <form action="{{url('/')}}/send-message" method="post" class="contact-form row" id="contact-page-contact-form">
                        <?php if (isset($_GET['message'])) { ?>
                            <p class="label label-success label-lg" style="height: 30px;padding: 10px; font-size: 12px"><?php echo $_GET['message']; ?></p>
                            <br> <br>  We will inform you by cell phone within 30 minutes. Keep faith on Allah.</p>
                        <?php } ?>

                        {!! csrf_field() !!} 
                        <div class="col-md-6">
                            <input type="text" class="form-control contact" name="name" placeholder="Name">
                            <input type="text" class="form-control contact" name="email" placeholder="Email">
                            <input type="text" class="form-control contact" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-6">
                            <textarea name="message"  class="form-control contact" placeholder="Message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="thm-btn btn-search" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>

</div>
<div style="height: 45px; background: #c9302c; color: white; font-size: 22px; text-align: center;padding: 10px;   ">Location in Map</div>
<div class="container-fluid">

    <div style="min-height: 450px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.44655179129!2d90.40739530670326!3d23.796840036563882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a7ba38543b%3A0x91d5f14ad296d72e!2sGulshan+2%2C+Dhaka+1212!5e0!3m2!1sen!2sbd!4v1501792335338" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
@endsection  
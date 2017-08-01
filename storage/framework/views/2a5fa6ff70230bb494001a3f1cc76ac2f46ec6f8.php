<?php $__env->startSection('title', 'Find Splutions'); ?>
<?php $__env->startSection('pageTitle', 'Find Splutions'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    p{color: black;}
    #doctor_num{
            background-color: rgba(255, 0, 0, 0.55);
    color: white;
    margin-top: 50px;
    padding: 15px;
    height: 500px;
    }

    #doctor{
            background-color: rgba(242, 101, 100, 0.48) !important;
    padding: 15px;
    margin-top: 50px;
    color: white;
    }
    input[type="text"], textarea{
        background:none;
        color:white !important;
        font-size: 15px;
    }

    textarea.form-control {
    height: auto;
    background: none;
    color: white !important;
    font-size: 20px;
}
 input[type="text"].write_to_doctor, input[type="text"].write_to_doctor:focus {
    font-family: 'Raleway', sans-serif;
    font-size: 20px;
    font-weight: 500;
    color: white !important;
    padding: 0 15px;
    border: none;
    border-bottom: 5px solid #c9302c;
}

p{
    color: white;
}
.form-control{color: white !important}

input[placeholder], [placeholder], *[placeholder] {
    color: red !important;
}
body{color: white}
</style>
<div class="" style=" background:url(public/images/pres1.jpg) center center no-repeat; background-size: cover; width: 100%; height: 900px;">
    <div class=" col-md-offset-1 col-md-7">

 <div id="doctor">
        <p class="text-center" style="font-size: 25px;">কোন রোগ কে ওবহেলা করা উচিৎ নয়, আপনার সমস্যা আমাদের ডাক্তারদের দাথে শেয়ার করুন </p>
        <form class="form-horizontal" method="post" action="<?php echo e(url('admin/doctor/write')); ?>">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="age" placeholder="Age">
                </div> 
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="last_blood_pressure" placeholder="Last checked blood presure">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="any_disease" placeholder="Any previous diseases">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="email" placeholder="Email">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"  style="  margin-top: 50px;">
                    <textarea class="form-control" style="border: 5px solid #c9302c;" name="problems" rows="10" placeholder="Write your problem"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <input type="submit" name="submit" value="Send" class="submit-btn btn btn-success form-control">
                </div>
            </div>
        </form>
    </div>
</div> 
    <div class="col-md-4" >
    <div id="doctor_num">
         <h1>আপনার নিকস্থ অভিজ্ঞ ডাক্তার   <a href="<?php echo e(url('/')); ?>/doctor-search"> খুজুন </a> ।   </h1>

         <hr>

<h1> সরাসরি কথা বলতে কল করুন ০১৭০৯৮৪৮৪৮২</h1>

    </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
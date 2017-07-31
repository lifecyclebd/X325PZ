<?php $__env->startSection('title', 'Doctors'); ?>
<?php $__env->startSection('pageTitle', 'Doctors'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .img-center {
        margin: 0 auto;
    }
    body, div{color: black}
    #footer_id{    
        background: green;
    color: white;
    font-size: 22px;
    border-bottom: 10px solid green;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    margin-bottom: 10px;}
</style>
<div id="donor-register" style="height: auto">


    <div class="container" style="background:rgba(249, 249, 249, 0.8); ">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">আমাদের বিশেষজ্ঞ ডাক্তারগণ 
                </h1>
             </div>
        </div>

        <!-- Team Members Row -->
        <div class="row pull-center"> 
            <?php $__currentLoopData = $data['doctor_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4  text-center">
            <div style="background: rgba(255, 0, 0, 0.25); min-height: 440px; color: white; border-top:10px solid green; padding: 20px; border-top-right-radius: 10px;border-top-left-radius: 10px;">
                <img style="width:150px; height: 150px; margin: 0 auto" class="img-circle img-responsive img-center" src="<?php echo e($row->pic_path); ?>" alt="pic">
                <h3><?php echo e($row->name); ?>

                    <small><?php echo e($row->designation); ?></small>
                </h3>
                <h4>Hospital Name: <?php echo e($row->hospital); ?></h4>
                <h4>Phone No: <?php echo e($row->phone); ?></h4>
            </div>
            <div id="footer_id">
            <i class="fa fa-envelope"> </i> Send Message</div>
           
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
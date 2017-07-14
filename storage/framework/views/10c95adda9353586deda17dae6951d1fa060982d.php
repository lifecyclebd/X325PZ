<?php $__env->startSection('title', 'Doctors'); ?>
<?php $__env->startSection('pageTitle', 'Doctors'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .img-center {
        margin: 0 auto;
    }
</style>
<div id="donor-register">

    <div class="container" style="background:rgba(249, 249, 249, 0.8); ">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Doctor List
                    <small>It's Nice to Meet You!</small>
                </h1>
             </div>
        </div>

        <!-- Team Members Row -->
        <div class="row pull-center"> 
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/1.jpg" alt="">
                <h3>Prof. Abdullah Al-Amin
                    <small>Professor</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/1.jpg" alt="">
                <h3>Prof. Abdullah Al-Amin
                    <small>Professor</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/1.jpg" alt="">
                <h3>Prof. Abdullah Al-Amin
                    <small>Professor</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/1.jpg" alt="">
                <h3>Prof. Abdullah Al-Amin
                    <small>Professor</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/1.jpg" alt="">
                <h3>Prof. Abdullah Al-Amin
                    <small>Professor</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/1.jpg" alt="">
                <h3>Prof. Abdullah Al-Amin
                    <small>Professor</small>
                </h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
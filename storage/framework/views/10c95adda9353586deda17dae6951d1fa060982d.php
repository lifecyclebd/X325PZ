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
            <?php $__currentLoopData = $data['doctor_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-sm-6 text-center">
                <img style="width:200px; height: 200px" class="img-circle img-responsive img-center" src="<?php echo e(url('/')); ?>/public/frontend/images/doctor/<?php echo e($row->profile_photo); ?>" alt="">
                <h3><?php echo e($row->name); ?>

                    <small><?php echo e($row->designation); ?></small>
                </h3>
                <h4>Hospital Name: <?php echo e($row->hospital); ?></h4>
                <h4>Phone No: <?php echo e($row->phone); ?></h4>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
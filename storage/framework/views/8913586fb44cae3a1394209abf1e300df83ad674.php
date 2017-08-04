<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('pageTitle', 'About Us'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>

<?php $__env->startSection('content'); ?>

        <img src="<?php echo e($data['about_us']->pic_path); ?>" class="img img-responsive" style="width: 100%;">
<div class="container-fluid" style="background-color: #c9302c;color: white;min-height: 540px">

        <!-- Portfolio Item Heading -->
        <div class="col-md-offset-1 col-md-10 text-justify">
        <?php echo $data['about_us']->description; ?>

        </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
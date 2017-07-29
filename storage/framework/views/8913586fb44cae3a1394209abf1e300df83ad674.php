<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('pageTitle', 'About Us'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>

<?php $__env->startSection('content'); ?>

        <img src="<?php echo e($data['about_us']->pic_path); ?>" class="img img-responsive" style="width: 100%;">
<div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
        <?php echo $data['about_us']->description; ?>

        </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
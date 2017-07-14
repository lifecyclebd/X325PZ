<?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.sub_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php echo $__env->yieldContent('content'); ?>










<?php echo $__env->yieldContent('script_link'); ?>


<?php echo $__env->yieldContent('javascript_code'); ?>

<?php echo $__env->make('frontend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


























<?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
     
<?php echo $__env->yieldContent('content'); ?>
 

<?php echo $__env->make('user.events', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   


<?php echo $__env->make('user.donation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php echo $__env->make('user.clients', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


 
<?php echo $__env->make('user.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


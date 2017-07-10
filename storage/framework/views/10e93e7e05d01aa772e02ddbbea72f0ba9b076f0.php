<?php $__env->startSection('content'); ?>
<h1>This is View Blog Page</h1>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
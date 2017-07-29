<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
             <h1>Not Found</h1>
             <h3><a href="<?php echo e(url('/')); ?>">Home</a></h3>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content --> 
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
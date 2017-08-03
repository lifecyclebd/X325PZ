<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Reply to User</h3>
                        <div class="box-tools pull-right">
                                <a href="<?php echo e(url('/admin/write/to/doctor')); ?>" class="">      
                                    <i class="fa fa-undo" aria-hidden="true"></i> back
                                </a>

                            </div>
                    </div>

                    <div class="box-body">
                    <form class="form-horizontal" action="<?php echo e(url('/admin/docror/reply/store')); ?>" method="post" enctype='multipart/form-data' > 
                    
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    
                    
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Problem</label>
                            <div class="col-md-8">
                                <p><?php echo e($data['user']->problems); ?></p>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">User Email</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" value="<?php echo e($data['user']->email); ?>" name="email"  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Solution</label>
                            <div class="col-md-8">
                                <textarea class="form-control ckeditor" name="message" id="ckeditor"  ></textarea>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reply to Patient
                                </button>
                            </div>
                        </div>
                    </form>
                <!-- /.tab-content -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    </section>
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
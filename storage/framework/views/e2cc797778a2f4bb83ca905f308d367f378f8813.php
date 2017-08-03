<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>

                <div class="box-tools pull-right">
                    <a href="<?php echo e(url('/blog/category')); ?>" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>
            <div class="box-body"> 
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Blog Category</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form class="form-horizontal" action="<?php echo e(url('/blog/update_category')); ?>" method="post">
                        <?php echo csrf_field(); ?>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Category Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="<?php echo e($data['blog_category']->category_name); ?>" name="category_name" required autofocus>
                                <input type="hidden" value="<?php echo e($data['blog_category']->id); ?>" name="id" required autofocus>

                            </div> 
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Update Category
                                </button>
                            </div>
                        </div>
                    </form>
                        <!-- form close -->
                    </div> 
                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">

                            <a href="<?php echo e(url('/blog/content')); ?>" class="">      
                                <i class="fa fa-undo" aria-hidden="true"></i> back
                            </a>

                        </div>
                        <h3 class="box-title">Blog :: Details Page</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <h3 class=""><?php echo e($data['content']->title); ?></h3>
                        <hr>

                        <table class="table"> 
                                <tr>
                                    <td><?php echo e($data['content']->id); ?></td>
                                    <td><img src="<?php echo e($data['content']->pic_path); ?>" style="width: 50%; height: auto"></td>
                                    <td style="text-align: justify;"><?php echo $data['content']->description; ?></td>  

                                </tr>
 
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
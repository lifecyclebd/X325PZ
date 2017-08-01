<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Gallery List</h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo e(url('/admin/addPhoto')); ?>" class="">      
                                <i class="fa fa-plus" aria-hidden="true"></i> Add Photo
                            </a>

                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th>Caption</th>
                                    <th>Sub Caption</th> 
                                    <th>Category</th> 
                                    <th>Gallery</th> 
                                    <th>Image</th>

                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['galleries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row->id); ?></td>
                                    <td><?php echo e($row->caption); ?></td>
                                    <td><?php echo e($row->sub_caption); ?></td> 
                                    <td><?php echo e($row->page_name); ?></td> 
                                    <td><?php echo e($row->gallery_name); ?></td> 
                                    <td><img style="width:100px; height:70px" src="<?php echo e($row->pic_path); ?>"> </td>  
                                    <td> 
                                        <a href="<?php echo e(url('/admin/Photo')); ?>/edit/<?php echo e($row->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-edit"></i> </a>
                                        <a href="<?php echo e(url('/admin/Photo')); ?>/delete/<?php echo e($row->id); ?>" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i></a>
                                        <a href="#" class="btn  btn-info btn-xs"><i class="fa fa-fw fa-print"></i></a>
                                        <a href="<?php echo e(url('/admin/Photo')); ?>/delete<?php echo e($row->id); ?>" class="btn  btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>

                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <!-- /.content -->  
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
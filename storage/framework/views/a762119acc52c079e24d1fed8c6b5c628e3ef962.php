<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Testimonial List</h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo e(url('/admin/testimonial/add')); ?>" class="">      
                                <i class="fa fa-plus" aria-hidden="true"></i> Add Testimonial
                            </a>

                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Institute</th>
                                    <th>Designation</th>
                                    <th>Title</th>
                                    <th style="width: 30%">Message</th>
                                    <th>Rank</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>
                                    <td><?php echo e($row->id); ?></td>
                                    <td><img src="<?php echo e(asset('/')); ?>/public/images/testimonial/<?php echo e($row->photo); ?>" class="img img-thumbnail"></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->email); ?></td>
                                    <td><?php echo e($row->institution); ?></td>
                                    <td><?php echo e($row->designation); ?></td>
                                    <td><?php echo e($row->title); ?></td>
                                    <td><?php echo e($row->message); ?></td>
                                    <td><?php echo e($row->rank); ?></td>
                                    <td align="center"> 
                                         <a href="<?php echo e(url('admin/hospital')); ?>/delete" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i></a>
                                       
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
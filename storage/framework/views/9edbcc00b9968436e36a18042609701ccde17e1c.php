<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Blood Donor <i class="fa fa-angle-right"> </i>  Accepted  Blood Request List</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Blood Group</th>
                                    <th>Request From</th>
                                    <th>Request To</th>
                                    <th>Request Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['accepted_blood_request']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row->id); ?></td>
                                    <td><?php echo e($row->request_blood); ?></td>
                                    <td><?php echo e($row->request_phone); ?></td>
                                    <td><?php echo e($row->request_to); ?></td>
                                    <td> 

                                    <?php  
                                        $date = new DateTime();
                                        $date->setTimestamp($row->request_time);
                                        echo $date->format('d M Y H:i:s') . "\n";
                                    ?>
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
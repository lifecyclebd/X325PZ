<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">
                        </div>
                        <h3 class="box-title">Search</h3>

                    </div>
                    <div class="box-body">

                        <form action="<?php echo e(url('/')); ?>/donor/search" method="post">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <div class="col-md-2">
                                    <select class="form-control divisions" name="division">
                                        <option value="0">Any Divisions</option>
                                        <?php $__currentLoopData = $data['division']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->division_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select name="district" id="districts" class="districts form-control"> 
                                        <option value="0">Any district</option>
                                    </select>

                                </div>
                                <div class="col-md-2">
                                    <select name="upazila" id="upazillas" class="form-control"> 
                                        <option value="0">Any upazila</option>
                                    </select>

                                </div>
                                <div class="col-md-2">
                                    <select name="blood_group" class="form-control">
                                        <option value="0">Any Group</option>
                                        <option value="A+">A+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="B+">B+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B-">B-</option>
                                        <option value="O-">O-</option> 
                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary pull-right"> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">



                        </div>
                        <h3 class="box-title">Search Result</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Blood Group</th>
                                    <th>Last Donate Date</th>
                                    <th>Number Of Donation</th>
                                    <th>Any Disease</th> 
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php if (isset($data['result'])) { ?>
                                    <?php $__currentLoopData = $data['result']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($row->id); ?></td>                                   
                                        <td><?php echo e($row->fname); ?></td>
                                        <td><?php echo e($row->email); ?></td>                                    
                                        <td><?php echo e($row->phone); ?></td>
                                        <td><?php echo e($row->blood_group); ?></td>
                                        <td><?php echo e($row->last_donation); ?></td>
                                        <td><?php echo e($row->donations_number); ?></td>
                                        <td><?php echo e($row->is_physically_disble); ?></td> 
                                        <td><a class="btn btn-sm btn-success" href="<?php echo e(url('/')); ?>/donor/viewprofile/<?php echo e($row->id); ?>">view </a> </td>




                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                <?php } ?>
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
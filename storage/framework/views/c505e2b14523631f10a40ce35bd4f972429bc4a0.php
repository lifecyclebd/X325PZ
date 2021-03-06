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

                            <a class="btn btn-success pull-right" href="<?php echo e(url('/admin/content/create')); ?>"><i class="fa fa-plus"></i> Add Content</a>

                        </div>
                        <h3 class="box-title">Content List</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                    <form class="form-horizontal" action="<?php echo e(url('/')); ?>/admin/content/search-content" method="post" >
                        <div style="margin: 15px;background: #dd4b39 !important;height: 50px;padding: 10px;border-radius: 5px;color: white;">
                            <div class="from-group">
                                <label class="col-md-2 label-control">Select Category</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="category">
                                        <option value="">Select Content Type</option>
                                        <option value="news">News</option>
                                        <option value="upcoming_events">Upcoming Events</option>
                                        <option value="recent_events">Recent Events</option>
                                        <option value="more_blood">More About Blood</option>
                                        <option value="what_people_say">What People Say</option>
                                        <option value="blog">Blog</option>
                                        
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Search" class="btn btn-search col-md-2">
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th style="width: 60%"> Title</th> 
                                    <th>Content Type</th>
                                    <th>Image</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row->id); ?></td>
                                    <td><a href="<?php echo e(url('/admin/content/')); ?>/<?php echo e($row->id); ?>"><?php echo e($row->content_title); ?></a></td> 
                                    <td><?php echo e($row->content_type); ?></td> 
                                    <td>
                                        <img src="<?php echo e($row->pic_path); ?>" style="width: 60px; height: 60px;"> 

                                    </td> 
                                    <td> 
                                        <a href="<?php echo e(url('/admin/content')); ?>/<?php echo e($row->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-edit"></i> </a>
                                        <a href="<?php echo e(url('/admin/content')); ?>/delete/<?php echo e($row->id); ?>" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i></a>
                                        <a href="<?php echo e(url('/admin/content/')); ?>/<?php echo e($row->id); ?>" class="btn  btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i>
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
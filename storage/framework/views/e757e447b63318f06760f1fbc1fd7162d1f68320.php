<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php $__currentLoopData = $data['blood_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1 class="page-header">
                <?php echo e($row->title); ?>

            </h1>

            <p><span class="glyphicon glyphicon-time"></span><?php echo e($row->created_at); ?></p>
            <hr>
            <img style="width: 100%; height: 340px;" class="img-responsive img" src="<?php echo e($row->pic_path); ?>" alt="">
            <hr>
            <p align="justify"><?php echo $row->description; ?></p>
            <a class="btn btn-primary" href="#">বিস্তারিত  <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">← পুরাতন </a>
                </li>
                <li class="next">
                    <a href="#">নতুন  →</a>
                </li>
            </ul>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>আপনার ব্লগ খুজুন </h4>
                <div class="input-group">
                    <input type="text" class="form-control" style="    height: 40px;">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4> সাম্প্রতিক পোস্ট </h4>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $data['blood_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="#"><?php echo e($row->title); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr>
 

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
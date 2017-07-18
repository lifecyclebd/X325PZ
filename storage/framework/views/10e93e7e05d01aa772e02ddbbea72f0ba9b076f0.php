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
            <img class="img-responsive" src="<?php echo e(url('/')); ?>/public/frontend/images/news/<?php echo e($row->photo); ?>" alt="">
            <hr>
            <p><?php echo e($row->description); ?></p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">← Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer →</a>
                </li>
            </ul>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
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
                <h4>Blog Categories</h4>
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
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © Your Website 2014</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-top: 30px"> 
    <div class="col-md-9">

        <span class="more_news_title">Recent > <?php echo e($data['last_recent_event']->title); ?></span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="<?php echo e(url('/')); ?>/public/images/content/recent_events/<?php echo e($data['last_recent_event']->content_photo); ?>" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    <?php echo e($data['last_recent_event']->description); ?>

                </p>
            </div>
            <br>
        </div>
        
        <div class="row">
            <span class="more_news_title">Recent Events</span>
            <?php $__currentLoopData = $data['recent_event']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-md-offset-1 news"> 
                <span class="related_links_news_title"><a class="" href="<?php echo e(url('/recent-event')); ?>/<?php echo e($row->id); ?>"><?php echo e($row->title); ?></a></span>
                <div class="news_img col-md-6">
                    <span><img src="<?php echo e(url('/')); ?>/public/images/content/recent_events/<?php echo e($row->content_photo); ?>" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    <?php echo e(substr($row->description,0,100)); ?>

                </div>
                <a href="<?php echo e(url('/recent-event')); ?>/<?php echo e($row->id); ?>"><button class="pull-right btn-default" style="background: none;">More Details</button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title">Upcomming Events</span>
        <hr  class="more_news">
        <?php $__currentLoopData = $data['upcoming_event']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="<?php echo e(url('/')); ?>/public/images/content/upcoming_events/<?php echo e($row->content_photo); ?>" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <a href="<?php echo e(url('/upcoming-event')); ?>/<?php echo e($row->id); ?>" ><h4><?php echo e($row->title); ?></h4></a>
                <?php echo e($row->created_at); ?>

            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid"> 
    <div class="col-md-9">

        <span class="more_news_title">রোজায় স্বাস্থ্য</span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="<?php echo e(url('/')); ?>/public/images/Blood_Donor_24.jpg" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    Blood Donor 24 is a team of emergency response donors who pledge to respond and give blood within 24 hours, when we need it most.

If you can give blood at our centres in Aberdeen, Dundee, Edinburgh, Glasgow or Inverness, you are uniquely placed to help if we're faced with an urgent demand for your blood group.

Demand for blood is unpredictable, and lower levels of a particular blood group can occur for many reasons. This could be as the result of a major incident, or simply because of low attendances over a holiday period. Should the need for a specific blood group arise, eligible Blood Donor 24 members will receive a telephone call asking them to donate within 24 hours.

If you would like to join Blood Donor 24, ask about it the next time you're giving blood. We'll sign you up and put you on standby for emergency alert should there be a sudden need for your blood group.
                </p>
                <button class="pull-right btn-default" style="background: none;">More Details</button>
            </div>
            <br>
        </div>
        <div class="row">
            <?php $__currentLoopData = $data['recent_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-md-offset-1 news"> 
                <span class="related_links_news_title"><a class="" href="#"><?php echo e($row->title); ?></a></span>
                <div class="news_img col-md-6">
                    <span><img src="<?php echo e(url('/')); ?>/public/images/content/news/<?php echo e($row->content_photo); ?>" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    <?php echo e($row->description); ?>

                </div>
                <a href="<?php echo e(url('/news-detail')); ?>/<?php echo e($row->id); ?>"><button class="pull-right btn-default" style="background: none;">More Details</button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title">More News</span>
        <hr  class="more_news">
        <?php $__currentLoopData = $data['news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="<?php echo e(url('/')); ?>/public/images/content/news/<?php echo e($row->content_photo); ?>" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <h4><?php echo e($row->title); ?></h4>
                <?php echo e($row->created_at); ?>

            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
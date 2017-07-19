<?php $__env->startSection('content'); ?>
<div class="container-fluid"> 
    <div class="col-md-9">
        
        <span class="more_news_title"><?php echo e($data['news_detail']->title); ?></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="images/about_left.jpg" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <p class="text-justify" style="padding: 10px">
                One of the four main blood components, platelets stop bruising and bleeding. Many of Scotland's patients need platelet transfusions, including cancer and leukaemia patients, premature babies and emergency admissions.

                However, platelets can only be stored for seven days, so we're always looking for new donors to keep a steady supply available to Scottish hospitals. If you're interested in becoming a platelet donor, speak to a member of staff at your next blood donation or get in touch online and one of our team will get back to you
            </p>
        </div>
        
        <br>
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
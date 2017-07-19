<?php $__env->startSection('content'); ?>
<div class="container-fluid"> 
    <div class="col-md-9">

        <span class="more_news_title">রোজায় স্বাস্থ্য</span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="<?php echo e(url('/')); ?>/public/frontend/images/about_left.jpg" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    পবিত্র রমজান মাসের খাদ্যতালিকা ঠিক করার সময় অন্য মাসগুলোর খাদ্যতালিকার থেকে বেশি পার্থক্য করার প্রয়োজন নেই, যত সাধারণ এবং স্বাভাবিক খাদ্যতালিকাভুক্ত করা যায় ততই ভালো।খাদ্যের প্রকার এবং গ্রহণ এমনই হওয়া উচিত যাতে স্বাভাবিক থাকা ওজন বেড়েও না যায় বা কমেও না যায়। এমন সব খাদ্য নির্ধারণ করা প্রয়োজন,
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
                <button class="pull-right btn-default" style="background: none;">More Details</button>
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
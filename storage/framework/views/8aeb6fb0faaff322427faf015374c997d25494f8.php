<?php $__env->startSection('title', 'Blood News'); ?>
<?php $__env->startSection('pageTitle', 'Blood News'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<!--about-->
<div id="blood_news">
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-6 thumbnail">
                        <img src="<?php echo e(url('/')); ?>/public/frontend/images/donor_register.jpg" class="img img-responsive" style="width:100%">
                    </div>
                    <div class="col-md-6">
                        <div class="about-heading">
                            <h3 class="text-left">Blood</h3> 
                            <p class="text-justify">
                                Blood consists of a liquid called plasma, red blood cells, white blood cells and platelets. Red bloods cells deliver oxygen from your lungs to your tissues and organs, white blood cells fight infection as part of your body's defense system, and platelets help blood clot when you experience a cut or wound. Blood is a constantly circulating fluid providing the body with nutrition, oxygen, and waste removal. Your blood group depends on which antigens occur on the surface of your red blood cells.
                            </p>
                        </div>
                    </div>
                </div>
            </div>   	
        </div>
    </div>

    <div class="related_links">
        <div class="container">
            <div class="row">
                <h3 class="related_links_title">Related News</h3>
            </div>
            <div class="row">
                <?php $__currentLoopData = $data['blood_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 news"> 
                    <span class="related_links_news_title"><a class="" href="#">
                            <?php echo e($row->title); ?>

                        </a></span>
                    <div class="news_img col-md-6">
                        <span><img src="<?php echo e(url('/')); ?>/public/frontend/images/news/<?php echo e($row->photo); ?>" class="img"> </span>
                    </div>
                    <div class="news_text col-md-6">
                        <?php echo e($row->description); ?>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
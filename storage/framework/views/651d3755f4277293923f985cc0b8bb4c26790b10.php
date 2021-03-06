<?php $__env->startSection('title', 'Find Hospitals'); ?>
<?php $__env->startSection('pageTitle', 'Find Hospitals'); ?>
<?php $__env->startSection('parentName', 'Health'); ?>
<?php $__env->startSection('content'); ?>
<div class="find_hospital">
    <div class="container" style="min-height: 540px">   
        <p style="margin-top:200px"></p>

<header >
        <h4 class="find_hospital_title">দ্রুত সেবা পেতে আপনার নিকটবর্তী হাসপাতাল খুজুন </h4> 
            <p> </p>  
        <form class="form-horizontal" method="post" action="<?php echo e(url('/search-hospital')); ?>">
            <?php echo csrf_field(); ?> 
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="division" class="form-control find_search_button divisions">
                        <option value="">Select Division</option>
                        <?php $__currentLoopData = $data['division']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>"><?php echo e($row->division_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="district" id="districts" class="form-control find_search_button districts">
                        <option value="">Select District</option>
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="upazila" id="upazillas" class="form-control find_search_button">
                        <option value="">Select Upazila</option>
                    </select>
                </span>
                
                <span class="input-group-addon" id="basic-addon1"> 
                    <button class="col-xs-12 btn btn-lg" style="background-color: red">
                        <i class="fa fa-search"> Search</i>
                    </button>
                </span>
            </div>
        </form>
</header>

        
    </div>
</div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
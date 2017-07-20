<?php $__env->startSection('title', 'Find Hospitals'); ?>
<?php $__env->startSection('pageTitle', 'Find Hospitals'); ?>
<?php $__env->startSection('parentName', 'Health'); ?>
<?php $__env->startSection('content'); ?>
<div class="find_hospital">
    <div class="container">  
        <h2 class="find_hospital_title">Find Doctor</h2>
        <p style="margin-top: 120px"></p>
        <form class="form-horizontal" method="post" action="<?php echo e(url('/view-doctor')); ?>">
            <?php echo csrf_field(); ?> 
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="divisions" class="form-control find_search_button">
                        <option value="Dhaka">Select Specialities</option>
                        <?php $__currentLoopData = $data['doctor_specialities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                        <option value="<?php echo e($row->name); ?>"><?php echo e($row->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="divisions" class="form-control find_search_button">
                        <option value="Dhaka">Select Upazila</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Khulna">Dhaka</option>
                    </select>
                </span>
                <input type="text" class="col-xs-12 form-control find_search" placeholder="Hospital name" aria-describedby="basic-addon1">
                <span class="input-group-addon" id="basic-addon1">
                        <button class="col-xs-12 btn btn-xs btn-search find_search_button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
            </div>
        </form>
    </div>
</div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
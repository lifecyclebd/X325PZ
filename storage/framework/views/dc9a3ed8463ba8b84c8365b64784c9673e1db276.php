<?php $__env->startSection('title', 'Find Hospitals'); ?>
<?php $__env->startSection('pageTitle', 'Find Hospitals'); ?>
<?php $__env->startSection('parentName', 'Health'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
 
</style>
<div class="find_hospital">
    <div class="container">  
        <p style="margin-top: 60px"></p>
        <header class="jumbotron hero-spacer" style="    background-color: rgba(255, 0, 0, 0.43); border-radius: 10px;">
        <h2 class="find_hospital_title" >বিশেষজ্ঞ ডাক্তারের পরামর্শ পেতে আপনার নিকটবর্তী ডাক্তার খুজুন
</h2>
            <h3 class="find_hospital_title">ডাক্তারের সাথে সরাসরি কথা বলতে  ০১৭০৯৮৪৮৪৮২ কল করুন </h1>
            <p> </p>
            <p></p> 
                    <form class="form-horizontal" method="post" action="<?php echo e(url('/view-doctor')); ?>">
            <?php echo csrf_field(); ?> 
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="speacilist" class="form-control find_search_button divisions" >
                        <option value="">Select Specialist</option>
                        <?php $__currentLoopData = $data['doctor_specialities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="division" class="form-control find_search_button divisions" >
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
                    <input type="submit"  class="col-xs-12 btn btn-lg" style="background-color: red; color: white">
                         
                </span>
            </div>
        </form>
        </header>

    </div>
</div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
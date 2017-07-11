<?php $__env->startSection('content'); ?>
<div class="container"> 
    <div class="col-md-offset-2 col-md-8">
        <p class="text-center" style="font-size: 25px;">Please fill up the form</p>
        <form class="form-horizontal" method="post" action="<?php echo e(url('admin/doctor/write')); ?>">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="age" placeholder="Age">
                </div> 
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="last_blood_pressure" placeholder="Last checked blood presure">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="any_disease" placeholder="Any previous diseases">
                </div>
                <div class="col-md-6 ">
                    <input type="email" class="form-control write_to_doctor" name="email" placeholder="Email">
                </div>
                <div class="col-md-6 ">
                    <input type="number" class="form-control write_to_doctor" name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"  style="  margin-top: 50px;">
                    <textarea class="form-control" style="border: 5px solid #c9302c;" name="problems" rows="10" placeholder="Write your problem"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <input type="submit" name="submit" value="Submit" class="submit-btn form-control">
                </div>
            </div>
        </form>
    </div>
</div> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
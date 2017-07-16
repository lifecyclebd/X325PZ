<?php $__env->startSection('title', 'Blood Request'); ?>
<?php $__env->startSection('pageTitle', 'Blood Request'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>

<div id="donor-register">
<div class="container"> 

    <div class="col-md-offset-2 col-md-8" style="background: rgba(255, 255, 255, 0.78); padding: 40px;">
            <?php if(isset($_GET['send_request_suceessfully'])){ ?>
    <p class="label label-success label-lg pull-right" style="height: 30px;padding: 10px; font-size: 12px">Send Blood Request Successfully, We will inform you by cell phone within 30 minutes. Keep faith on Allah.</p>
    <?php } ?>
        <h3 class="life_title">Send a blood request</h3>
        <form class="form-horizontal" method="post" action="<?php echo e(url('/blood-request-store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-6">
                              
                    <select name="request_blood_group" class="form-control write_to_doctor">
                        <option>--- Select Request Blood Group ---</option>
                        <option value="A+">A+</option>
                        <option value="AB+">AB+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="AB-">AB-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option> 
                    </select>
                    
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="patient_hospital" placeholder="Patient Hospital">
                </div> 
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="patient_phone" placeholder="Patient Phone">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="patient_place" placeholder="Patient Location">
                </div>
                <div class="col-md-6 ">
                    <input type="number" class="form-control write_to_doctor" name="number_blood_bag" placeholder="Blood Bag">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="disease" placeholder="Disease">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="relation" placeholder="Relation">
                </div>
                <div class="col-md-6 ">
                    <input type="date" class="form-control write_to_doctor" name="opration_time" title="Operation Date" placeholder="Operation Time">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <input type="submit" name="submit" value="Send Request" class="submit-btn form-control">
                </div>
            </div>
        </form>
    </div>
</div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
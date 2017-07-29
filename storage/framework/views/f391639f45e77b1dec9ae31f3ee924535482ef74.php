<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('pageTitle', 'About Us'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small> Give Blood, Save life</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
 
            <div class="col-md-4">
                <img class="img-responsive" src="<?php echo e(asset('/')); ?>/public/frontend/images/donor_register.jpg" alt="">
            </div>

            <div class="col-md-8">
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                 
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row" style="margin-bottom: 20px;">

            <div class="col-lg-12">
                <h3 class="page-header">Our Services</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <div style="min-height: 200px">
                    <h3>Blood Bank</h3>
                    <p align="justify">A blood bank is a center where blood gathered as a result of blood donation is stored and preserved for later use in blood transfusion.
                    <br>The world's first blood donor service was established in 1921 by the secretary of the British Red Cross, Percy Oliver
                    </p>
                </div>

                <a href="#" class="btn-danger pull-right" style="padding: 5px">Read More</a>
            </div> 

            <div class="col-sm-3 col-xs-6">
                <div style="min-height: 200px">
                    <h3>Doctor Help</h3>
                    <p align="justify">Ask a doctor online and get your health queries answered for free. Now Consult with 5000+ Online Doctors only on Lifecycle.<br>Specialist doctors from icliniq gives medical advice to thousands of patients online every day. 
                    </p>
                </div>
                <a href="#" class="btn-danger pull-right" style="padding: 5px">Read More</a>
                
            </div> 

            <div class="col-sm-3 col-xs-6">

                <div style="min-height: 200px">
                <h3>Hire Ambulance</h3>
                    <p align="justify">Patient transport services offers private ambulance hire and patient transport to transfer stretcher bound, wheelchair or walk-on patients to and from hospital, doctor or clinic appointments.<br> <br> 

                    </p>
                </div>
                <a href="#" class="btn-danger pull-right" style="padding: 5px">Read More</a>
                
            </div> 
            <div class="col-sm-3 col-xs-6">

                <div style="min-height: 200px">
                    <h3>Health Tips</h3>
                    <p align="justify">Get health tips, latest health news, articles and studies on all health-related concerns, read the latest news related to health care and fitness.<br><br><br>

                    </p>
                </div>
                <a href="#" class="btn-danger pull-right" style="padding: 5px">Read More</a>
                
            </div> 

        </div>
        <!-- /.row -->
        <div class="row">
        <h3>Blood Stock</h3><hr>
        <p align="justify">
        Blood demand is unpredictable and even differs with each blood type. For example O- blood can be given to patients with all blood types. AB+ can only be given to patients with AB+. To be ready to help patients in all Scottish hospitals, whenever they need it, we aim to stock six days’ worth of each blood type at all times.
<br><br>
Blood has a very short shelf life and can’t be stockpiled, so every day we depend on donors to help maintain our blood stocks.<br>
<br>
Our blood stocks are updated online every weekday, so you can always see which blood types we need most.
</p>
        </div>

    

    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
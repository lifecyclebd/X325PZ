<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/css/round-about.css')); ?>"> 
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Home </h3>
            </div>

            <div class="box-body">
                <!-- form start -->
                <!-- Team Members Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Our Team</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                        <h3>John Smith
                            <small>Job Title</small>
                        </h3>
                        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                        <h3>John Smith
                            <small>Job Title</small>
                        </h3>
                        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                        <h3>John Smith
                            <small>Job Title</small>
                        </h3>
                        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                        <h3>John Smith
                            <small>Job Title</small>
                        </h3>
                        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                        <h3>John Smith
                            <small>Job Title</small>
                        </h3>
                        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                        <h3>John Smith
                            <small>Job Title</small>
                        </h3>
                        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                    </div>
                    <!-- form close -->
                </div> 
            </div>
            <!-- /.box -->

    </section>
    <!-- /.content -->

</div>


<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
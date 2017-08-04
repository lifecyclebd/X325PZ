<?php $__env->startSection('title', 'Ambulance'); ?>
<?php $__env->startSection('pageTitle', 'Ambulance'); ?>
<?php $__env->startSection('parentName', 'Health'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
.btn {
    border-radius: 15px;
    background-color: #cd0303;
    color: white;
    width: 40%;
    padding: 10px;
    height: 40px;
    border: 2px solid #cd0303;
} 
.btn-ambulance{
    background: rgb(21, 148, 21);
    border: 2px solid #19ad19;
    height: 50px;
    color: white;
    padding: 20px;
    border-radius: 10px;
}
</style>
<div id="donor-register">
    <div class="container" style="background-color: rgba(204, 204, 204, 0.58);color: white;">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer" style="background-color: rgba(224, 38, 39, 0.25);">
            <h1>0০১৭০৯৮৪৮৪৮৩</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p></p>
            <div style="margin-top:30px">
            <a class="btn-ambulance">Call for Ambulance</a>
            </div>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="wisth:300px; height:200px" src="<?php echo e(asset('/')); ?>/public/frontend/images/ablulance.jpg" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Hire Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="wisth:300px; height:200px" src="<?php echo e(asset('/')); ?>/public/frontend/images/ablulance.jpg" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Hire Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="wisth:300px; height:200px" src="<?php echo e(asset('/')); ?>/public/frontend/images/ablulance.jpg" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Hire Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="wisth:300px; height:200px" src="<?php echo e(asset('/')); ?>/public/frontend/images/ablulance.jpg" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Hire Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
 

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
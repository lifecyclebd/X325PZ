<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('pageTitle', 'About Us'); ?>
<?php $__env->startSection('parentName', 'Home'); ?>
<?php $__env->startSection('content'); ?>
 
 <div class="More_about_info" style="margin-top: -30px">
    <div class="container-fluid" style="background-color: gray;height: auto;"> 
        <h3 class="life_title " style="margin-bottom:50px;color: white">More about blood</h3> 

        <?php $__currentLoopData = $data['all_blood_info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="col-md-3 col-sm-6 col-xs-12" style="border-radius: 8px">
            <div class="info_abou_blood " style="min-height:350px;color: black">                 
                <p class="title"><?php echo e($row->title); ?></p>
                <p class="text-justify" style="padding:10px"><?php echo substr($row->description,0,500); ?></p>
            </div>
            <div class="text-center more_blood_bottom">
                <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($row->id); ?>"><button class="btn_read_more">
                আরো জানতে </button></a>              
            </div> 
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>
<div class="" style="width: 100%;">
    <div class="col-md-6 become_donor">
        <div class="col-md-offset-2 col-md-8">
            <h2>Become a volenter </h2>
            <p class="text-justify ">
                A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
            </p>
            <div class="pull-center"> 
                <button class="join_now hidden-xs"   data-toggle="modal" data-target="#joinVolentier">Join Now</button>

            </div>

        </div>               
    </div>
    <div class="col-md-6 make_donation">
        <div class="col-md-offset-2 col-md-8">
            <h2>Make a Donation </h2>
            <p class="text-justify" style="color:white;">
                A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components
            </p>
            <div class="pull-center">

                <button class="donate_now hidden-xs" data-target="#makeDonation" data-toggle="modal">Donate Now</button>

            </div>    
        </div>

    </div>
</div>   
<div class="clearfix"></div>     
 
 
<!-- Modal -->
<div class="modal fade" id="joinVolentier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Join as Volentier</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body"> 
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contribution</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="Contribution"></textarea>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .margin{
        margin: 0 auto;
    }
</style>
 
 
 
<div class="modal fade" id="makeDonation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Make a donation</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body"> 
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Contribution</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="Contribution"></textarea>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_link'); ?> 



<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript_code'); ?>


<script type="text/javascript">
    $(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 10000
        })
        $('.fdi-Carousel .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
    });



    $(document).ready(function () {
        $('.navbar a.dropdown-toggle').on('click', function (e) {
            var elmnt = $(this).parent().parent();
            if (!elmnt.hasClass('nav')) {
                var li = $(this).parent();
                var heightParent = parseInt(elmnt.css('height').replace('px', '')) / 2;
                var widthParent = parseInt(elmnt.css('width').replace('px', '')) - 10;

                if (!li.hasClass('open'))
                    li.addClass('open')
                else
                    li.removeClass('open');
                $(this).next().css('top', heightParent + 'px');
                $(this).next().css('left', widthParent + 'px');

                return false;
            }
        });
    });

 
</script>  



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
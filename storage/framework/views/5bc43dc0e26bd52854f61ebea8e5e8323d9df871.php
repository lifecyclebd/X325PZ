<?php echo $__env->make('frontend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.sub_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php echo $__env->yieldContent('content'); ?>







<?php echo $__env->make('frontend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->yieldContent('script_link'); ?>


<?php echo $__env->yieldContent('javascript_code'); ?>







<!-- /.content-wrapper -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".divisions").change(function () {
            var classid = $(this).val();
            // alert(classid);
            $("#districts").html('');
            $.ajax({
                url: "<?php echo e(url('admin/donor/get_district')); ?>" + '/' + classid,
                type: "GET",
                dataType: "html",
                success: function (data) {
                    //    alert(data);
                    $("#districts").append(data);
                }
            });
        });
    });


    $(document).ready(function () {
        $(".districts").change(function () {
            var classid = $(this).val();
            // alert(classid);
            $("#upazillas").html('');
            $.ajax({
                url: "<?php echo e(url('admin/donor/get_upazilla')); ?>" + '/' + classid,
                type: "GET",
                dataType: "html",
                success: function (data) {
                    // alert(data);
                    $("#upazillas").append(data);
                }
            });
        });
    });

       $(document).ready(function () {
        $(".is_active").click(function () {
              $(this).addClass("active");
        });
    });

   </script>
   
</body>
</html>
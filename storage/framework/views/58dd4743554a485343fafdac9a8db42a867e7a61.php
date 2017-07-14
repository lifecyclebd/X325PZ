<?php $__env->startSection('title', 'Search Hospitals'); ?>
<?php $__env->startSection('pageTitle', 'Search Hospitals'); ?>
<?php $__env->startSection('parentName', 'Health'); ?>
<?php $__env->startSection('content'); ?>
<div class="all_hospitals">
    <div class="container">   

        <form class="form-horizontal" method="post" action>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="divisions" class="form-control find_search_button">
                        <option value="Dhaka">Select Division</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Khulna">Dhaka</option>
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
        <hr>
        <div class="row" style="min-height: 500px;">
            <div class="col-md-3 col-xs-12">
                <h2>Summary</h2>
                <ul class="list-group">
                    <li class="list-group-item">Total Hospital <span class="badge">12</span></li>
                    <li class="list-group-item">Total Doctor <span class="badge">5</span></li>
                    <li class="list-group-item">Area <span class="badge">Dhaka</span> <span class="badge">Khulna</span> </li>
                </ul>
            </div>
            <div class="col-md-9 col-xs-12">
                <h2>Hospital List</h2>
                <table class="table table-striped table-bordered example1" id="example1">
                    <thead>
                        <tr style="text-align: center">
                            <th>SL</th><th>Hospital Name</th><th>Chamber</th><th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data['hospital_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($row->id); ?></td>  
                            <td>
                                <span style="float: left; margin-right: 10px;">

                                    <i class="fa fa-home" style="font-size: 20px;"></i>
                                </span>
                                <span style="font-weight: bold; float:left">
                                    <a href="#"> <?php echo e($row->hospital_name); ?></a>
                                </span></td>
                                
                                <td>
                                <i class="fa fa-map-marker"></i>
                                <?php echo e($row->location); ?>

                            </td>
                            <td><?php echo e($row->phone); ?></td>
                        </tr>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  

 
<!-- DataTables -->
<script src="<?php echo e(asset('public/AdminLTE/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
 <script src="<?php echo e(asset('public/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
 
<script type="text/javascript">
   $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
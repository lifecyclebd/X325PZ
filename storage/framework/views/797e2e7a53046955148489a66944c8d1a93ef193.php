<?php $__env->startSection('content'); ?>
<style type="text/css">

    #map {
        height: 100%;
    } 

    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    #map #infowindow-content {
        display: inline;
    }



    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }




    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }
    #target {
        width: 345px;
    }
</style>


<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update Doctor </h3>

                <div class="box-tools pull-right">
                    <a href="<?php echo e(url('/admin/doctor/view')); ?>" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>

            <div class="box-body">
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo e(url('/admin/doctor/update')); ?>" method="post" enctype= "multipart/form-data"> 
                    <?php echo csrf_field(); ?>

                  
                    <?php $doctor_list=$data['doctor'];?>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Hospital Name</label>
                        <div class="col-md-6">
                            <select name="hospital" class="form-control">
                                <option>---select---</option>
                                <?php $__currentLoopData = $data['hospital']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>" 
                                        <?php if($doctor_list->hospital==$value->id): ?> selected="selected" <?php endif; ?>>
                                        <?php echo e($value->hospital_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Doctor Namel</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" value="<?php echo e($data['doctor']->name); ?>" name="name"  autofocus>
                            <input type="hidden" value="<?php echo e($data['doctor']->id); ?>" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Division</label>
                        <div class="col-md-6">
                            <select name="division" class="form-control find_search_button divisions" required>
                                <option value=""><?php echo e($data['doctor']->division); ?></option>
                                    <?php $__currentLoopData = $data['division']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->division_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">District</label>
                        <div class="col-md-6">
                            <select name="district" id="districts" class="form-control find_search_button districts">
                        <option value=""><?php echo e($data['doctor']->district); ?></option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Upazila</label>
                        <div class="col-md-6">
                            <select name="upazila" id="upazillas" class="form-control find_search_button">
                        <option value=""><?php echo e($data['doctor']->upazila); ?></option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Speacility</label>
                        <div class="col-md-6">
                            <select name="speacilist" class="form-control">
                                <option><?php echo e($data['doctor']->speacilist); ?></option>
                                <?php $__currentLoopData = $data['specility']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"  <?php if($doctor_list->speacilist==$value->id): ?> selected="selected" <?php endif; ?> ><?php echo e($value->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Designation</label>
                        <div class="col-md-6">
                            <select name="designation" class="form-control">
                                <option><?php echo e($data['doctor']->designation); ?></option>
                                <?php $__currentLoopData = $data['designation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"  <?php if($doctor_list->designation==$value->id): ?> selected="selected" <?php endif; ?> ><?php echo e($value->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id="name" type="email" class="form-control" value="<?php echo e($data['doctor']->email); ?>" name="email"  autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Phone</label>
                        <div class="col-md-6">
                            <input id="name" type="number" class="form-control" value="<?php echo e($data['doctor']->phone); ?>" name="phone"  autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Gender</label>
                        <div class="col-md-6">
                            <input id="name" <?php if ($data['doctor']->gender == 'male') { echo 'checked';}?> type="radio" name="gender" value="<?= $data['doctor']->gender; ?>" >Male &nbsp;&nbsp;&nbsp;   
                            <input id="name" <?php if ($data['doctor']->gender == 'female') { echo 'checked';}?> type="radio" name="gender" value="<?php echo e($data['doctor']->gender); ?>" >Female


                             

                        </div>
                    </div>
                    <div class="form-group" style="margin:30px">
                        <label for="name" class="col-md-4 control-label">Profile Photo</label>
                        <div class="col-md-3">
                            <input id="name" type="file" class="form-control" name="profile_photo"  autofocus>
                        </div> 
                        <div class="col-md-5">
                            <img style="width:60%; height: auto" src="<?php echo e(asset('/')); ?>public/images/profile/<?php echo e($data['doctor']->profile_photo); ?>" class="img img-resposive">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Preasent Address</label>
                        <div class="col-md-6">
                            <textarea name="preasent_address" class="form-control"><?php echo e($data['doctor']->preasent_address); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Chamber Address</label>
                        <div class="col-md-6">
                            <textarea name="chamber_address" class="form-control"><?php echo e($data['doctor']->chamber_address); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Doctor Detail</label>
                        <div class="col-md-6">
                            <textarea name="doctor_detail" class="form-control"><?php echo e($data['doctor']->doctor_detail); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update Doctor
                            </button>
                        </div>
                    </div>

                </form>
                <!-- form close -->
            </div> 
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

</div>

<script>
    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
            zoom: 13,
            mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        // alert(input);
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        // map.addListener('bounds_changed', function() {
        //   searchBox.setBounds(map.getBounds());
        //  });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function (marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZaGo1-bLGV49YimZizEHF4Ny_4gxGG3E&libraries=places&callback=initAutocomplete"
async defer></script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
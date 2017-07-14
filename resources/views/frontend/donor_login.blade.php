@extends('layouts/front')

@section('content')
<!--about-->
<style type="text/css">
    input{color:white;}
    select{color:white;}
    textarea{color:white;}
    form.login{
    background-color: rgba(224, 224, 224, 0.41);
    height: 300px;
    width: 50%;
    margin: 0 auto;
    padding: 10px;
    padding-top: 50px;
    border-radius: 10px;
    }
</style>
<div id="donor-register">
    <div class="container" style="height: 500px">
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content donor_content">

                <!-- Default box -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h2 class="box-title text-center">Login </h2>
                    </div>

                    <div class="box-body">
                        <!-- form start -->
                        <form class="form-horizontal login" action="{{url('/donor/store')}}" method="post" enctype= "multipart/form-data"> 
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="name" type="email" class="form-control" name="email" placeholder="Email"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="name" type="password" class="form-control" name="Password" placeholder="Password" autofocus>
                                </div>
                            </div>
 
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Donor
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
    </div>
</div>



@endsection
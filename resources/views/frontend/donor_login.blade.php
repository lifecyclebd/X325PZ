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
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    }
    input[type="text"].search_place:focus, input[type="password"]:focus, input[type="email"]:focus, textarea:focus {
    background: none;
    outline: none;
    color: white;
}
h2.login_title{
    margin-top: 30px;
    width: 50%;
    margin: 0 auto;
    background: rgb(237, 32, 36);
    height: 45px;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;

}
</style>
<div id="donor-register">
    <div class="container" style="height: 500px">
        <div class="content-wrapper" style="margin-bottom: 50px;">

            <!-- Main content -->
            <section class="content donor_content">

                <!-- Default box -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    </div>

                    <div class="box-body" style="margin-top:50px">
                        <!-- form start -->
                        <h2 class="box-title text-center login_title">Login </h2>
                        <form class="form-horizontal login" action="{{url('/donor/login')}}" method="post" enctype= "multipart/form-data"> 

                        
                            {!! csrf_field() !!}
                            <p align="center" style="color: #eee"><?php  if(isset($_GET['message'])){echo $_GET['message']; } ?></p>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="name" type="email" class="form-control" name="email" placeholder="Email"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="name" type="password" class="form-control" name="password" placeholder="Password" autofocus>
                                </div>
                            </div>
 
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="submit-btn" style="width: 150px;font-size: 15px;    height: 35px;">
                                       Login
                                    </button>
                                </div>
                            </div>
                            <div style="padding: 10px;height: 37px;margin: 10px;border-top: 1px solid #db666f;">
                            <div style="float: left"><a href="#" style="color:white">Forgot your password?</a> </div>
                            <div style="float: right;"><a href="{{url('/')}}/donor-register" style="color:white">New donor?  Sign Up</a> </div>
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
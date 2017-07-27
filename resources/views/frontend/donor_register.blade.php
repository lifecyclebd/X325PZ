@extends('layouts.front')

@section('content')
<!--about-->
<style type="text/css">
    input{color:white;}
    select{color:white;}
    textarea{color:white;}

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
    #pac-input:focus{
        background:none;
        color: white;
    }
    form.login{
        background-color: rgba(224, 224, 224, 0.23);
    height: 100%;
    width: 100%;
    margin: 0 auto;
    padding: 10px;
    padding-top: 50px; 
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    }

    input:focus{
        background: none;
    }

    input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, textarea:focus {
    background: none;
    outline: none;
    color: #fff;
}

input[type="text"], input[type="password"], input[type="email"], textarea {

    background: none;
    }
    select{
        background: none;
    }
</style>
<div id="donor-register" style="height: auto;">
    <div class="container">
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content donor_content">

                <!-- Default box -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h2 class="box-title text-center">Registration </h2>
                    </div>

                    <div class="box-body">
                        <!-- form start -->
                        <form class="form-horizontal login" action="{{url('/donor/signup')}}" method="post" enctype= "multipart/form-data"> 
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">First Name</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="fname" placeholder="First Name"  autofocus>
                                </div>


                                <label for="name" class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="lname" placeholder="Last Name"  autofocus>
                                </div>

                            </div> 

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="name" type="email" class="form-control" placeholder="email" name="email"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="name" placeholder="Password" type="password" class="form-control" name="password"  autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">
                                    <input id="name" style="width: 20px; height: 20px;" type="radio" name="gender" value="male" >&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">
                                    Male</span> &nbsp;&nbsp;&nbsp;
                                    <input id="name"  style="width: 20px; height: 20px;"  type="radio" name="gender" value="female" >&nbsp;&nbsp;&nbsp;<span style="font-size: 20px">Female</span>
                                    <input type="hidden" value="67890" name="donner_id">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Date of Birth</label>
                                <div class="col-md-2">
                                    <input id="name" type="date" class="form-control" name="birth_date"  autofocus>
                                </div> 
                                <label for="name" class="col-md-2 control-label">Last Donate</label>
                                <div class="col-md-2">
                                    <input id="name" type="date" class="form-control" name="last_donation"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-6">
                                    <input id="name" type="number" class="form-control" name="phone"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Division</label>
                                <div class="col-md-2">
                                    <select name="division" class="divisions form-control">

                                        @foreach($data['division'] as $row)
                                        <option value="{{$row->id}}">{{$row->division_name}}</option>
                                        @endforeach 
                                    </select>
                                </div> 
                                <label for="email" class="col-md-2 control-label">District</label>

                                <div class="col-md-2">
                                    <select name="district" id="districts" class="districts form-control"> 
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Thana</label>

                                <div class="col-md-2">
                                    <select name="thana" id="upazillas" class="form-control"> 
                                    </select>

                                </div>

                                <label class="col-md-2 control-label">Post Code</label>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" name="post_code" placeholder="Post Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6" style="height: 150px;">
                                    <input name="address" id="pac-input" class=" form-control" type="text" placeholder="Search Box" style="background: rgb(79, 0, 0);">
                                    <div id="map" style="overflow: hidden;"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Blood Group</label>

                                <div class="col-md-6">
                                    <select name="blood_group" class="form-control">
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
                            </div>


 
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-5">
                                    <button type="submit" class=" col-md-4 btn btn-success">
                                        Sign Up
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
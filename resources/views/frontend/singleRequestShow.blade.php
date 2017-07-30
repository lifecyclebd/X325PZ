@extends('layouts/front')
 

@section('content')
<div class="container">

<div class="wrapper" style="height: auto; min-height: 100%;">

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <div style="margin-top: 30px;">
    </div>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img style="width: 100%; height: auto;" class="img-responsive img-circle img" src="{{$data['donor']->pic_path}}" alt="User profile picture">


              <span style="float: left"> 
                <img  class="img-responsive img-circle img" src="{{url('/')}}/public/images/available.png"  style="width:28px; height: 28px;" >
                </span>
              <span style="float: left; font-size: 20px; padding: 5px">
                {{$data['donor']->fname}} {{$data['donor']->lname}}  
               <span style="clear: both;"></span> 
              <hr>
              <p class="text-muted text-center" style="font-weight:bold">{{$data['donor']->address}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Blood Group</b> <a class="pull-right">{{$data['donor']->blood_group}}</a>
                </li>
                <li class="list-group-item">
                  <b>Last Donation Date</b> <a class="pull-right">{{$data['donor']->last_donation}}</a>
                </li>
                <li class="list-group-item">
                  <b>Number of Donation</b> <a class="pull-right">{{$data['donor']->donations_number}}</a>
                </li>
                <li class="list-group-item">
                  <b>Any Diseases</b> <a class="pull-right">13,287</a>
                </li>
              </ul> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blood Donate History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
            <table class="table table-bordered">
              <tr><td>SL</td><td>Donate Date</td><td>Place</td></tr>
              <tr><td>1</td><td>1st Jan 2016</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td></tr>
              <tr><td>2</td><td>23 April 2017</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td></tr>
              <tr><td>3</td><td>1 June 2017</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td></tr>
            </table> 
            </div>
            <!-- /.box-body -->
          </div>


          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blood Request History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
            <table class="table table-bordered">
              <tr><td>SL</td><td>Donate Date</td><td>Blood Group</td><td>Place</td></tr>
              <tr><td>1</td><td>1st Jan 2016</td><td>A+</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td></tr>
              <tr><td>2</td><td>23 April 2017</td><td>AB+</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td></tr>
              <tr><td>3</td><td>1 June 2017</td><td>AB-</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td></tr>
            </table>
              

             
            </div>
               <strong><i class="fa fa-map-marker margin-r-5"></i> Present Location</strong>

              <p class="text-muted">Malibag, Dahaka-1213</p> 
          </div>




          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class=""><a href="#activities" data-toggle="tab">Activity</a></li>
              <li><a href="#newsfeed" data-toggle="tab">News Feed</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li> 
              <li><a href="#changepassword" data-toggle="tab">Change Password</a></li> 
              <li><a class="" href="#inbox" data-toggle="tab">Inbox  <span class="badge badge-danger">5</span></a></li>
              <li><a href="#blood_request" data-toggle="tab">Blood Request  <span class="badge badge-danger">15</span></a></li> 
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="activities">
                <h3 class="life_title">Personal Activities</h3>
                  <table class="table table-bordered">
                      <tr><td>SL</td><td>Purpose</td><td>Short Message</td><td>Published</td> <td>Status</td></tr>
                      @php $i=1; @endphp
                    @foreach($data['activities'] as $row)
                      <tr>
                      <td>{{$i}}</td>
                      <td>{{$row->purpose}}</td>
                      <td>{{$row->short_message}}</td>
                      <td>
                      <?php $newDate = date("d-m-Y H:m:s", strtotime($row->created_at)); ?>
                      {{$newDate}}</td>
                      <td>
                      <a href=""><i class="fa fa-trash" style="font-size: 20px;"></i></a>

                      <a href=""><i class="fa fa-clock-o" style="font-size: 20px;"></i></a>

                      </td>
                      </tr>
                      @php $i++; @endphp
                      @endforeach
                      </table>
              </div>

            
              <div class="tab-pane" id="newsfeed">
              <h3 class="life_title">News Feed</h3>
              <table class="table table-bordered" class="example1">
                <tr><th>SL</th><th>Published</th><th>Message</th><td>Operation</td></tr>
                <tr>
                <th>1</th>
                <th><span class="bg-red" style="color:red"> 10 Feb. 2014 <i class="fa fa-clock-o"></i> 12:05 </span></th>
                <th><a href="#">Support Team</a> sent you an email</th><td><a href="#">Unread</a></td>
                </tr>


              </table>
                <!-- The timeline -->
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="changepassword">
              <h3 class="life_title">Change Password</h3>
                
                    <form class="form-horizontal login" action="{{url('/donor/store')}}" method="post" enctype= "multipart/form-data"> 
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Previous Password</label>
                                <div class="col-md-8">
                                    <input id="name" type="password" class="form-control" name="fname" placeholder="Previous Password"  autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">New Password</label>
                                <div class="col-md-8">
                                    <input id="name" type="password" class="form-control" name="lname" placeholder="New Password"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input id="name" type="password" class="form-control"  name="email"  autofocus placeholder="Confirm Password">
                                </div>
                            </div>
                            </form>
                
              </div>
              <!-- /.tab-pane -->

              

              <div class="tab-pane" id="settings"> 

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
                  #pac-input:focus{
                      background:none;
                      color: white;
                  }
                  form.login{ 
                  height: 100%;
                  width: 100%;
                  margin: 0 auto;
                  padding: 10px;
                  padding-top: 50px; 
                  border-top-right-radius: 5px;
                  border-top-left-radius: 5px;
                  }

                  

                  input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, textarea:focus {
                  background: none;
                  outline: none; 
              }
              </style>
<div>

                <!-- Default box -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h2 class="box-title text-center">Update your Profile </h2>
                    </div>

                    <div class="box-body">
                        <!-- form start -->
                        <form class="form-horizontal login" action="{{url('/donor/store')}}" method="post" enctype= "multipart/form-data"> 
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">First Name</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" value="{{$data['donor']->fname}}" name="fname" placeholder="First Name"  autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" value="{{$data['donor']->lname}}" name="lname" placeholder="Last Name"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input id="name" type="email" class="form-control" value="{{$data['donor']->email}}" name="email"  autofocus>
                                </div>
                            </div>

                            


                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8">
                                    <input id="name" type="radio" name="gender" value="male" >Male &nbsp;&nbsp;&nbsp;
                                    <input id="name" type="radio" name="gender" value="female" >Female
                                    <input type="hidden" value="87890" name="donner_id">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Date of Birth</label>
                                <div class="col-md-4">
                                    <input id="name" type="date" class="form-control" value="{{$data['donor']->birth_date}}" name="birth_date"  autofocus>
                                </div> 
                                <label for="name" class="col-md-2 control-label">Last Donate</label>
                                <div class="col-md-2">
                                    <input id="name" type="date" value="{{$data['donor']->last_donation}}" class="form-control" name="last_donation"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-8">
                                    <input id="name" type="number" value="{{$data['donor']->phone}}" class="form-control" name="phone"  autofocus>
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
                                    <input type="number" value="{{$data['donor']->post_code}}"  class="form-control" name="post_code" placeholder="Post Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Address</label>

                                <div class="col-md-8" style="height: 150px;">
                                    <input name="address" id="pac-input" class=" form-control" type="text" placeholder="Search Box" style="background: rgb(79, 0, 0);">
                                    <div id="map" style="overflow: hidden;"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Blood Group</label>

                                <div class="col-md-2">
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
                                <label for="email" class="col-md-2 control-label">Profile Photo</label>

                                <div class="col-md-2">
                                    <input type="file" class="form-control"  name="pic_path" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"  value="{{$data['donor']->fb_url}}"   class="col-md-4 control-label">FB Url</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="fb_url" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Web url</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="web_url" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Called Date</label>

                                <div class="col-md-2">
                                    <input type="date" class="form-control"  name="called_date" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Called Today</label>

                                <div class="col-md-2">
                                    <input type="date" class="form-control"  name="called_today" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Religion</label>

                                <div class="col-md-2">
                                    <select name="religion" class="form-control">
                                        <option value="Muslim">Muslim</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div> 
                                <label for="email" class="col-md-2 control-label">Is Physically Disable</label>

                                <div class="col-md-2">
                                    <select name="is_physically_disble" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Nationality</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="nationality" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">NID</label>

                                <div class="col-md-2">
                                    <input type="number" class="form-control"  name="nid" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Age</label>

                                <div class="col-md-2">
                                    <input type="number" class="form-control"  name="age" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Profile Visible</label>

                                <div class="col-md-2">
                                    <select name="pro_visible" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Latitude</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="latitude" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Longitude</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="longitude" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Last Latitude</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="lastLat" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Last Longitude</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="lastLng" />

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Rank</label>

                                <div class="col-md-2">

                                    <input id="password" type="text" class="form-control" name="rank" >
                                </div> 
                                <label for="email" class="col-md-2 control-label">Status</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control"  name="status" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Number of Donate</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control"  name="donations_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Updat
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- form close -->
                    </div> 
                </div>
                <!-- /.box --> 

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
 



              <div class="tab-pane" id="inbox"  >
                <h3 class="life_title">Mail Box</h3>
                    <table class="table table-bordered">
                      <tr><td>SL</td><td>Donate Date</td><td>Blood Group</td><td>Place</td><td>Status</td></tr>
                      @foreach($data['messages'] as $row)

                      <tr><td>1</td><td>1st Jan 2016</td><td>A+</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td><td>Approved</td></tr>


                      @endforeach
                  </table>
              </div>



              <div class="tab-pane" id="blood_request">
                <h3 class="life_title">Blood Request</h3>
                    <table class="table table-bordered">
                      <tr><td>SL</td><td>Donate Date</td><td>Blood Group</td><td>Place</td><td>Status</td></tr>
                      <tr><td>1</td><td>1st Jan 2016</td><td>A+</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td><td>Approved</td></tr>
                      <tr><td>2</td><td>23 April 2017</td><td>AB+</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td><td>Approved</td></tr>
                      <tr><td>3</td><td>1 June 2017</td><td>AB-</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td><td style="color: orange">Pending</td></tr>
                  </table>
              </div>


          







              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div> 
          <h3 class="life_title">Blood Request</h3>
          <h4>Need: <span class="badge" style="background-color: red">{{ $data['blood_request']->request_blood_group}}</span> Blood..!!</h4>
          <p>If you think, you are fit and available to donate blood Please response..!! It may save a life :)</p> 
          <a class="btn-xs btn-primary" href="{{url('/')}}/singlerequest/agree/{{$data['blood_request']->id}}">Response for Donation</a>
          <a class="btn-xs btn-danger" href="{{url('/')}}/singlerequest/disagree/{{$data['blood_request']->id}}">Unavailable</a> 




        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    <div>
 

</section>
    <!-- /.content -->
  </div>
 
</div>


    </div>


@endsection
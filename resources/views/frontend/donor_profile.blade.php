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
                </span>
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
              <h3 class="
              box-title">Blood Donate History</h3>
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
              <li class="<?php if(!isset($_GET['inbox'])){ echo 'active';} ?>"><a href="#activities" data-toggle="tab">Activity</a></li>
              <li><a href="#newsfeed" data-toggle="tab">News Feed</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li> 
              <li><a href="#changepassword" data-toggle="tab">Change Password</a></li> 
              <li><a class="<?php if(isset($_GET['inbox'])){ echo 'active';} ?>" href="#inbox" data-toggle="tab">Inbox  <span class="badge badge-danger">5</span></a></li>
              <li><a href="#blood_request" data-toggle="tab">Blood Request  <span class="badge badge-danger">15</span></a></li> 
              <li><a href="#to_be_proud" data-toggle="tab">Share Feelings</a></li> 
            </ul>
            <div class="tab-content">
                <div class="tab-pane  <?php if(!isset($_GET['inbox'])){ echo 'active';} ?> " id="activities">
                  <h3 class="life_title">Personal Activities</h3>
                  <table class="table table-bordered">
                      <tr><td>SL</td><td>Donation Date</td><td>Patient Name</td><td>Reasone</td></tr>
                      @php $i=1; @endphp
                    @foreach($data['history'] as $row)
                      <tr>
                      <td>{{$i}}</td>
                      <td>{{$row->donation_date}}</td>
                      <td>{{$row->patient_name}}</td>
                      <td>{{$row->disease}}</td>
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
                          <div class="form-group">
                               
                                  <input id="name" type="submit" class=" pull-right col-md-4 btn btn-primary"  name="changepassword" value="Change Password">
                             
                          </div>
                    </form>
                
              </div>
              <!-- /.tab-pane -->

              

              <div class="tab-pane" id="settings"> 
                <link rel="stylesheet" href="{{ asset('public/css/donorlocation.css') }}">                 
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
                                    <input id="name" type="text" class="form-control" value="{{$data['donor']->fname}}" name="fname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" value="{{$data['donor']->lname}}" name="lname" placeholder="Last Name"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input id="name" type="email" class="form-control" value="{{$data['donor']->email}}" name="email"  >
                                </div>
                            </div>

                            


                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8">
                                    <?php $gndr=$data['donor']->gender?>
                                    <input id="name" type="radio" name="gender" value="Male" >Male &nbsp;&nbsp;&nbsp;
                                    <input id="name" type="radio" name="gender" value="Female" >Female
                                    <input type="hidden" value="87890" name="donner_id">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Date of Birth</label>
                                <div class="col-md-4">
                                    <input id="name" type="date" class="form-control" value="{{$data['donor']->birth_date}}" name="birth_date"  >
                                </div> 
                                <label for="name" class="col-md-2 control-label">Last Donate</label>
                                <div class="col-md-2">
                                    <input id="name" type="date" value="{{$data['donor']->last_donation}}" class="form-control" name="last_donation"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-8">
                                    <input id="name" type="number" value="{{$data['donor']->phone}}" class="form-control" name="phone"  >
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
                                    <input name="address" id="pac-input" value="{{$data['donor']->address}}" class=" form-control" type="text" placeholder="Search Box" style="background: rgb(79, 0, 0);">
                                    <div id="map" style="overflow: hidden;"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Blood Group</label>

                                <div class="col-md-2">
                                    <select name="blood_group" class="form-control">
                                        <option value="{{$data['donor']->blood_group}}">{{$data['donor']->blood_group}}</option>
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
                                <label for="email"    class="col-md-4 control-label">FB Url</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="{{$data['donor']->fb_url}}"  name="fb_url" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Web url</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="{{$data['donor']->web_url}}  name="web_url" />

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Religion</label>

                                <div class="col-md-2">
                                    <select name="religion" class="form-control">
                                        <option value="{{$data['donor']->religion}}">{{$data['donor']->religion}}</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div> 
                                <label for="email" class="col-md-2 control-label">Is Physically Disable</label>

                                <div class="col-md-2">
                                    <select name="is_physically_disble" class="form-control">
                                        <option value="{{$data['donor']->is_physically_disble}}">{{$data['donor']->is_physically_disble}}</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Nationality</label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control" value="{{$data['donor']->nationality}}"  name="nationality" />
                                </div> 
                                <label for="email" class="col-md-2 control-label" >NID</label>

                                <div class="col-md-2">
                                    <input type="number" class="form-control" value="{{$data['donor']->nid}}"  name="nid" />

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Age</label>

                                <div class="col-md-2">
                                    <input type="number" class="form-control" value="{{$data['donor']->age}}"  name="age" />
                                </div> 
                                <label for="email" class="col-md-2 control-label">Profile Visible</label>

                                <div class="col-md-2">
                                    <select name="pro_visible" class="form-control">
                                        <option value="<?php if($data['donor']->is_physically_disble =0) echo 'No'; else echo 'Yes'?>">{{$data['donor']->is_physically_disble}}</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>

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


              <div class="tab-pane" id="to_be_proud">
              <h2 class="life_title">Add your feelings</h2>
                <div class="row" style="background: #eee">
                    <form class="form-horizontal" action="{{url('/donor/tobeproud/store')}}" method="post" style="margin: 10px" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label col-md-2">Donate Date</label>
                      <div class="col-md-4"><input type="date" name="donate_date" class="form-control"></div>
                      <label class="control-label col-md-2">Donate Place</label>
                      <div class="col-md-4"><input type="text" name="donate_place" class="form-control"></div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2">Reason of Proud</label>
                      <div class="col-md-10"><input type="text" name="reason_of_proud" class="form-control"></div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2">Blood Fighter Image</label>
                      <div class="col-md-10"><input type="file" name="pic_path" class="form-control"></div> 
                    </div>
                    <div class="pull-right"><input type="submit" name="Save" value="Save" class="btn btn-primary"></div>
                    </form>

                </div>
    
                    

                  </div> 
 



              <div class="tab-pane <?php if(isset($_GET['inbox'])){ echo 'active';} ?>" id="inbox"  >
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
          <!-- /.nav-tabs-custom -->
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


@section('script_link')


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZaGo1-bLGV49YimZizEHF4Ny_4gxGG3E&libraries=places&callback=initAutocomplete"
        async defer></script> 

@endsection

@section('javascript_code')
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


@endsection
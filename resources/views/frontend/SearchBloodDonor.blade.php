@extends('layouts/front')
@section('title', 'Search Donor')
@section('pageTitle', 'Search Donor')
@section('parentName', 'Home')

@section('content')
<!--about-->
<style type="text/css">
    input{color:white;}
    select{color:white;}
    textarea{color:white;}
</style>
<div id="donor_search_page">
    <div class="container">
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content donor_content" style="min-height: 750px;">

                <!-- Default box -->
                <div class="box box-info">
                    <div class="box-header">
                        <h2 class="text-center">Search Blood Donor </h2>

                    </div>

                    <div class="box-body" >
                        <div style="background-color: #eee !important; margin-top: 10px; padding: 20px; height: 100px;">
                            <form action="{{url('/')}}/view/search-blood-donor" method="post" >
                                {!! csrf_field() !!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <div class="col-md-2">
                                        <select class="form-control divisions" name="division">
                                            <option value="0">Any Divisions</option>
                                            @foreach($data['division'] as $row)
                                            <option value="{{$row->id}}">{{$row->division_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select name="district" id="districts" class="districts form-control"> 
                                            <option value="0">Any district</option>
                                        </select>

                                    </div>
                                    <div class="col-md-2">
                                        <select name="upazila" id="upazillas" class="form-control"> 
                                            <option value="0">Any upazila</option>
                                        </select>

                                    </div>
                                    <div class="col-md-2">
                                        <select name="blood_group" class="form-control">
                                            <option value="0">Any Group</option>
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
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-search pull-right"> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div> 
                        <?php if (isset($data['result'])) { ?>
                            <div class="after_search">
                                <div class="col-md-2" style="color: black">
                                    <h4 style="color: white">Search Summry</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Divisions <span class="badge">All</span></li>
                                        <li class="list-group-item">District <span class="badge">All</span></li>
                                        <li class="list-group-item">Blood Group <span class="badge">AB-</span></li>
                                        <li class="list-group-item">Total Donor <span class="badge">45</span></li>
                                        <li class="list-group-item">Available Donor <span class="badge">15</span></li>
                                        <li class="list-group-item">Search Date-Time: 10:30pm, 22 July, 2017</li>
                                    </ul>
                                </div>
                                <div class="col-md-10">
                                    <h2 class="text-center">Donor List</h2>
                                    <div class="table-responsive">
                                        <table class="table table-responsive table-bordered">
                                            <thead>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Blood Group</th>
                                            <th>Last Date of Donate</th>
                                            <th>Any Dieases?</th>
                                            <th>Current Location</th>
                                            <th>Address</th>
                                            <th>Number of Blood Donate</th>
                                            <th>Operations</th>
                                            </thead>
                                            <tbody>
                                                @foreach($data['result'] as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->fname}} {{$row->lname}}</td>
                                                    <td>{{$row->phone}}</td>
                                                    <td>{{$row->blood_group}}</td>
                                                    <td>{{$row->birth_date}}</td>
                                                    <td>{{$row->last_donation}}</td>
                                                    <td>{{$row->address}}</td>
                                                    <td>453, Green Way Rd, Dhaka</td>
                                                    <td>45</td>
                                                    <td> 
                                                        <a href="#"><i class="fa fa-tasks"></i> </a>  
                                                        <a href="#"><i class="fa fa-envelope"> </i> </a>  
                                                        <a href="#"><i class="fa fa-phone"></i> </a>  
                                                        <a href="#"><i class="fa fa-print"></i></a></td> 
                                                </tr>

                                                @endforeach
                                            </tbody>


                                        </table>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
                    </div> 
                </div>
                <!--                            /.box -->

            </section>
            <!-- /.conte                            nt -->

        </div>

    </div>
</div                        >


<script src="{{ asset('public/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('public/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script> 


@endsection
@extends('layouts/front')

@section('content')
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
        <div class="row">
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
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr style="text-align: center">
                            <th>SL</th><th>Hospital Name</th><th>Chamber</th><th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>  <td>
                                <span style="float: left; margin-right: 10px;">
                                    <img src="images/Home-icon.png" class="img img-responsive" style="width:30px; height: 30px">
                                </span>
                                <span style="font-weight: bold; float:left">
                                    <a href="#"> A-Care Orthopaedic & General Hospital</a>
                                </span></td><td>
                                <i class="fa fa-map-marker"></i>
                                Dhaka, Shahabag-1217
                            </td><td>453, Green Way Rd, Dhaka</td>
                        </tr>  


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  

@endsection


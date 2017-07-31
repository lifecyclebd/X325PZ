@extends('layouts/front')


@section('title', 'Find Hospitals')
@section('pageTitle', 'Find Hospitals')
@section('parentName', 'Health')
@section('content')
<div class="find_hospital">
    <div class="container">  
        <h2 class="find_hospital_title">Find Doctor</h2>
        <p style="margin-top: 120px"></p>
        <header class="jumbotron hero-spacer" style="background-color: #ddd;">
            <h1>ডাক্তার: ০১৭০৯৮৪৮৪৮২।</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p></p>
            <div style="margin-top:30px">
            <a class="btn-ambulance">Call for Ambulance</a>
            </div>
        </header>
        <form class="form-horizontal" method="post" action="{{url('/view-doctor')}}">
            {!! csrf_field() !!} 
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="specialist" class="form-control find_search_button divisions" required>
                        <option value="">Select Specialist</option>
                        @foreach($data['doctor_specialities'] as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="division" class="form-control find_search_button divisions" required>
                        <option value="">Select Division</option>
                        @foreach($data['division'] as $row)
                            <option value="{{$row->id}}">{{$row->division_name}}</option>
                        @endforeach
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="district" id="districts" class="form-control find_search_button districts">
                        <option value="">Select District</option>
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="upazila" id="upazillas" class="form-control find_search_button">
                        <option value="">Select Upazila</option>
                    </select>
                </span>
                
                <span class="input-group-addon" id="basic-addon1"> 
                    <button class="col-xs-12 btn btn-lg" style="background-color: red">
                        <i class="fa fa-search"> Search</i>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div> 

@endsection


@extends('layouts/front')


@section('title', 'Find Hospitals')
@section('pageTitle', 'Find Hospitals')
@section('parentName', 'Health')
@section('content')
<div class="find_hospital">
    <div class="container">   

<header class="jumbotron hero-spacer" style="    background-color: rgba(255, 0, 0, 0.43); border-radius: 10px;">
        <h2 class="find_hospital_title">বিশেষজ্ঞ ডাক্তারের পরামর্শ পেতে আপনার নিকটবর্তী ডাক্তার খুজুন
</h2>
            <h3 class="find_hospital_title">ডাক্তারের সাথে সরাসরি কথা বলতে  ০১৭০৯৮৪৮৪৮২ কল করুন </h3>
            <p> </p> <p style="margin-top: 120px"></p>
        <form class="form-horizontal" method="post" action="{{url('/search-hospital')}}">
            {!! csrf_field() !!} 
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="division" class="form-control find_search_button divisions">
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
</header>

        
    </div>
</div> 

@endsection


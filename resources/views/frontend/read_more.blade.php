@extends('layouts/front')

@section('content')
<div class="container-fluid" style="margin-top: 30px;"> 
    <div class="col-md-9">
        <span class="more_news_title">{{$data['read_more_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{asset('/')}}public/images/{{$data['read_more_detail']->photo}}" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <h4 style="padding: 10px"></h4>
            <p class="text-justify" style="padding: 10px"> {{$data['read_more_detail']->short_description}} 
                {{$data['read_more_detail']->long_description}}
            </p>
            
        </div>
        <br>
    </div>
    <div class="col-md-3">
    <h3>Relative Post</h3>

    <span class="more_news_title">{{$data['read_more_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{asset('/')}}public/images/{{$data['read_more_detail']->photo}}" class="img img-rounded img-thumbnail" style="width: 100%; height: auto;">
            <h4 style="padding: 10px"></h4>
            <p class="text-justify" style="padding: 10px"> {{$data['read_more_detail']->short_description}} 
                {{substr($data['read_more_detail']->long_description,0,150)}} ...<a href="">Read more</a>
            </p>
            
        </div>
        <br>

    </div>
</div> 


@endsection


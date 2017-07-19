@extends('layouts/front')

@section('content')
<div class="container-fluid" style="margin-top: 30px"> 
    <div class="col-md-9">

        <span class="more_news_title">{{$data['recent_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{url('/')}}/public/images/content/recent_events/{{$data['recent_detail']->content_photo}}" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <p class="text-justify" style="padding: 10px">
                {{$data['recent_detail']->description}}
            </p>
        </div>

        <br>
    </div>
    <div class="col-md-3">
        <span class="more_news_title">Recent Events</span>
        <hr  class="more_news">
        @foreach($data['recent'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/images/content/recent_events/{{$row->content_photo}}" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <a href="{{url('/recent-event')}}/{{$row->id}}"><h4>{{$row->title}}</h4></a>
                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 


@endsection


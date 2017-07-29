@extends('layouts/front')

@section('content')
<div class="container-fluid" style="margin-top: 30px"> 
    <div class="col-md-9">

        <span class="more_news_title">Recent > {{$data['last_recent_event']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="{{$data['last_recent_event']->pic_path}}" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    {!!$data['last_recent_event']->description!!}
                </p>
            </div>
            <br>
        </div>
        
        <div class="row">
            <span class="more_news_title">Recent Events</span>
            @foreach($data['recent_event'] as $row)
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="{{url('/recent-event')}}/{{$row->id}}">{{$row->title}}</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{$row->pic_path}}" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    {!! substr($row->description,0,100)!!}
                </div>
                <a href="{{url('/recent-event')}}/{{$row->id}}"><button class="pull-right btn-default" style="background: none;">More Details</button></a>
            </div>
            @endforeach
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title">Upcomming Events</span>
        <hr  class="more_news">
        @foreach($data['upcoming_event'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{$row->pic_path}}" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <a href="{{url('/upcoming-event')}}/{{$row->id}}" ><h4>{{$row->title}}</h4></a>
                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 


@endsection


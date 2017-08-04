@extends('layouts/front')

@section('content')
<div class="container-fluid"> 
    <div class="col-md-9">
        <div class="row " style="margin-top: 10px">
            <div class="col-md-6">
                <img src="{{$data['last_news']->pic_path}}" class="img img-rounded" style="width: 100%; height: 350px">
            </div>
            <div class="col-md-6">
                <span class="related_links_news_title"><a class="" href="{{url('/news-detail')}}/{{$data['last_news']->id}}"><strong>{{$data['last_news']->title}}</strong></a></span>
                <p class="text-justify">
                    {!!$data['last_news']->description!!}
                </p>
                <a href="{{url('/news-detail')}}/{{$data['last_news']->id}}"><button class="pull-right btn-default" style="background: none;">বিস্তারিত</button></a>
            </div>
            <br>
        </div>
        <hr  class="more_news">
        <div class="row">
            @foreach($data['recent_news'] as $row)
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="{{url('/news-detail')}}/{{$row->id}}">{{$row->title}}</a></span>
                <div class="news_img col-md-6">
                    <span><img style="width: 100%;height: 150px" src="{{$row->pic_path}}" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    <?php 
                    $str=substr($row->description,0,398); 
                    $str[399]=' '; 



                    ?>
                    {!! $str !!}
                </div>
                <a href="{{url('/news-detail')}}/{{$row->id}}"><button class="pull-right btn-default" style="background: none;">বিস্তারিত</button></a>
            </div>
            @endforeach
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title" style="color: black"><strong>আরও সংবাদ</strong></span>
        <hr  class="more_news">
        @foreach($data['news'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left col-md-6">
                <img style="width: 100%;height: 100px" src="{{$row->pic_path}}" class="img-thumbnail">
            </div>
            <div class="more_news_right col-md-6 ">
                <h5 class=""><a class="" href="{{url('/news-detail')}}/{{$row->id}}"><strong>{{$row->title}}</strong></a></h5>
                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 


@endsection


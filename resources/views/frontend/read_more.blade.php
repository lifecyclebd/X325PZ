@extends('layouts/front')

@section('content')
<div class="container-fluid" style="margin-top: 30px;"> 
    <div class="col-md-9">
        <span class="more_news_title">{{$data['read_more_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{$data['read_more_detail']->pic_path}}" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <h4 style="padding: 10px"></h4>
            <p class="text-justify" style="padding: 10px">
                {!!$data['read_more_detail']->description!!}
            </p>
            
        </div>
        <br>
    </div>
    <div class="col-md-3">
    <h3>Relative Post</h3>
    @foreach($data['all_news'] as $row)
    <a href="{{url('/read-more')}}/detail/{{$data['read_more_detail']->id}}"><span class="more_news_title">{{$row->title}}</span></a>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{$row->pic_path}}" class="img img-rounded img-thumbnail" style="width: 150px; height: 100px;">
            
            
        </div>
        <br>
        @endforeach
    </div>
</div> 


@endsection


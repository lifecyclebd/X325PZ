@extends('layouts/front')

@section('content')
<div class="container-fluid"> 
    <div class="col-md-9">
        
        <span class="more_news_title">{{$data['news_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="images/about_left.jpg" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <p class="text-justify" style="padding: 10px">
                One of the four main blood components, platelets stop bruising and bleeding. Many of Scotland's patients need platelet transfusions, including cancer and leukaemia patients, premature babies and emergency admissions.

                However, platelets can only be stored for seven days, so we're always looking for new donors to keep a steady supply available to Scottish hospitals. If you're interested in becoming a platelet donor, speak to a member of staff at your next blood donation or get in touch online and one of our team will get back to you
            </p>
        </div>
        
        <br>
    </div>
    <div class="col-md-3">
        <span class="more_news_title">More News</span>
        <hr  class="more_news">
        @foreach($data['news'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/images/content/news/{{$row->content_photo}}" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <h4>{{$row->title}}</h4>
                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 


@endsection


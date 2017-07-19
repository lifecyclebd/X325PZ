@extends('layouts/front')

@section('content')
<div class="container-fluid"> 
    <div class="col-md-9">

        <span class="more_news_title">রোজায় স্বাস্থ্য</span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="{{url('/')}}/public/frontend/images/about_left.jpg" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    পবিত্র রমজান মাসের খাদ্যতালিকা ঠিক করার সময় অন্য মাসগুলোর খাদ্যতালিকার থেকে বেশি পার্থক্য করার প্রয়োজন নেই, যত সাধারণ এবং স্বাভাবিক খাদ্যতালিকাভুক্ত করা যায় ততই ভালো।খাদ্যের প্রকার এবং গ্রহণ এমনই হওয়া উচিত যাতে স্বাভাবিক থাকা ওজন বেড়েও না যায় বা কমেও না যায়। এমন সব খাদ্য নির্ধারণ করা প্রয়োজন,
                </p>
                <button class="pull-right btn-default" style="background: none;">More Details</button>
            </div>
            <br>
        </div>
        <div class="row">
            @foreach($data['recent_news'] as $row)
            <div class="col-md-6 col-md-offset-1 news"> 
                <span class="related_links_news_title"><a class="" href="#">{{$row->title}}</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/images/content/news/{{$row->content_photo}}" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    {{$row->description}}
                </div>
                <a href="{{url('/news-detail')}}/{{$row->id}}"><button class="pull-right btn-default" style="background: none;">More Details</button></a>
            </div>
            @endforeach
        </div>


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


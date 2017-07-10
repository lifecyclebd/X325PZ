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
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">আকাশে জন্ম নিল শিশু, আ </a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    বিমানটি তখন ৩৫ হাজার ফুট উঁচুতে, হঠাৎ করেই গর্ভবতী এক নারীর ব্যথা শুরু হলো। নির্ধারিত সময়ের আগেই প্রসব বেদনা শুরু হলো ওই নারীর।
                </div>
            </div>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">লন্ডনে ফের পথচারীদের উপর গাড়ি হামলা</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    লন্ডনে এবার একটি মসজিদের কাছে পথ 
                </div>
            </div> 
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">আকাশে জন্ম নিল শিশু, আজীবন বিনামূল্যে আকাশ ভ্রমণ</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    বিমানটি তখন ৩৫ হাজার ফুট উঁচুতে, হঠাৎ করেই।
                </div>
            </div>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">লন্ডনে ফের পথচারীদের উপর গাড়ি হামলা</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    লন্ডনে এবার একটি মসজিদের কাছে পথচারীদের ওপর গাড়ি চাপা দেয়ার ঘটনা ঘটেছে।
                </div>
            </div> 


        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title">More News</span>
        <hr  class="more_news">
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img-thumbnail">
            </div>
            <div class="more_news_right">
                <h4>This is a Test...</h4>
                12 June, 2013
            </div>
            <br>
        </div>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img-thumbnail">
            </div>
            <div class="more_news_right">
                <h4>This is a Test...</h4>
                <hr style="margin: 0px;">
                12 June, 2013
            </div> 
            <br>
        </div>


        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img-thumbnail">
            </div>
            <div class="more_news_right">
                <h4>This is a Test...</h4>
                12 June, 2013
            </div>
            <br>
        </div>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img-thumbnail">
            </div>
            <div class="more_news_right">
                <h4>This is a Test...</h4>
                <hr style="margin: 0px;">
                12 June, 2013
            </div> 
            <br>
        </div>


        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img-thumbnail">
            </div>
            <div class="more_news_right">
                <h4>This is a Test...</h4>
                12 June, 2013
            </div>
            <br>
        </div>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img-thumbnail">
            </div>
            <div class="more_news_right">
                <h4>This is a Test...</h4>
                <hr style="margin: 0px;">
                12 June, 2013
            </div> 
            <br>
        </div>
    </div>
</div> 


@endsection


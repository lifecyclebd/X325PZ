@extends('layouts/front')

@section('title', 'About Us')
@section('pageTitle', 'About Us')
@section('parentName', 'Home')

@section('content')

        <img src="{{$data['about_us']->pic_path}}" class="img img-responsive" style="width: 100%;">
<div class="container-fluid" style="background-color: #c9302c;color: white;min-height: 540px">

        <!-- Portfolio Item Heading -->
        <div class="col-md-offset-1 col-md-10 text-justify">
        {!!$data['about_us']->description!!}
        </div>
</div>


@endsection


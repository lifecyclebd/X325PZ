@extends('layouts/front')

@section('title', 'About Us')
@section('pageTitle', 'About Us')
@section('parentName', 'Home')

@section('content')

        <img src="{{$data['about_us']->pic_path}}" class="img img-responsive" style="width: 100%;">
<div class="container">

        <!-- Portfolio Item Heading -->
        <div class="col-md-offset-1 col-md-10 text-justify">
        {!!$data['about_us']->description!!}
        </div>
</div>


@endsection


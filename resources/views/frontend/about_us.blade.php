@extends('layouts/front')

@section('title', 'About Us')
@section('pageTitle', 'About Us')
@section('parentName', 'Home')

@section('content')
<div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Life Cycle
                    <small> Give Blood, Save life</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{asset('/')}}/public/frontend/images/donor_register.jpg" alt="">
            </div>

            <div class="col-md-4">
                <h3>Life Cycle</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>More Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Our Services</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img style="height: 300px; width: 500px" class="img-responsive portfolio-item" src="{{asset('/')}}/public/frontend/images/blood-info-1.jpeg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img style="height: 300px; width: 500px" class="img-responsive portfolio-item" src="{{asset('/')}}/public/frontend/images/blood-info-2.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img style="height: 300px; width: 500px" class="img-responsive portfolio-item" src="{{asset('/')}}/public/frontend/images/blood-info-3.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img style="height: 300px; width: 500px" class="img-responsive portfolio-item" src="{{asset('/')}}/public/frontend/images/blood-info-1.jpg" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

    

    </div>


@endsection


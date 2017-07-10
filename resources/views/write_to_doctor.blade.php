@extends('layouts/front')

@section('content')
<div class="container"> 
    <div class="col-md-offset-2 col-md-8">
        <p class="text-center" style="font-size: 20px;">Please fill up the form</p>
        <form class="form-horizontal" method="post" action="">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Age">
                </div> 
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Last checked blood presure">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Any previous diseases">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"  style="  margin-top: 50px;">
                    <textarea class="form-control" style="border: 5px solid #c9302c;" name="problem" rows="10" placeholder="Write your problem"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <input type="submit" name="submit" value="Submit" class="submit-btn form-control">
                </div>
            </div>
        </form>
    </div>
</div> 
@endsection


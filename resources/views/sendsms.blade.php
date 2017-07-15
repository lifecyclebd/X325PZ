@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <h3 class="box-title">Send Message</h3>
            </div>

            <div class="box-body">

                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Donor Name</label>

                            <div class="col-sm-10">
                                <select name="category" class="form-control">
                                    <option value="Blood Donor">Blood Donor</option>
                                    <option value="Blood Recever">Blood Receiver</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Donor Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Message</label>

                            <div class="col-sm-10">
                                <textarea class="form-control"  id="">
                                </textarea> 
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Send</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
 
                    <div class="col-md-12">
                        <h3 class="text-center">SMS History</h3>
                        <table class="table table-resposive" id="example1">
                            <thead>
                                <th>SL</th>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Message</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Date Time</th>
                                <th>Operation</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Masud </td>
                                    <td>SHaheen</td>
                                    <td>Request A+ Blood</td>
                                    <td><span class="label label-info">Blood Request</span></td>
                                    <td><span class="label label-success">Done !</span></td>
                                    <td>13 June, 2017 12:30pm</td>
                                    <td>
                                        <a href="#" class="btn btn-xs">Edit</a>
                                        <a href="#" class="btn btn-xs">Delete</a>
                                        <a href="#" class="btn btn-xs">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jaman </td>
                                    <td>Rashed</td>
                                    <td>Admin Send request for AB- Blood</td>
                                    <td><span class="label label-danger">Blood Request</span></td>
                                    <td><span class="label label-warning">Not Yet !</span></td>
                                    <td>13 June, 2017 10:30am</td>
                                    <td>
                                        <a href="#" class="btn btn-xs">Edit</a>
                                        <a href="#" class="btn btn-xs">Delete</a>
                                        <a href="#" class="btn btn-xs">View</a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->



</div>
<!-- /.content-wrapper -->
@endsection 
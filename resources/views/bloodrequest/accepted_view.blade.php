@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Blood Donor <i class="fa fa-angle-right"> </i>  Accepted  Blood Request List</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Blood Group</th>
                                    <th>Request Phone</th>
                                    <th>Accepted Phonne</th>
                                    <th>Accepted Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['accepted_blood_request'] as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->request_blood}}</td>
                                    <td>{{$row->request_phone}}</td>
                                    <td>{{$row->accepted_phone}}</td>
                                    <td>{{$row->accepted_time}}</td>
                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->  
</div>
<!-- /.content-wrapper -->
@endsection 

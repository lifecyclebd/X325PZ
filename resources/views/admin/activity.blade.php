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
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">

                            <a class="btn btn-success pull-right" href="{{ url('/unknown') }}"><i class="fa fa-plus"></i> Add Admin</a>

                        </div>
                        <h3 class="box-title">Activity List</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Created ID</th>
                                    <th>Created Type</th>
                                    <th>Reciever ID</th>
                                    <th>Reciever Type</th>
                                    <th>Purpose</th>
                                    <th>Message</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['activity'] as $row)
                                <tr>
                                    <td>{{$row->created_id}}</td>
                                    <td>{{$row->created_id}}</td>
                                    <td>{{$row->receiver_id}}</td>
                                    <td>{{$row->receiver_type}}</td>
                                    <td>{{$row->purpose}}</td>
                                    <td>{{$row->short_message}}</td>
                                    <td> 
                                        <a href="{{url('/admin')}}/{{$row->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-edit"></i> </a>
                                        <a href="{{url('/admin')}}/{{$row->id}}/destroy" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i></a>
                                        <a href="#" class="btn  btn-info btn-xs"><i class="fa fa-fw fa-print"></i></a>
                                        <a href="{{url('/admin/')}}/{{ $row->id }}" class="btn  btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>

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
</div>
<!-- /.content-wrapper -->
@endsection 
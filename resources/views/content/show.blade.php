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

                            <a href="{{url('/admin/content')}}" class="">      
                                <i class="fa fa-undo" aria-hidden="true"></i> back
                            </a>

                        </div>
                        <h3 class="box-title">Content :: Details Page</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <h3 class="">{{$data['content']->title}}</h3>
                        <hr>

                        <table class="table"> 
                                <tr>
                                    <td>{{$data['content']->id}}</td>
                                    <td><img src="{{$data['content']->pic_path}}" style="width: 50%; height: auto"></td>
                                    <td style="text-align: justify;">{!! $data['content']->description  !!}</td>  

                                </tr>
 
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

    <?php
    //  }
    //  }
    ?>
</div>
<!-- /.content-wrapper -->
@endsection 
@extends('layouts.myapp')


@section('content')

<link rel="stylesheet" href="{{asset('/')}}/public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<div class="content-wrapper" style="min-height: 946px;">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">

                <input type="hidden" name="receiver_email" value="{{$row->email}}">
                <input type="hidden" name="receiver_type" value="donor">
                <input type="hidden" name="sender_email" value="admin@lifecyclebd.org">
                <input type="hidden" name="sender_type" value="admin">

                  <div class="input-group" style="margin-bottom: 30px">
                    <span class="input-group-addon" id="basic-addon1">To </span> 
                      <select class="form-control">
                        @foreach($data['donor'] as $row)
                          <option value="">{{$row->email}} - {{$row->blood_group}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group"> 
                      <div class="col-md-12">
                      <textarea class="form-control col-md-12 ckeditor" name="message" id="ckeditor">
                         We need 2 bags A+ blood, Please inform us, If you are available now. 


                         <br>
                         <br>
                         <br>
                         <br>
                         <br>
                         System Administrator<br>
                          support@lifecyclebd.org

                      </textarea>
                      </div>
                    </div>  
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" style="width: 100px" class="btn btn-primary"><i class="fa fa-envelope-o"></i>  Send</button>
              </div>
            </div>
          </form>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
            
        </div> 
    </section>
    <!-- /.content -->
</div>
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
@endsection 

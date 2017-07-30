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
<<<<<<< HEAD
            <!-- /.box-header -->
            <form action="{{url('admin/mailbox/store')}}" method="post">
                <div class="box-body">
                  <div class="form-group" style="margin-bottom: 30px">
                    <div class="col-md-4">
                      <select class="form-control" name="email">
                        @foreach($data['donor'] as $row)
                          <option value="">{{$row->email}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="A+">A+</option>
                        <option value="AB+">AB+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="AB-">AB-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option> 
                      </select>
                    </div>
                    
                  <div class="col-md-4">
                      <input class="form-control btn btn-primary" value="Search" type="submit" >
                  </div>
                  </div>
                  <div class="form-group">
                        <textarea name="message"  class="form-control" style="height: 300px;">                      
                        </textarea>
                  </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" style="width: 100px" class="btn btn-primary"><i class="fa fa-envelope-o"></i>  Send</button>
                  </div>
                </div>
                <!-- /.box-footer -->
              </div>
          </form>
=======
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">

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
>>>>>>> 5a918b40b7d49bd1ffcb7d5522ab3f0a83368ddc
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

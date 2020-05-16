@extends('admin.layouts.app')
<link rel="shortcut icon" href="/user/img/rsa.png">
@section('headSection')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Room</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('roomeng.update',$post->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">

               <div class="form-group">
               <label for="title">Name room</label>
                  <input type="text" class="form-control" id="title" name="name_room" placeholder="Room" value="{{ $post->name_room }}">
                </div>

                <div class="form-group">   
                <label for="title">Description</label>
                  <input type="text" class="form-control" id="title" name="descripcion" placeholder="Description" value="{{ $post->descripcion }}">
                </div>

                <div class="form-group">
                <label for="title">Activity</label>
                  <input type="text" class="form-control" id="title" name="activity" placeholder="activity" value="{{ $post->activity }}">
                </div>

                <div class="form-group">   
                <label for="title">Service</label>
                  <input type="text" class="form-control" id="title" name="service" placeholder="service" value="{{ $post->service }}">
                </div>

                <div class="form-group">
                <label for="title">Price</label>
                  <input type="text" class="form-control" id="title" name="price" placeholder="price" value="{{ $post->price }}">
                </div>
                
                
                <!--      <div class="form-group">
                <label for="title">Available</label>
                  <input type="text" class="form-control" id="title" name="available" placeholder="available" value="{{ $post->available }}">
                </div> -->

           

                <div class="form-group">
                <label for="title">Vacancies</label>
                  <input type="text" class="form-control" id="title" name="vacancies" placeholder="vacancies" value="{{ $post->vacancies }}">
                </div>

                <div class="form-group"> 
                <label for="title">Quantity</label>  
                  <input type="text" class="form-control" id="title" name="quantity" placeholder="quantity" value="{{ $post->quantity }}">
                </div>

                <div class="form-group">
                <label for="title">Person</label>
                  <input type="text" class="form-control" id="title" name="person" placeholder="person" value="{{ $post->person }}">
                </div>

                <div class="form-group">  
                <label for="title">Capacity</label> 
                  <input type="text" class="form-control" id="title" name="capacity" placeholder="capacity" value="{{ $post->capacity }}">
                </div>

                <div class="form-group">
                <label for="title">Include</label>
                  <input type="text" class="form-control" id="title" name="include" placeholder="include" value="{{ $post->include }}">
                </div>

                <div class="form-group">  
                <label for="title">Info1</label> 
                  <input type="text" class="form-control" id="title" name="info1" placeholder="info1" value="{{ $post->info1 }}">
                </div>
                <div class="form-group">
                <label for="title">Info2</label>
                  <input type="text" class="form-control" id="title" name="info2" placeholder="info2" value="{{ $post->info2 }}">
                </div>

                <div class="form-group">  
                <label for="title">Bed1</label> 
                  <input type="text" class="form-control" id="title" name="bed1" placeholder="bed1" value="{{ $post->bed1 }}">
                </div>
                <div class="form-group">
                <label for="title">Bed2</label>
                  <input type="text" class="form-control" id="title" name="bed2" placeholder="bed2" value="{{ $post->bed2 }}">
                </div>
                <div class="form-group">
                <label for="title">Serviceespecial1</label>
                  <input type="text" class="form-control" id="title" name="serviceespecial1" placeholder="serviceespecial1" value="{{ $post->serviceespecial1 }}">
                </div>
                <div class="form-group">
                <label for="title">Serviceespecial2</label>
                  <input type="text" class="form-control" id="title" name="serviceespecial2" placeholder="serviceespecial2" value="{{ $post->serviceespecial2 }}">
                </div>
                <div class="form-group">
                <label for="title">Infoprice1</label>
                  <input type="text" class="form-control" id="title" name="infoprice1" placeholder="infoprice1" value="{{ $post->infoprice1 }}">
                </div>
                <div class="form-group">
                <label for="title">Infoprice2</label>
                <input type="text" class="form-control" id="title" name="infoprice2" placeholder="infoprice2" value="{{ $post->infoprice2 }}">
                </div>
                <div class="form-group">
                <label for="title">Alert1</label>
                  <input type="text" class="form-control" id="title" name="alert1" placeholder="alert1" value="{{ $post->alert1 }}">
                </div>
                <div class="form-group">
                <label for="title">Alert2</label>
                <input type="text" class="form-control" id="title" name="alert2" placeholder="alert2" value="{{ $post->alert2 }}">
                </div>
                <div class="form-group">
                <label for="title">Notice1</label>
                  <input type="text" class="form-control" id="title" name="notice1" placeholder="notice1" value="{{ $post->notice1 }}">
                </div>
                <div class="form-group">
                <label for="title">Notice2</label>
                <input type="text" class="form-control" id="title" name="notice2" placeholder="notice2" value="{{ $post->notice2 }}">
                </div>
                <div class="form-group">
                <label for="title">Infoconfirm</label>
                <input type="text" class="form-control" id="title" name="infoconfirm" placeholder="infoconfirm" value="{{ $post->infoConfirm }}">
                </div>
                <div class="form-group">
                <label for="title">Inforegister</label>
                <input type="text" class="form-control" id="title" name="inforegister" placeholder="inforegister" value="{{ $post->inforegister }}">
                </div>
                <div class="form-group">
                <label for="title">Infocard</label>
                <input type="text" class="form-control" id="title" name="infocard" placeholder="infocard" value="{{ $post->infocard }}">
                </div>
              
            
              <div class="col-lg-4">  
                <br>
                <div class="form-group" style="margin-top:18px;">
                   
                </div>
                <div class="form-group" style="margin-top:18px;">            
                </div>               
              </div>
            </div>
            <!-- /.box-body -->
             <div class="box-footer">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('roomeng.index') }}' class="btn btn-warning">Back</a>
            </div>
          </form>
        </div>
        <!-- /.box -->

        
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection
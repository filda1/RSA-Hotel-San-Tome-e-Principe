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
            <h3 class="box-title">Reserve</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('reserve.update',$post->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">

               <div class="form-group">
               <label for="title">Name</label>
                  <input type="text" class="form-control" id="title" name="name_reserve" placeholder="" value="{{ $post->name_reserve }}">
                </div>

                <div class="form-group">   
                <label for="title">Id user</label>
                  <input type="text" class="form-control" id="title" name="children" placeholder="" value="{{ $post->children }}">
                </div>

                <div class="form-group">
                <label for="title">Id room</label>
                  <input type="text" class="form-control" id="title" name="id_room" placeholder="" value="{{ $post->id_room }}">
                </div>

                <div class="form-group">   
                <label for="title">Checkin</label>
                  <input type="text" class="form-control" id="title" name="checkin" placeholder="" value="{{ $post->checkin }}">
                </div>

                <div class="form-group">
                <label for="title">Checkout</label>
                  <input type="text" class="form-control" id="title" name="checkout" placeholder="" value="{{ $post->checkout }}">
                </div>

                <div class="form-group">
                <label for="title">Price</label>
                  <input type="text" class="form-control" id="title" name="price" placeholder="" value="{{ $post->price }}">
                </div>

                <div class="form-group">
                <label for="title">Total</label>
                  <input type="text" class="form-control" id="title" name="total" placeholder="" value="{{ $post->total }}">
                </div>

                <div class="form-group"> 
                <label for="title">Person</label>  
                  <input type="text" class="form-control" id="title" name="person" placeholder="" value="{{ $post->person }}">
                </div>

                <div class="form-group">
                <label for="title">Cancel</label>
                  <input type="text" class="form-control" id="title" name="cancel" placeholder="" value="{{ $post->cancel }}">
                </div>

                <div class="form-group">
                <label for="title">Info</label>
                  <input type="text" class="form-control" id="title" name="info" placeholder="" value="{{ $post->info }}">
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
              <a href='{{ route('reserve.index') }}' class="btn btn-warning">Back</a>
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
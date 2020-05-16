@extends('admin.layouts.app')
<link rel="shortcut icon" href="/user/img/rsa.png">
@section('headSection')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

<script type="text/javascript">
        $(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});
 </script>  

 <style>

 </style>
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
      
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="table-responsive">
                      <table id="dtHorizontalExample" class="table table-bordered table-striped" >
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>name</th>
                          <th>price1</th>
                           <th>price2</th>
                          <th>price3</th> 
                          <th>price4</th> 
                          <th>vacancies</th> 
                          <th>children</th> 
                          <th>baby</th> 
                          
                          <th>Edit</th>                 
                       
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                          <tr>
                            <td># {{ $loop->index + 1 }}</td>
                            <td>{{ $post->name_room}}</td>
                            <td>{{ $post->price }}</td> 
                            <td>{{ $post->price2 }}</td>  
                            <td>{{ $post->activity }}</td>  
                            <td>{{ $post->service }}</td>  
                            <td>{{ $post->vacancies }}</td>
                            <td>{{ $post->children }}</td>
                            <td>{{ $post->capacity }}</td>
                        
                                      
                              <td><a href="{{ route('roomeng.edit',$post->id) }}"><span class="fa fa-pencil-square-o"></span></a></td>                                 
                               
                             
                               <!--  <td>
                              <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('roomeng.destroy',$post->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $post->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="fa fa-trash"></span></a>
                            </td>
                     -->
                            
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
    
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
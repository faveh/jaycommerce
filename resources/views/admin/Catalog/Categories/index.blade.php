@extends('admin.layout.master')
@section('title')
    Categories
@endsection
@section('content-heada')
    Categories
@endsection
@section('content-nav')
        <li class="active">Categories</li>
@endsection
@section('content')
	  <!-- Search Category Form -->
    <div class="col-md-12">
    <div class="col-md-10 col-md-offset-10">
                  <a href="{{url('admin/catalog/categories/create')}}"><button class="btn btn-info btn-md"><i class="fa fa-plus"> Add New</i></button></a>
                </div>
    </div>
	<div class="col-md-9">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Search Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="categoryname" class="col-sm-2 control-label">Category name</label>

                  <div class="col-md-6">
                    <input type="text" class="form-control" id="categoryname" placeholder="category name">
                  </div>
                </div>                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               	<div class="col-md-8 col-md-offset-8">
               		<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-search"> Search</i></button>
               	</div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
	</div>
          
          <!-- Display Category List Table -->

      


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Category Name</th>
                  <th>Parent</th>
                  <th>Description</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                 @if($catparents)
                            @foreach($catparents as $catparent)
                            <tr>
                                <td>{{$catparent->id}}</td>
                                <td>{{$catparent->name}}</td>
                                <td>{{$catparent->parent}}</td>
                                <td>{{ $catparent->description }}</td>
                                <td><a href="{{ URL::to('admin/catalog/categories/'. $catparent->id . '/edit') }}"><i class="fa fa-edit"> Edit</i></a></td>

                            </tr>
                            @endforeach
                        @endif
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Category Name</th>
                  <th>Parent</th>
                  <th>Description</th>
                  <th>Edit</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

         
   


         
@endsection
@section('script')
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  // $(document).on('click', '.btn-edit', function(e){
  //     var id=$(this).val();
  //     $.ajax({
  //       type : "post",
  //       url  : "url"
  //     })
  // })
  // $('#edit').on('change',function(e){
  //   e.preventDefault();
  //   var sn=$(this).val();
  //   if (sn==='edit')
  //   {
  //     $(#myModal).modal('show');
  //   }
  // });
</script>    
@endsection

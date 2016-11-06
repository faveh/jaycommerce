@extends('admin.layout.master')
@section('title')
    Product Tags
@endsection
@section('content-heada')
    Product Tags
    @endsection
@section('content-nav')
        <li class="active">Tags</li>
@endsection
@section('content')
	  <!-- Search tag Form -->
    <div class="col-md-12">
    <div class="col-md-10 col-md-offset-10">
                  <a href="{{url('admin/catalog/producttag/create')}}"><button class="btn btn-info btn-md"><i class="fa fa-plus"> Add New</i></button></a>
                </div>
    </div>
	<div class="col-md-9">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Search Tags</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="tagname" class="col-sm-2 control-label">Tag name</label>

                  <div class="col-md-6">
                    <input type="text" class="form-control" id="tagname" placeholder="Tag name">
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
          
          <!-- Display tag List Table -->

      


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Tags Name</th>
                  <th>Tagged Products</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                 @if($producttags)
                            @foreach($producttags as $producttag)
                            <tr>
                                <td>{{$producttag->id}}</td>
                                <td>{{$producttag->name}}</td>
                                <td>
                                {{App\product::where(['ProductTag' => $producttag->id])->get()->count()}}
                                </td>
                                <td>
                                  <input type="submit" value="Edit" onclick="javascript:OpenWindow('/Admin/catalog/Producttag/$producttag->id?btnId=btnRefresh&amp;formId=product-tags-form', 800, 320, true); return false;" class="btn btn-default">
                                </td>
                                <td>Delete</td>
                            </tr>
                            @endforeach
                        @endif
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Tags Name</th>
                  <th>Tagged Products</th>
                  <th>Edit</th>
                  <th>Delete</th>
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

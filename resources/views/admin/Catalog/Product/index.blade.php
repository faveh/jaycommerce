@extends('admin.layout.master')
@section('title')
    Product
@endsection
@section('content-heada')
    Product
@endsection
@section('content-nav')
        <li class="active">Products</li>
@endsection
@section('content')
      <!-- Search Category Form -->
    <div class="col-md-12">
    <div class="col-md-10 col-md-offset-10">
                  <a href="{{url('admin/catalog/product/create')}}"><button class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Add New</button></a>
                </div>
    </div>
    <div class="col-md-9">
          <div class="box box-primary">
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
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"> Search</i></button>
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
              <h3 class="box-title">List Of Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Picture</th>
                  <th>Product name</th>
                  <th>SKU</th>
                  <th>Price</th>
                  <th>Stock quantity</th>
                  <th>Product type</th>
                  <th>Published</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                 @if($products)
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->Name}}</td>
                                <td>{{$product->Sku}}</td>
                                <td>{{$product->Price }}</td>
                                <td>{{$product->StockQuantity }}</td>
                                <td>{{$product->ProductType }}</td>
                                <td><i class="fa fa-{{$product->Published == 1 ? 'check' : 'times'}}"></i></td>
                                <td><a href="{{ URL::to('admin/catalog/categories/'. $product->id . '/edit') }}"><i class="fa fa-edit"> Edit</i></a></td>

                            </tr>
                            @endforeach
                        @endif
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Picture</th>
                  <th>Product name</th>
                  <th>SKU</th>
                  <th>Price</th>
                  <th>Stock quantity</th>
                  <th>Product type</th>
                  <th>Published</th>
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

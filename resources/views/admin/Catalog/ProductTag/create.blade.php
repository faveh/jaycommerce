@extends('admin.layout.master')
@section('title')
    New Tag
@endsection
@section('content-heada')
    Add New Tag
@endsection
@section('content-nav')
    <li class="active"><a href="{{ url('admin/catalog/producttag/') }}">Product Tags</a></li>
    <li class="active">Add</li>

@endsection
@section('content')

    <!-- right column -->
    <div class="col-md-10">
        <!-- Horizontal Form -->
         {!! Form::open(['method'=>'POST', 'action'=>'TagController@store']) !!}
             {{ csrf_field() }}
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create New Tag</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                            </div>
                            
                            
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                    </div>
              
                                    <!-- /.box -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                        </div>
            </form>
        </div>
   
@endsection

@section('script')
 <script>
    
</script>   
@endsection

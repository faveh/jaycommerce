@extends('admin.layout.master')
@section('title')
    New Categories
@endsection
@section('content-heada')
    Add New Category
@endsection
@section('content-nav')
    <li class="active"><a href="{{ url('admin/catalog/categories/') }}">Categories</a></li>
    <li class="active">Add</li>

@endsection
@section('content')
    <!-- right column -->
    <div class="col-md-10">
        <!-- Horizontal Form -->
         {!! Form::open(['method'=>'POST', 'action'=>'CategoryController@store']) !!}
             {{ csrf_field() }}
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create New Category</h3>
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
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Parent Category</label>
                                <div class="col-sm-10">
                                <select class="form-control" name="parent" value="">
                                @foreach($catparents as $key => $catparent)
                                    <option value="{{$catparent->name}}">{{$catparent->name}}</option>
                                @endforeach
                                </select>
                                 </div>
                            </div>
                            
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                    </div>
               <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Bootstrap WYSIHTML5
                        <small>Simple and fast</small>
                      </h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fa fa-times"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      
                        <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      
                    </div>
                </div>
                                    <!-- /.box -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
            </form>
        </div>

   
@endsection

@section('script')
 <script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>   
@endsection

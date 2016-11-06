@extends('admin.layout.master')
@section('title')
    Product
@endsection
@section('content-heada')
    New Product
@endsection
@section('content-nav')
        <li class="active">Categories</li>
@endsection
@section('content')
             {{-- <div class="content-wrapper"> --}}




<div class="col-md-10">
        <!-- Horizontal Form -->
        <form class="form-horizontl" role="form" method="POST" action="{{ url('admin/catalog/product/type') }}">
         
             {{ csrf_field() }}
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select The Product Type</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        <div class="box-body">
                           
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Type</label>
                                <div class="col-sm-10">
                                <select class="form-control" name="producttype" value="">
                                   <option value="simpleproduct">Simple Product</option>
                                   <option value="variableproduct">Variable Product</option>
                                   <option value="groupproduct">Group Product</option>
                                </select>
                                 </div>
                            </div>
                            
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                    
                     <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Next</button>
                        </div>
                        </div>
                        </form>
@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductTag;
use App\Http\Requests;

class ProductType extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
	
    public function producttype(Request $request)
    {
         $type = $request->input('producttype');
         $producttags = ProductTag::all();
         if ($type == 'simpleproduct') {

            
             return view('admin/catalog/product/type/simple', compact('producttags'));
         }elseif ($type == 'variableproduct') {
            
             return view('admin/catalog/product/type/variable', compact('producttags'));
         }else{
             return view('admin/catalog/product/type/group', compact('producttags'));
         }
    }

}
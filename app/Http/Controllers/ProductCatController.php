<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\Http\Requests;

class ProductCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
       $products = Product::all();
       return view('admin.catalog.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $products = Product::all();

        return view('admin/catalog/product/create', compact('products'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
     
        $Product = new Product;

        // $Product->ProductType = $request->ProductType;
        // $Product->Name = $request->Name;
        // $Product->ShortDescription = $request->ShortDescription;
        // $Product->FullDescription = $request->FullDescription;

            $Product->ProductType = $request->ProductType;
            $Product->Name = $request->Name;
            $Product->ShortDescription = $request->ShortDescription;
            $Product->FullDescription = $request->FullDescription;
            $Product->Sku = $request->Sku;
            $Product->Published = $request->Published;
            $Product->ProductTag = $request->ProductTag;
            $Product->ShowOnHomePage = $request->ShowOnHomePage;
            $Product->AvailableStartDateTimeUtc = $request->AvailableStartDateTimeUtc;
            $Product->AvailableEndDateTimeUtc = $request->AvailableEndDateTimeUtc;
            $Product->MarkAsNew = $request->MarkAsNew;
            $Product->MarkAsNewStartDateTimeUtc = $request->MarkAsNewStartDateTimeUtc;
            $Product->MarkAsNewEndDateTimeUtc = $request->MarkAsNewEndDateTimeUtc;
            $Product->Price = $request->Price;
            $Product->OldPrice = $request->OldPrice;
            $Product->ProductCost = $request->ProductCost;
            $Product->SpecialPrice = $request->SpecialPrice;
            $Product->SpecialPriceStartDateTimeUtc = $request->SpecialPriceStartDateTimeUtc;
            $Product->SpecialPriceEndDateTimeUtc = $request->SpecialPriceEndDateTimeUtc;
            $Product->DisableBuyButton = $request->DisableBuyButton;
            $Product->DisableWishlistButton = $request->DisableWishlistButton;
            $Product->InventoryMethod = $request->InventoryMethod;
            $Product->StockQuantity = $request->StockQuantity;
            $Product->WarehouseId = $request->WarehouseId;
            $Product->DisplayStockAvailability = $request->DisplayStockAvailability;
            $Product->DisplayStockQuantity = $request->DisplayStockQuantity;
            $Product->LowStockActivityId = $request->LowStockActivityId;
            $Product->NotifyAdminForQuantityBelow = $request->NotifyAdminForQuantityBelow;
            $Product->OrderMaximumQuantity = $request->OrderMaximumQuantity;
            $Product->IsDeliveryEnabled = $request->IsDeliveryEnabled;
            $Product->Weight = $request->Weight;
            $Product->Length = $request->Length;
            $Product->Width =  $request->Width;
            $Product->Height = $request->Height;
            $Product->IsFreeDelivery = $request->IsFreeDelivery;
            $Product->DeliveryFee = $request->DeliveryFee;
            $Product->DeliveryDateId = $request->DeliveryDateId;
            $Product->category_id = $request->category_id;
            $Product->manufacturer_id = $request->manufacturer_id;
            $Product->RequireOtherProducts = $request->RequireOtherProducts;
            $Product->RequiredProductIds = $request->RequiredProductIds;
            $Product->AutomaticallyAddRequiredProducts = $request->AutomaticallyAddRequiredProducts;
            // dd($Product);
        $Product->save();
          $products = Product::all();
        return view('admin.catalog.product.index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

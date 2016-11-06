@extends('admin.layout.master')
@section('title')
    Simple Product
@endsection
@section('content-heada')
    New Simple Product
@endsection
@section('content-nav')
        <li class="active"><a href="{{ url('admin/catalog/product/') }}">Product</a></li>
        <li class="active">New Product</li>
@endsection
@section('content')
             {{-- <div class="content-wrapper"> --}}
                




                    
{!! Form::open(['method'=>'POST', 'action'=>'ProductCatController@store']) !!}
             {{ csrf_field() }}
<div class="col-md-10 col-md-offset-10">
                  <button type="submit" class="btn btn-primary btn-md"><i class="fa fa-floppy-o"></i> Save</button></a>
                           

                </div>
<div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>



<div class="content">
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-12 clearfix">
                <div class="pull-left">
                    <div class="form-group">
  
</div>



                </div>
            </div>
        </div>
        <div id="product-edit" class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a data-tab-name="tab-info" data-toggle="tab" href="#tab-info">Product info</a></li>
               
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-info">



<div class="raw clearfix">
    <div class="col-md-7">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    General information
                </div>
                <div class="panel-body">
                    <div class="form-group">
                            <div class="col-md-3">
                                <div class="label-wrapper"><label class="control-label" for="ProductType" title="">Product Type</label><div class="ico-help" title="The Type Of The PRoduct."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control text-box" id="ProductType" name="ProductType" type="text" placeholder="Please Enter Simple Product here" />
                                <span class="field-validation-valid" data-valmsg-for="ProductType" data-valmsg-replace="true"></span>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-3">
                                <div class="label-wrapper"><label class="control-label" for="Name" title="">Product name</label><div class="ico-help" title="The name of the product."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control text-box single-line" data-val-length="&#39;Name&#39; must be between 0 and 400 characters." data-val-length-max="400" data-val-required="Please provide a name." id="Name" name="Name" type="text" />
                                <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-3">
                                    <div class="label-wrapper"><label class="control-label" for="ShortDescription" title="">Short description</label><div class="ico-help" title="Short description is the text that is displayed in product list i.e. сategory / manufacturer pages."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" cols="20" id="ShortDescription" name="ShortDescription" rows="4">
                                </textarea>
                                <span class="field-validation-valid" data-valmsg-for="ShortDescription" data-valmsg-replace="true"></span>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-3">
                                    <div class="label-wrapper"><label class="control-label" for="FullDescription" title="">Full description</label><div class="ico-help" title="Full description is the text that is displayed in product page."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" cols="20" id="FullDescription" name="FullDescription" rows="4">
                                </textarea>
                                <span class="field-validation-valid" data-valmsg-for="FullDescription" data-valmsg-replace="true"></span>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="Sku" title="">SKU</label><div class="ico-help" title="Product stock keeping unit (SKU). Your internal unique identifier that can be used to track this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control text-box single-line" data-val-length="&#39;Sku&#39; must be between 0 and 400 characters." data-val-length-max="400" id="Sku" name="Sku" style="width: 80%" type="text"  />
                            <span class="field-validation-valid" data-valmsg-for="Sku" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="Published" title="">Published</label><div class="ico-help" title="Check to publish this product (visible in store). Uncheck to unpublish (product not available in store)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input checked="checked" class="check-box" data-val-required="&#39;Published&#39; must not be empty." id="Published" name="Published" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="Published" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ProductTags" title="">Product tags</label><div class="ico-help" title="Product tags are the keywords for product identification. The more products associated with a particular tag, the larger it will show on the tag cloud."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                          <select class="select2" id="ProductTag" multiple="multiple" name="ProductTag" style="width: 220px">
                                
                                        @if($producttags)
                                    @foreach($producttags as $producttag)
                                        <option value="{{$producttag->id}}">{{$producttag->name}}</option>
                                    @endforeach
                                @endif
                                        
                            </select>
                                       
                            
                        </div>
                    </div>
                    <div class="form-group advanced-setting" >
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ShowOnHomePage" title="">Show on home page</label><div class="ico-help" title="Check to display this product on your store&#39;s home page. Recommended for your most popular products."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val-required="&#39;Show On Home Page&#39; must not be empty." id="ShowOnHomePage" name="ShowOnHomePage" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="ShowOnHomePage" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AvailableStartDateTimeUtc" title="">Available start date</label><div class="ico-help" title="The start of the product&#39;s availability in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
                            <input id="AvailableStartDateTimeUtc" name="AvailableStartDateTimeUtc" style="width: 80%" />
                            <span class="field-validation-valid" data-valmsg-for="AvailableStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>  
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AvailableEndDateTimeUtc" title="">Available end date</label><div class="ico-help" title="The end of the product&#39;s availability in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
                            <input id="AvailableEndDateTimeUtc" name="AvailableEndDateTimeUtc" style="width: 80%"/>

                            <span class="field-validation-valid" data-valmsg-for="AvailableEndDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>   
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MarkAsNew" title="">Mark as new</label><div class="ico-help" title="Check to mark  the product as new. Use this option for promoting new products."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val-required="&#39;Mark As New&#39; must not be empty." id="MarkAsNew" name="MarkAsNew" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="MarkAsNew" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMarkAsNewStartDateTimeUtc">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MarkAsNewStartDateTimeUtc" title="">Mark as new. Start date</label><div class="ico-help" title="Set Product as New from Date in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
                            <input id="MarkAsNewStartDateTimeUtc" name="MarkAsNewStartDateTimeUtc" style="width: 80%"/>

                            <span class="field-validation-valid" data-valmsg-for="MarkAsNewStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMarkAsNewEndDateTimeUtc">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MarkAsNewEndDateTimeUtc" title="">Mark as new. End date</label><div class="ico-help" title="Set Product as New to Date in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
                            <input id="MarkAsNewEndDateTimeUtc" name="MarkAsNewEndDateTimeUtc" style="width: 80%"/>

                            <span class="field-validation-valid" data-valmsg-for="MarkAsNewEndDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div> 
            </div>  
            </div>
            <div class="panel panel-default" id="group-prices">
                <div class="panel-heading">
                    Prices
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="Price" title="">Price</label><div class="ico-help" title="The price of the product. You can manage currency by selecting Configuration > Location > Currencies."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val-number="The field Price must be a number." data-val-required="&#39;Price&#39; must not be empty." id="Price" name="Price" type="text" value="0" /> [NAR]
                            <span class="field-validation-valid" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="OldPrice" title="">Old price</label><div class="ico-help" title="The old price of the product. If you set an old price, this will display alongside the current price on the product page to show the difference in price."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val-number="The field Old price must be a number." data-val-required="&#39;Old Price&#39; must not be empty." id="OldPrice" name="OldPrice" type="text" value="0" /> [NAR]
                            <span class="field-validation-valid" data-valmsg-for="OldPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ProductCost" title="">Product cost</label><div class="ico-help" title="Product cost is a prime product cost. This field is only for internal use, not visible for customers."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val-number="The field Product cost must be a number." data-val-required="&#39;Product Cost&#39; must not be empty." id="ProductCost" name="ProductCost" type="text" value="0" /> [NAR]
                            <span class="field-validation-valid" data-valmsg-for="ProductCost" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SpecialPrice" title="">Special price</label><div class="ico-help" title="Set a special price of the product. The new price will be valid between the start and end dates."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val-number="The field Special price must be a number." id="SpecialPrice" name="SpecialPrice" type="text" value="0" /> [NAR]
                            <span class="field-validation-valid" data-valmsg-for="SpecialPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SpecialPriceStartDateTimeUtc" title="">Special price start date</label><div class="ico-help" title="The start date of the special price in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
                            <input id="SpecialpriceStartDateTimeUtc" name="SpecialpriceStartDateTimeUtc" style="width: 80%" />


                            <span class="field-validation-valid" data-valmsg-for="SpecialPriceStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SpecialPriceEndDateTimeUtc" title="">Special price end date</label><div class="ico-help" title="The end date of the special price in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
                            <input id="SpecialPriceEndDateTimeUtc" name="SpecialPriceEndDateTimeUtc" style="width: 80%" />

                            <span class="field-validation-valid" data-valmsg-for="SpecialPriceEndDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DisableBuyButton" title="">Disable buy button</label><div class="ico-help" title="Check to disable the buy button for this product. This may be necessary for products that are &#39;available upon request&#39;."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val-required="&#39;Disable Buy Button&#39; must not be empty." id="DisableBuyButton" name="DisableBuyButton" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="DisableBuyButton" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DisableWishlistButton" title="">Disable wishlist button</label><div class="ico-help" title="Check to disable the wishlist button for this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val-required="&#39;Disable Wishlist Button&#39; must not be empty." id="DisableWishlistButton" name="DisableWishlistButton" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="DisableWishlistButton" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                  </div>  
            </div>                 
            <div class="panel panel-default no-margin" id="group-inventory">
                <div class="panel-heading">
                    Inventory
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="ManageInventoryMethodId" title="">Inventory method</label><div class="ico-help" title="Select inventory method. There are three methods: Don’t track inventory, Track inventory and Track inventory by attributes. You should use Track inventory by attributes when the product has different combinations of these attributes and then manage inventory for this combinations."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val-number="The field Inventory method must be a number." data-val-required="&#39;Manage Inventory Method Id&#39; must not be empty." id="InventoryMethodId" name="InventoryMethodId">
                                <option selected="selected" value="0">Don&#39;t track inventory</option>
                                <option value="1">Track inventory</option>
                            </select>
                            <span class="field-validation-valid" data-valmsg-for="InventoryMethodId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlStockQuantity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="StockQuantity" title="">Stock quantity</label><div class="ico-help" title="The current stock quantity of this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Stock quantity must be a number." data-val-required="&#39;Stock Quantity&#39; must not be empty." id="StockQuantity" name="StockQuantity" type="text" />
                            <span class="field-validation-valid" data-valmsg-for="StockQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlWarehouse">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="WarehouseId" title="">Warehouse</label><div class="ico-help" title="Choose the warehouse which will be used when calculating Delivery rates. You can manage warehouses by selecting  Configuration > Delivery > Warehouses."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="select2" id="WarehouseId" multiple="multiple" name="WarehouseId" style="width: 80%">
                                <option value="1">Main Boutique: Olorunsogo, Ilorin</option>
                                <option value="2">Mini Boutique: Olorunsogo, Ilorin</option>
                                <option value="3">Main Boutique: Ibadan</option>
                            </select>
                            <span class="field-validation-valid" data-valmsg-for="WarehouseId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDisplayStockAvailability">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="DisplayStockAvailability" title="">Display availability</label><div class="ico-help" title="Check to display stock availability. When enabled, customers will see stock availability."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val-required="&#39;Display Stock Availability&#39; must not be empty." id="DisplayStockAvailability" name="DisplayStockAvailability" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="DisplayStockAvailability" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDisplayStockQuantity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="DisplayStockQuantity" title="">Display stock quantity</label><div class="ico-help" title="Check to display stock quantity. When enabled, customers will see stock quantity."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val-required="&#39;Display Stock Quantity&#39; must not be empty." id="DisplayStockQuantity" name="DisplayStockQuantity" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="DisplayStockQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlLowStockActivity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="LowStockActivityId" title="">Low stock activity</label><div class="ico-help" title="Action to be taken when your current stock quantity falls below (reaches) the &#39;Minimum stock quantity&#39;."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val-number="The field Low stock activity must be a number." data-val-required="&#39;Low Stock Activity Id&#39; must not be empty." id="LowStockActivityId" name="LowStockActivityId">
                                <option selected="selected" value="0">Nothing</option>
                                <option value="1">Disable buy button</option>
                                <option value="2">Unpublish</option>
                            </select>
                            <span class="field-validation-valid" data-valmsg-for="LowStockActivityId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlNotifyForQuantityBelow">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="NotifyAdminForQuantityBelow" title="">Notify for qty below</label><div class="ico-help" title="When the current stock quantity falls below (reaches) this quantity, a store owner will receive a notification."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Notify for qty below must be a number." data-val-required="&#39;Notify Admin For Quantity Below&#39; must not be empty." id="NotifyAdminForQuantityBelow" name="NotifyAdminForQuantityBelow" type="text"  />
                            <span class="field-validation-valid" data-valmsg-for="NotifyAdminForQuantityBelow" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="OrderMaximumQuantity" title="">Maximum cart qty</label><div class="ico-help" title="Set the maximum quantity allowed in a customer&#39;s shopping cart e.g. set to 5 to only allow customers to purchase 5 of this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Maximum cart qty must be a number." data-val-required="&#39;Order Maximum Quantity&#39; must not be empty." id="OrderMaximumQuantity" name="OrderMaximumQuantity" type="text" />

                            <span class="field-validation-valid" data-valmsg-for="OrderMaximumQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
             </div>       
            <div class="panel panel-default" id="group-Delivery">
                <div class="panel-heading">
                    Delivery
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="IsDeliveryEnabled" title="">Delivery Enabled</label><div class="ico-help" title="Check if the product can be Delivered. You can manage Delivery settings by selecting Configuration > Delivery."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input checked="checked" class="check-box" data-val-required="&#39;Is Delivery Enabled&#39; must not be empty." id="IsDeliveryEnabled" name="IsDeliveryEnabled" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="IsDeliveryEnabled" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlWeight">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Weight" title="">Weight</label><div class="ico-help" title="The product weight."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Weight must be a number." data-val-required="&#39;Weight&#39; must not be empty." id="Weight" name="Weight" value="0" type="text" />

 [lb(s)]
                            <span class="field-validation-valid" data-valmsg-for="Weight" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlLength">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Length" title="">Length</label><div class="ico-help" title="The product length."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Length must be a number." data-val-required="&#39;Length&#39; must not be empty." id="Length" name="Length" type="text" value="0" />

 [inch(es)]
                            <span class="field-validation-valid" data-valmsg-for="Length" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlWidth">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Width" title="">Width</label><div class="ico-help" title="The product width."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Width must be a number." data-val-required="&#39;Width&#39; must not be empty." id="Width" name="Width" type="text" value="0" />

 [inch(es)]
                            <span class="field-validation-valid" data-valmsg-for="Width" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlHeight">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Height" title="">Height</label><div class="ico-help" title="The product height."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Height must be a number." data-val-required="&#39;Height&#39; must not be empty." id="Height" name="Height" type="text" value="0" />

 [inch(es)]
                            <span class="field-validation-valid" data-valmsg-for="Height" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlFreeDelivery">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="IsFreeDelivery" title="">Free Delivery</label><div class="ico-help" title="Check if this product comes with FREE Delivery."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val-required="&#39;Is Free Delivery&#39; must not be empty." id="IsFreeDelivery" name="IsFreeDelivery" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="IsFreeDelivery" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlAdditionalDeliveryCharge">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AdditionalDeliveryCharge" title="">Additional Delivery charge</label><div class="ico-help" title="The additional Delivery charge."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val-number="The field Additional Delivery charge must be a number." data-val-required="&#39;Additional Delivery Charge&#39; must not be empty." id="AdditionalDeliveryCharge" name="AdditionalDeliveryCharge" type="text" value="0" />

 [NAR]
                            <span class="field-validation-valid" data-valmsg-for="AdditionalDeliveryCharge" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDeliveryDate">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="DeliveryDateId" title="">Delivery date</label><div class="ico-help" title="Choose a delivery date which will be displayed in the public store. You can manage delivery dates by selecting Configuration > Delivery > Delivery dates."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val-number="The field Delivery date must be a number." data-val-required="&#39;Delivery Date Id&#39; must not be empty." id="DeliveryDateId" name="DeliveryDateId"><option selected="selected" value="0">None</option>
                        <option value="1">1-2 days</option>
                        <option value="2">3-5 days</option>
                        <option value="3">1 week</option>
                        </select>
                            <span class="field-validation-valid" data-valmsg-for="DeliveryDateId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mappings
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="SelectedCategoryIds" title="">Categories</label><div class="ico-help" title="Choose categories. You can manage product categories by selecting Catalog > Categories."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="select2" id="SelectedCategoryIds" multiple="multiple" name="SelectedCategoryIds">
                                <option value="1">Computers</option>
                                <option value="2">Computers &gt;&gt; Desktops</option>
                                <option value="3">Computers &gt;&gt; Notebooks</option>
                                <option value="4">Computers &gt;&gt; Software</option>
                            
                            </select>
             
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="SelectedManufacturerIds" title="">Manufacturers</label><div class="ico-help" title="Choose the manufacturer. You can manage manufacturers by selecting Catalog > Manufacturers."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="select2" id="SelectedManufacturerIds" multiple="multiple" name="SelectedManufacturerIds">
                                <option value="1">Apple</option>
                                <option value="2">HP</option>
                                <option value="3">Nike</option>
                            </select>

                        </div>
                    </div>

            <div class="panel panel-default advanced-setting" id="group-required-other-products">
                <div class="panel-heading">
                    Require other products
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="RequireOtherProducts" title="">Require other products</label><div class="ico-help" title="Check if the product requires adding other products to the cart."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val-required="&#39;Require Other Products&#39; must not be empty." id="RequireOtherProducts" name="RequireOtherProducts" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="RequireOtherProducts" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div id="pnlRequiredProductIds">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="label-wrapper"><label class="control-label" for="RequiredProductIds" title="">Required product IDs</label><div class="ico-help" title="Specify comma separated list of required product IDs. NOTE: Ensure that there are no circular references (for example, A requires B, and B requires A)."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-8">
                            <select class="select2" id="RequiredProductIds" multiple="multiple" style="width: 100%" name="RequiredProductIds">
                                <option value="1">Computers</option>
                                <option value="2">Computers &gt;&gt; Desktops</option>
                                <option value="3">Computers &gt;&gt; Notebooks</option>
                                <option value="4">Computers &gt;&gt; Software</option>
                            
                            </select>
             
                        </div>
                        </div>
                    </div>
 <div class="form-group" id="pnlAutomaticallyAddRequiredProducts">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AutomaticallyAddRequiredProducts" title="">Automatically add these products to the cart</label><div class="ico-help" title="Check to automatically add these products to the cart."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val-required="&#39;Automatically Add Required Products&#39; must not be empty." id="AutomaticallyAddRequiredProducts" name="AutomaticallyAddRequiredProducts" type="checkbox" value="1" />
                            <span class="field-validation-valid" data-valmsg-for="AutomaticallyAddRequiredProducts" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>






</form>
                </div>
            </div>

@endsection
@section('script')
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2({
        tags: true
    });

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#AvailableStartDateTimeUtc').datepicker({
      autoclose: true
    });

    $('#AvailableEndDateTimeUtc').datepicker({
      autoclose: true
    });

    $('#MarkAsNewStartDateTimeUtc').datepicker({
      autoclose: true
    });

    $('#MarkAsNewEndDateTimeUtc').datepicker({
      autoclose: true
    });

    $('#SpecialpriceStartDateTimeUtc').datepicker({
      autoclose: true
    });

    $('#SpecialPriceEndDateTimeUtc').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
@endsection
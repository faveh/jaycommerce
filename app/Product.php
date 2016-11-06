<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Order;
use App\ProductTag;

class Product extends Model
{
    public $fillable = [
            "ProductType",
            "Name",
           "ShortDescription",
           "FullDescription",
            "Sku",
            "Published",
            "ProductTag",
            "ShowOnHomePage",
            "AvailableStartDateTimeUtc",
            "AvailableEndDateTimeUtc",
            "MarkAsNew",
            "MarkAsNewStartDateTimeUtc",
            "MarkAsNewEndDateTimeUtc",
            "Price",
            "OldPrice",
            "ProductCost",
            "SpecialPrice",
            "SpecialPriceStartDateTimeUtc",
            "SpecialPriceEndDateTimeUtc",
            "DisableBuyButton",
            "DisableWishlistButton",
            "InventoryMethod",
            "StockQuantity",
            "WarehouseId",
            "DisplayStockAvailability",
            "DisplayStockQuantity",
            "LowStockActivityId",
            "NotifyAdminForQuantityBelow",
            "OrderMaximumQuantity",
            "IsDeliveryEnabled",
            "Weight",
            "Length",
            "Width",
            "Height",
            "IsFreeDelivery",
            "DeliveryFee",
            "DeliveryDateId",
            "category_id",
            "manufacturer_id",
            "RequireOtherProducts",
            "RequiredProductIds",
            "AutomaticallyAddRequiredProducts",
	];
    
      public function orders() {
        return $this->belongsToMany("App\Order", "order_item");
    }
    

    public function producttags() {
        return $this->hasMany("App\ProductTag");
    }

    public function category() {
        return $this->belongsTo("App\Category");
    }

}

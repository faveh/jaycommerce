<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Name'=> 'required',
            'ShortDescription'=> 'required',
            'FullDescription'=> 'required',
            'ShowOnHomePage'=> 'required',
            'Sku'=> 'required',
            'RequireOtherProducts'=> 'required',
            'RequiredProductIds'=> 'required',
            'AutomaticallyAddRequiredProducts'=> 'required',
            'HasUserAgreement'=> 'required',
            'UserAgreementText'=> 'required',
            'Deleted'=> 'required',
            'Published'=> 'required',
            'AvailableEndDateTimeUtc'=> 'required',
            'AvailableStartDateTimeUtc'=> 'required',
            'Height'=> 'required',
            'Weight'=> 'required',
            'Length'=> 'required',
            'HasDiscountsApplied'=> 'required',
            'Width'=> 'required',
            'IsDeliveryEnabled'=> 'required',
            'IsFreeDelivery'=> 'required',
            'DeliveryFee'=> 'required',
            'DeliveryDateId'=> 'required',
            'WarehouseId'=> 'required',
            'StockQuantity'=> 'required',
            'DisplayStockAvailability'=> 'required',
            'DisplayStockQuantity'=> 'required',
            'LowStockActivityId'=> 'required',
            'NotifyAdminForQuantityBelow'=> 'required',
            'OrderMaximumQuantity'=> 'required',
            'AllowAddingOnlyExistingAttributeCombinations'=> 'required',
            'DisableBuyButton'=> 'required',
            'DisableWishlistButton'=> 'required',
            'AvailableForPreOrder'=> 'required',
            'PreOrderAvailabilityStartDateTimeUtc'=> 'required',
            'Price'=> 'required',
            'OldPrice'=> 'required',
            'ProductCost'=> 'required',
        ];
    }
}

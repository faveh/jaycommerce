<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductType');
            $table->string('Name');
            $table->text('ShortDescription')->nullable();
            $table->text('FullDescription')->nullable();
            $table->string('Sku')->nullable();
            $table->integer('Published')->nullable();
            $table->integer('ProductTag')->nullable();
            $table->integer('ShowOnHomePage')->nullable();
            $table->string('AvailableStartDateTimeUtc')->nullable();
            $table->string('AvailableEndDateTimeUtc')->nullable();
            $table->integer('MarkAsNew')->nullable();
            $table->string('MarkAsNewStartDateTimeUtc')->nullable();
            $table->string('MarkAsNewEndDateTimeUtc')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('OldPrice')->nullable();
            $table->integer('ProductCost')->nullable();
            $table->integer('SpecialPrice')->nullable();
            $table->string('SpecialPriceStartDateTimeUtc')->nullable();
            $table->string('SpecialPriceEndDateTimeUtc')->nullable();
            $table->integer('DisableBuyButton')->nullable();
            $table->integer('DisableWishlistButton')->nullable();
            $table->integer('InventoryMethod')->nullable();
            $table->string('StockQuantity')->nullable();
            $table->string('WarehouseId')->nullable();
            $table->integer('DisplayStockAvailability')->nullable();
            $table->integer('DisplayStockQuantity')->nullable();
            $table->integer('LowStockActivityId')->nullable();
            $table->integer('NotifyAdminForQuantityBelow')->nullable();
            $table->integer('OrderMaximumQuantity')->nullable();
            $table->integer('IsDeliveryEnabled')->nullable();
            $table->float('Weight')->nullable();
            $table->float('Length')->nullable();
            $table->float('Width')->nullable();
            $table->float('Height')->nullable();
            $table->integer('IsFreeDelivery')->nullable();
            $table->string('DeliveryFee')->nullable();
            $table->integer('DeliveryDateId')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('manufacturer_id')->nullable();
            $table->integer('RequireOtherProducts')->nullable();
            $table->integer('RequiredProductIds')->nullable();
            $table->integer('AutomaticallyAddRequiredProducts')->nullable();
            $table->timestamps();
      // $table->integer('stock')->nullable();
            // $table->integer('mrp');
            // $table->integer('price');
            // $table->integer('discount');
            // $table->string('image');
            // $table->text('short_desc');
            // $table->longtext('long_desc');
            // $table->timestamps();
            // $table->string('CallForPrice');
            // $table->string('NotReturnable');
            // $table->string('AdditionalShippingCharge');

            // $table->string('HasDiscountsApplied')->nullabe();
            // $table->string('AllowAddingOnlyExistingAttributeCombinations')->nullabe();
            // $table->string('AllowCustomerReviews');
            // $table->string('ApprovedRatingSum');
            // $table->string('NotApprovedRatingSum');
            // $table->string('ApprovedTotalReviews');
            // $table->string('NotApprovedTotalReviews');
            // $table->string('ProductTemplateId');
            // $table->string('VendorId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

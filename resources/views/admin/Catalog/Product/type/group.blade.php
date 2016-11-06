@extends('admin.layout.master')
@section('title')
    Group Product
@endsection
@section('content-heada')
    New Group Product
@endsection
@section('content-nav')
        <li class="active">Categories</li>
@endsection
@section('content')
             {{-- <div class="content-wrapper"> --}}
                



                
                    


<div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
<input data-val="true" data-val-number="The field ID must be a number." data-val-required="&#39;Id&#39; must not be empty." id="Id" name="Id" type="hidden" value="0" />

<script>
    $(document).ready(function () {
        bindBootstrapTabSelectEvent('product-edit');
    });
</script>

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
                <li class="advanced-setting"><a data-tab-name="tab-seo" data-toggle="tab" href="#tab-seo">SEO</a></li>
                <li class=""><a data-tab-name="tab-pictures" data-toggle="tab" href="#tab-pictures">Pictures</a></li>
                <li class=""><a data-tab-name="tab-product-attributes" data-toggle="tab" href="#tab-product-attributes">Product attributes</a></li>
                <li class=""><a data-tab-name="tab-specification-attributes" data-toggle="tab" href="#tab-specification-attributes">Specification attributes</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-info">


<script type="text/javascript">
    $(document).ready(function() {
            $("#ShowOnHomePage").click(toggleShowOnHomePage);
        $("#ProductTypeId").change(toggleProductType);
        $("#RequireOtherProducts").click(toggleRequireOtherProducts);
        $("#AvailableForPreOrder").click(togglePreOrder);
        $("#IsGiftCard").click(toggleGiftCard);
        $("#CustomerEntersPrice").click(toggleCustomerEntersPrice);
        $("#BasepriceEnabled").click(toggleBasepriceEnabled);
        $("#IsDownload").click(toggleDownloadableProduct);
        $("#UnlimitedDownloads").click(toggleDownloadableProduct);
        $("#HasSampleDownload").click(toggleDownloadableProduct);
        $("#HasUserAgreement").click(toggleDownloadableProduct);
        $("#IsRecurring").click(toggleRecurring);
        $("#IsRental").click(toggleRental);
        $("#IsShipEnabled").click(toggleShipping);
        $("#IsTaxExempt").click(toggleTax);
        $("#ManageInventoryMethodId").change(toggleManageStock);
        $("#UseMultipleWarehouses").click(toggleManageStock);
        $("#BackorderModeId").change(toggleManageStock);
        $("#DisplayStockAvailability").click(toggleManageStock);
        $("#MarkAsNew").click(toggleMarkAsNew);

            toggleShowOnHomePage();
        toggleProductType();
        togglePreOrder();
        toggleRequireOtherProducts();
        toggleGiftCard();
        toggleCustomerEntersPrice();
        toggleBasepriceEnabled();
        toggleDownloadableProduct();
        toggleRecurring();
        toggleRental();
        toggleShipping();
        toggleTax();
        toggleManageStock();
        toggleMarkAsNew();
    });

    function toggleShowOnHomePage() {
        if ($('#ShowOnHomePage').is(':checked')) {
            $('#pnlDisplayOrder').show();
        } else {
            $('#pnlDisplayOrder').hide();
        }
    }

    function toggleProductType() {
        var selectedProductTypeId = $("#ProductTypeId").val();
        if (!selectedProductTypeId || selectedProductTypeId == 5) {
            $('#group-prices').show();
        $('#tier-prices').show();
        $('#group-required-other-products').show();
        $('#group-giftcard').show();
        $('#group-downloads').show();
        $('#group-recurring').show();
        $('#group-rental').show();
        $('#group-shipping').show();
        $('#group-inventory').show();
        $('#group-associated-products').hide();
    } else if (selectedProductTypeId == 10) {
        $('#group-prices').hide();
        $('#tier-prices').hide();
        $('#group-required-other-products').hide();
        $('#group-giftcard').hide();
        $('#group-downloads').hide();
        $('#group-recurring').hide();
        $('#group-rental').hide();
        $('#group-shipping').hide();
        $('#group-inventory').hide();
        $('#group-associated-products').show();
    }
    }

    function togglePreOrder() {
        if ($('#AvailableForPreOrder').is(':checked')) {
            $('#pnlPreOrderAvailabilityStartDateTimeUtc').show();
        } else {
            $('#pnlPreOrderAvailabilityStartDateTimeUtc').hide();
        }
    }

    function toggleRequireOtherProducts() {
        if ($('#RequireOtherProducts').is(':checked')) {
            $('#pnlRequiredProductIds').show();
            $('#pnlAutomaticallyAddRequiredProducts').show();
        } else {
            $('#pnlRequiredProductIds').hide();
            $('#pnlAutomaticallyAddRequiredProducts').hide();
        }
    }

    function toggleGiftCard() {
        if ($('#IsGiftCard').is(':checked')) {
            $('#pnlGiftCardType').show();
            $('#pnlOverriddenGiftCardAmount').show();
        } else {
            $('#pnlGiftCardType').hide();
            $('#pnlOverriddenGiftCardAmount').hide();
        }
    }

    function toggleCustomerEntersPrice() {
        if ($('#CustomerEntersPrice').is(':checked')) {
            $('#pnlMinimumCustomerEnteredPrice').show();
            $('#pnlMaximumCustomerEnteredPrice').show();
        } else {
            $('#pnlMinimumCustomerEnteredPrice').hide();
            $('#pnlMaximumCustomerEnteredPrice').hide();
        }
    }

    function toggleBasepriceEnabled() {
        if ($('#BasepriceEnabled').is(':checked')) {
            $('#pnlBasepriceAmount').show();
            $('#pnlBasepriceUnit').show();
            $('#pnlBasepriceBaseAmount').show();
            $('#pnlBasepriceBaseUnit').show();
        } else {
            $('#pnlBasepriceAmount').hide();
            $('#pnlBasepriceUnit').hide();
            $('#pnlBasepriceBaseAmount').hide();
            $('#pnlBasepriceBaseUnit').hide();
        }
    }

    function toggleDownloadableProduct() {
        if ($('#IsDownload').is(':checked')) {
            $('#pnlDownloadFile').show();
            $('#pnlUnlimitedDownloads').show();
            if ($('#UnlimitedDownloads').is(':checked')) {
                $('#pnlMaxNumberOfDownloads').hide();
            } else {
                $('#pnlMaxNumberOfDownloads').show();
            }
            $('#pnlDownloadExpirationDays').show();
            $('#pnlDownloadActivationType').show();

            $('#pnlHasUserAgreement').show();
            if ($('#HasUserAgreement').is(':checked')) {
                $('#pnlUserAgreementText').show();
            } else {
                $('#pnlUserAgreementText').hide();
            }

            $('#pnlHasSampleDownload').show();

            if ($('#HasSampleDownload').is(':checked')) {
                $('#pnlSampleDownloadFile').show();
            } else {
                $('#pnlSampleDownloadFile').hide();
            }
        } else {
            $('#pnlDownloadFile').hide();
            $('#pnlUnlimitedDownloads').hide();
            $('#pnlMaxNumberOfDownloads').hide();
            $('#pnlDownloadExpirationDays').hide();
            $('#pnlDownloadActivationType').hide();
            $('#pnlHasUserAgreement').hide();
            $('#pnlUserAgreementText').hide();
            $('#pnlHasSampleDownload').hide();
            $('#pnlSampleDownloadFile').hide();
        }
    }

    function toggleShipping() {
        if ($('#IsShipEnabled').is(':checked')) {
            $('#pnlFreeShipping').show();
            $('#pnlShipSeparately').show();
            $('#pnlAdditionalShippingCharge').show();
            $('#pnlWeight').show();
            $('#pnlLength').show();
            $('#pnlWidth').show();
            $('#pnlHeight').show();
            $('#pnlDeliveryDate').show();
        } else {
            $('#pnlFreeShipping').hide();
            $('#pnlShipSeparately').hide();
            $('#pnlAdditionalShippingCharge').hide();
            $('#pnlWeight').hide();
            $('#pnlLength').hide();
            $('#pnlWidth').hide();
            $('#pnlHeight').hide();
            $('#pnlDeliveryDate').hide();
        }
    }

    function toggleRecurring() {
        if ($('#IsRecurring').is(':checked')) {
            $('#pnlCycleLength').show();
            $('#pnlCyclePeriod').show();
            $('#pnlTotalCycles').show();
        } else {
            $('#pnlCycleLength').hide();
            $('#pnlCyclePeriod').hide();
            $('#pnlTotalCycles').hide();
        }
    }

    function toggleRental() {
        if ($('#IsRental').is(':checked')) {
            $('#pnlRentalPriceLength').show();
            $('#pnlRentalPricePeriod').show();
        } else {
            $('#pnlRentalPriceLength').hide();
            $('#pnlRentalPricePeriod').hide();
        }
    }

    function toggleTax() {
        if ($('#IsTaxExempt').is(':checked')) {
            $('#pnlTaxCategory').hide();
        } else {
            $('#pnlTaxCategory').show();
        }
    }

    function toggleManageStock() {
        var selectedManageInventoryMethodId = $("#ManageInventoryMethodId").val();
        if (selectedManageInventoryMethodId == 0) {
            $('#pnlUseMultipleWarehouses').hide();
        $('#pnlWarehouse').show();
        $('#pnlMultipleWarehouses').hide();
        $('#pnlStockQuantity').hide();
        $('#pnlDisplayStockAvailability').hide();
        $('#pnlDisplayStockQuantity').hide();
        $('#pnlMinStockQuantity').hide();
        $('#pnlLowStockActivity').hide();
        $('#pnlNotifyForQuantityBelow').hide();
        $('#pnlAllowBackInStockSubscriptions').hide();
        $('#pnlBackorders').hide();
        $('#pnlAllowAddingOnlyExistingAttributeCombinations').hide();
    } else if (selectedManageInventoryMethodId == 1) {
        $('#pnlUseMultipleWarehouses').show();

        if ($('#UseMultipleWarehouses').is(':checked')) {
            $('#pnlWarehouse').hide();
            $('#pnlMultipleWarehouses').show();
            $('#pnlStockQuantity').hide();
        } else {
            $('#pnlWarehouse').show();
            $('#pnlMultipleWarehouses').hide();
            $('#pnlStockQuantity').show();
        }

        $('#pnlDisplayStockAvailability').show();
        if ($('#DisplayStockAvailability').is(':checked')) {
            $('#pnlDisplayStockQuantity').show();
        } else {
            $('#pnlDisplayStockQuantity').hide();
        }

        $('#pnlMinStockQuantity').show();
        $('#pnlLowStockActivity').show();
        $('#pnlNotifyForQuantityBelow').show();
        $('#pnlBackorders').show();
        var selectedBackorderModeId = $("#BackorderModeId").val();
        if (selectedBackorderModeId == 0) {
            //no backorders
            $('#pnlAllowBackInStockSubscriptions').show();
    } else {
    //backorders are enabled
                $('#pnlAllowBackInStockSubscriptions').hide();
    }
    $('#pnlAllowAddingOnlyExistingAttributeCombinations').hide();
    } else {
        $('#pnlUseMultipleWarehouses').hide();
        $('#pnlWarehouse').show();
        $('#pnlMultipleWarehouses').hide();
        $('#pnlStockQuantity').hide();
        $('#pnlDisplayStockAvailability').show();
        if ($('#DisplayStockAvailability').is(':checked')) {
            $('#pnlDisplayStockQuantity').show();
        } else {
            $('#pnlDisplayStockQuantity').hide();
        }
        $('#pnlMinStockQuantity').hide();
        $('#pnlLowStockActivity').hide();
        $('#pnlNotifyForQuantityBelow').hide();
        $('#pnlAllowBackInStockSubscriptions').hide();
        $('#pnlBackorders').hide();
        $('#pnlAllowAddingOnlyExistingAttributeCombinations').show();
    }
    }

    function toggleMarkAsNew() {
        if ($('#MarkAsNew').is(':checked')) {
            $('#pnlMarkAsNewStartDateTimeUtc').show();
            $('#pnlMarkAsNewEndDateTimeUtc').show();
        } else {
            $('#pnlMarkAsNewStartDateTimeUtc').hide();
            $('#pnlMarkAsNewEndDateTimeUtc').hide();
        }
    }



    //tags
    $(document).ready(function() {
        var initialProductTags = ['apparel','awesome','book','camera','cell','compact','computer','cool','digital','game','gift','jeans','jewelry','nice','shirt','shoes']
        $("#ProductTags").tagEditor({
            autocomplete: {
                delay: 0,
                position: { collision: 'flip' },
                source: initialProductTags
            },
            delimiter: ',',
            placeholder: 'Enter tags ...'
        });
    });

    //required product friendly names
    $(document).ready(function() {
        loadRequiredProductFriendlyNames();
    });

    $(document).ready(function() {
        $('#RequiredProductIds')
            .data('timeout', null)
            .keyup(function() {
                clearTimeout($(this).data('timeout'));
                //one second timeout
                $(this).data('timeout', setTimeout(loadRequiredProductFriendlyNames, 1000));
            });
    });

    function loadRequiredProductFriendlyNames() {
        var inputValue = $('#RequiredProductIds').val();
        if (inputValue) {
            //load friendly names
            $('#required-products-check-progress').show();

            var postData = {
                productIds: inputValue
            };
            addAntiForgeryToken(postData);

            $.ajax({
                cache: false,
                type: 'POST',
                url: '/Admin/Product/LoadProductFriendlyNames',
                data: postData,
                dataType: 'json',
                success: function(data) {
                    $('#required-products-check-progress').hide();
                    $('#required-product-names').text(data.Text);
                },
                failure: function() {
                    $('#required-products-check-progress').hide();
                    $('#required-product-names').text('');
                }
            });
        } else {
            $('#required-product-names').text('');
        }
    }
</script>

<div class="raw clearfix">
    <div class="col-md-7">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    General information
                </div>
                <div class="panel-body">
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ProductTypeId" title="">Product type</label><div class="ico-help" title="Product type can be simple or grouped. In most cases your product will have the Simple product type. You need to use Grouped product type when a new product consists of one or more existing products that will be displayed on one single product details page."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Product type must be a number." data-val-required="&#39;Product Type Id&#39; must not be empty." id="ProductTypeId" name="ProductTypeId"><option value="5">Simple</option>
<option value="10">Grouped (product with variants)</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="ProductTypeId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" >
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ProductTemplateId" title="">Product template</label><div class="ico-help" title="Choose a product template. This template defines how this product will be displayed in public store."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Product template must be a number." data-val-required="&#39;Product Template Id&#39; must not be empty." id="ProductTemplateId" name="ProductTemplateId"><option value="1">Simple product</option>
<option value="2">Grouped product (with variants)</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="ProductTemplateId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="VisibleIndividually" title="">Visible individually</label><div class="ico-help" title="Check it if you want the product to be on catalog or search results. You can uncheck this box to hide associated products from catalog and make them accessible only from grouped product details page."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input checked="checked" class="check-box" data-val="true" data-val-required="&#39;Visible Individually&#39; must not be empty." id="VisibleIndividually" name="VisibleIndividually" type="checkbox" value="true" /><input name="VisibleIndividually" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="VisibleIndividually" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <div class="col-md-3">
<div class="label-wrapper"><label class="control-label" for="Name" title="">Product name</label><div class="ico-help" title="The name of the product."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-9">
<input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Name&#39; must be between 0 and 400 characters." data-val-length-max="400" data-val-required="Please provide a name." id="Name" name="Name" type="text" value="" />
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



<script>
    $(document).ready(function() {
        
        function RoxyFileBrowser220245625(field_name, url, type, win) {
            var roxyFileman = '/Administration/Content/Roxy_Fileman/index.html';
            if (roxyFileman.indexOf("?") < 0) {
                roxyFileman += "?type=" + type;
            } else {
                roxyFileman += "&type=" + type;
            }
            roxyFileman += '&input=' + field_name + '&value=' + document.getElementById(field_name).value;
            tinyMCE.activeEditor.windowManager.open({
                file: roxyFileman,
                title: 'Roxy Fileman',
                width: 850,
                height: 650,
                resizable: "yes",
                plugins: "media",
                inline: "yes",
                close_previous: "no"
            }, { window: win, input: field_name });
            return false;
        }

        var defaultEditorSettings220245625 = {
            selector: "#FullDescription",
            fontsize_formats: "8pt 9pt 10pt 11pt 12pt 26pt 36pt",
            height: 200,
            width: '100%',
            autoresize_min_height: 200,
            autoresize_max_height: 200,
            plugins: [
                "advlist autolink autoresize directionality lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "ltr rtl | insertfile undo redo | styleselect | fontselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            //"relative_urls" required by jbimages plugin to be set to "false"
            relative_urls: false,
                        //we should set "convert_urls" set to "false" (because of "relative_urls" requirement)
            //otherwise, it'll break existing links when editing message template
            convert_urls: false
        };

        function getAdditionalEditorSettings220245625(settings) {
            
            return settings;
        }

        tinyMCE.init(getAdditionalEditorSettings220245625(defaultEditorSettings220245625));
    });
</script>

<textarea Length="0" cols="20" id="FullDescription" name="FullDescription" rows="2">
</textarea>
<span class="field-validation-valid" data-valmsg-for="FullDescription" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="Sku" title="">SKU</label><div class="ico-help" title="Product stock keeping unit (SKU). Your internal unique identifier that can be used to track this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Sku&#39; must be between 0 and 400 characters." data-val-length-max="400" id="Sku" name="Sku" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="Sku" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="Published" title="">Published</label><div class="ico-help" title="Check to publish this product (visible in store). Uncheck to unpublish (product not available in store)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input checked="checked" class="check-box" data-val="true" data-val-required="&#39;Published&#39; must not be empty." id="Published" name="Published" type="checkbox" value="true" /><input name="Published" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="Published" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ProductTags" title="">Product tags</label><div class="ico-help" title="Product tags are the keywords for product identification. The more products associated with a particular tag, the larger it will show on the tag cloud."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control text-box single-line" id="ProductTags" name="ProductTags" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="ProductTags" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="Gtin" title="">GTIN (global trade item number)</label><div class="ico-help" title="Enter global trade item number (GTIN). These identifiers include UPC (in North America), EAN (in Europe), JAN (in Japan), and ISBN (for books)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Gtin&#39; must be between 0 and 400 characters." data-val-length-max="400" id="Gtin" name="Gtin" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="Gtin" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ManufacturerPartNumber" title="">Manufacturer part number</label><div class="ico-help" title="The manufacturer&#39;s part number for this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Manufacturer Part Number&#39; must be between 0 and 400 characters." data-val-length-max="400" id="ManufacturerPartNumber" name="ManufacturerPartNumber" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="ManufacturerPartNumber" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" >
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ShowOnHomePage" title="">Show on home page</label><div class="ico-help" title="Check to display this product on your store&#39;s home page. Recommended for your most popular products."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Show On Home Page&#39; must not be empty." id="ShowOnHomePage" name="ShowOnHomePage" type="checkbox" value="true" /><input name="ShowOnHomePage" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="ShowOnHomePage" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDisplayOrder" >
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DisplayOrder" title="">Display order</label><div class="ico-help" title="Display order of the product. 1 represents the top of the list."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Display order must be a number." data-val-required="&#39;Display Order&#39; must not be empty." id="DisplayOrder" name="DisplayOrder" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#DisplayOrder").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="DisplayOrder" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AllowCustomerReviews" title="">Allow customer reviews</label><div class="ico-help" title="Check to allow customers to review this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input checked="checked" class="check-box" data-val="true" data-val-required="&#39;Allow Customer Reviews&#39; must not be empty." id="AllowCustomerReviews" name="AllowCustomerReviews" type="checkbox" value="true" /><input name="AllowCustomerReviews" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="AllowCustomerReviews" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AvailableStartDateTimeUtc" title="">Available start date</label><div class="ico-help" title="The start of the product&#39;s availability in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="AvailableStartDateTimeUtc" name="AvailableStartDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#AvailableStartDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="AvailableStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AvailableEndDateTimeUtc" title="">Available end date</label><div class="ico-help" title="The end of the product&#39;s availability in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="AvailableEndDateTimeUtc" name="AvailableEndDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#AvailableEndDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="AvailableEndDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MarkAsNew" title="">Mark as new</label><div class="ico-help" title="Check to mark  the product as new. Use this option for promoting new products."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Mark As New&#39; must not be empty." id="MarkAsNew" name="MarkAsNew" type="checkbox" value="true" /><input name="MarkAsNew" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="MarkAsNew" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMarkAsNewStartDateTimeUtc">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MarkAsNewStartDateTimeUtc" title="">Mark as new. Start date</label><div class="ico-help" title="Set Product as New from Date in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="MarkAsNewStartDateTimeUtc" name="MarkAsNewStartDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#MarkAsNewStartDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="MarkAsNewStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMarkAsNewEndDateTimeUtc">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MarkAsNewEndDateTimeUtc" title="">Mark as new. End date</label><div class="ico-help" title="Set Product as New to Date in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="MarkAsNewEndDateTimeUtc" name="MarkAsNewEndDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#MarkAsNewEndDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="MarkAsNewEndDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AdminComment" title="">Admin comment</label><div class="ico-help" title="This comment is for internal use only, not visible for customers."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" cols="20" id="AdminComment" name="AdminComment" rows="4">
</textarea>
                            <span class="field-validation-valid" data-valmsg-for="AdminComment" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                                    </div>
            </div>
            <div class="panel panel-default advanced-setting" id="group-giftcard">
                <div class="panel-heading">
                    Gift card
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="IsGiftCard" title="">Is gift card</label><div class="ico-help" title="Check if it is a gift card. After adding gift card products to the shopping cart and completing the purchases, you can then search and view the list of all the purchased gift cards by selecting Gift Cards from the Sales menu."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Gift Card&#39; must not be empty." id="IsGiftCard" name="IsGiftCard" type="checkbox" value="true" /><input name="IsGiftCard" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsGiftCard" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlGiftCardType">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="GiftCardTypeId" title="">Gift card type</label><div class="ico-help" title="There are two gift card types: virtual and physical. WARNING: not recommended to change the gift card type from one to another in a &quot;live&quot; store."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Gift card type must be a number." data-val-required="&#39;Gift Card Type Id&#39; must not be empty." id="GiftCardTypeId" name="GiftCardTypeId"><option selected="selected" value="0">Virtual</option>
<option value="1">Physical</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="GiftCardTypeId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlOverriddenGiftCardAmount">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="OverriddenGiftCardAmount" title="">Overridden gift card amount</label><div class="ico-help" title="Enter gift card amount that can be used after purchase. If not specified, then product price will be used."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Overridden gift card amount must be a number." id="OverriddenGiftCardAmount" name="OverriddenGiftCardAmount" type="text" value="" />
<script>
    $(document).ready(function() {
        $("#OverriddenGiftCardAmount").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>

                            <span class="field-validation-valid" data-valmsg-for="OverriddenGiftCardAmount" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default advanced-setting" id="group-downloads">
                <div class="panel-heading">
                    Downloadable product
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="IsDownload" title="">Downloadable product</label><div class="ico-help" title="Check if the product is downloadable. When customers purchase a downloadable product, they can download it direct from your store. The link will be visible after checkout."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Download&#39; must not be empty." id="IsDownload" name="IsDownload" type="checkbox" value="true" /><input name="IsDownload" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsDownload" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlDownloadFile">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DownloadId" title="">Download file</label><div class="ico-help" title="You can download file using URL or uploading from the computer. If you want to download file using URL check the box Use download URL."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-5">
                            


<script type="text/javascript">
    $(document).ready(function () {
        $('#cbUseDownloadURL31756209').click(toggleDownloadRecordType31756209);

        $('#saveDownloadUrl31756209').click(function () {
            var downloadUrl = $("#downloadurl31756209").val();
            $('#saveDownloadUrl31756209').attr('disabled', true);
            $.ajax({
                cache: false,
                type: "POST",
                url: "/Admin/Download/SaveDownloadUrl",
                data: { "downloadUrl": downloadUrl },
                success: function (data) {
                    $('#pnlDownloadURLResult31756209').fadeIn("slow").delay(1000).fadeOut("slow");
                    $("#download31756209value input").val(data.downloadId);
                    $('#saveDownloadUrl31756209').attr('disabled', false);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert('Failed to save download object.');
                    $('#saveDownloadUrl31756209').attr('disabled', false);
                }
            });
        });

        toggleDownloadRecordType31756209();
    });

    function toggleDownloadRecordType31756209() {
        if ($('#cbUseDownloadURL31756209').is(':checked')) {
            $('#pnlDownloadURL31756209').show();
            $('#pnlDownloadFile31756209').hide();
        } else {
            $('#pnlDownloadURL31756209').hide();
            $('#pnlDownloadFile31756209').show();
        }
    }

</script>

<div id="download31756209value">
    <input data-val="true" data-val-number="The field Download file must be a number." data-val-required="&#39;Download Id&#39; must not be empty." id="DownloadId" name="DownloadId" type="hidden" value="0" />
</div>

<div class="panel panel-default">
    <div class="panel-body">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="label-wrapper">
                        <label class="control-label">
                            Use download URL
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <input type="checkbox" name="cbUseDownloadURL31756209" id="cbUseDownloadURL31756209"
                            />
                </div>
            </div>
        <div id="pnlDownloadURL31756209">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="label-wrapper">
                        <label class="control-label">
                            Download URL
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="downloadurl31756209" id="downloadurl31756209"
                            />
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-6">
                    <button type="button" id="saveDownloadUrl31756209" class="btn btn-primary">Save download</button>
                    <div id="pnlDownloadURLResult31756209" style="display: none;">Download object is saved</div>
                </div>
            </div>
        </div>
        <div class="form-group" id="pnlDownloadFile31756209">
            <div class="col-xs-6">
                <div class="label-wrapper">
                    <label class="control-label">
                        Upload file
                    </label>
                </div>
            </div>
            <div class="col-xs-6">
                
                <div id="download31756209">
                    <noscript>
                        <p>
                            Please enable JavaScript to use file uploader.
                        </p>
                        <!-- or put a simple form for upload here -->
                    </noscript>
                </div>
                
                <script type="text/template" id="download31756209-qq-template">
                    <div class="qq-uploader-selector qq-uploader">
                        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                            <span>Drop files here to upload</span>
                        </div>
                        <div class="qq-upload-button-selector qq-upload-button">
                            <div>Upload a file</div>
                        </div>
                        <span class="qq-drop-processing-selector qq-drop-processing">
                            <span>Processing dropped files...</span>
                            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
                        </span>
                        <ul class="qq-upload-list-selector qq-upload-list">
                            <li>
                                <div class="qq-progress-bar-container-selector">
                                    <div class="qq-progress-bar-selector qq-progress-bar"></div>
                                </div>
                                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                                <span class="qq-edit-filename-icon-selector qq-edit-filename-icon"></span>
                                <span class="qq-upload-file-selector qq-upload-file"></span>
                                <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                                <span class="qq-upload-size-selector qq-upload-size"></span>
                                <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Cancel</a>
                                <a class="qq-upload-retry-selector qq-upload-retry" href="#">Retry</a>
                                <a class="qq-upload-delete-selector qq-upload-delete" href="#">Delete</a>
                                <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
                            </li>
                        </ul>
                    </div>
                </script>

                <script type="text/javascript">

                    $(document).ready(function () {
                        $("#download31756209").fineUploader({
                            request: {
                                endpoint: '/Admin/Download/AsyncUpload'
                            },
                            template: "download31756209-qq-template",
                            multiple: false
                        }).on("complete", function (event, id, name, responseJSON, xhr) {
                            $("#download31756209downloadurl").html("<a href='" + responseJSON.downloadUrl + "'>Download uploaded file</a>");
                            $("#download31756209value input").val(responseJSON.downloadId);
                            $("#download31756209remove").show();
                        });


                        $("#download31756209remove").click(function (e) {
                            $("#download31756209downloadurl").html("");
                            $("#download31756209value input").val(0);
                            $(this).hide();
                        });
                    });

                </script>

                <div id="download31756209downloadurl">
                </div>
                <div>
                        <span id="download31756209remove" class="btn btn-default" style="display:none;">Remove download</span>
                </div>
            </div>
        </div>
    </div>
</div>



                            <span class="field-validation-valid" data-valmsg-for="DownloadId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlUnlimitedDownloads">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="UnlimitedDownloads" title="">Unlimited downloads</label><div class="ico-help" title="When a customer purchases a download product, they can download the item unlimited number of times."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input checked="checked" class="check-box" data-val="true" data-val-required="&#39;Unlimited Downloads&#39; must not be empty." id="UnlimitedDownloads" name="UnlimitedDownloads" type="checkbox" value="true" /><input name="UnlimitedDownloads" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="UnlimitedDownloads" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlMaxNumberOfDownloads">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MaxNumberOfDownloads" title="">Max. downloads</label><div class="ico-help" title="The maximum number of downloads."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Max. downloads must be a number." data-val-required="&#39;Max Number Of Downloads&#39; must not be empty." id="MaxNumberOfDownloads" name="MaxNumberOfDownloads" type="text" value="10" />
<script>
    $(document).ready(function() {
        $("#MaxNumberOfDownloads").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="MaxNumberOfDownloads" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlDownloadExpirationDays">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DownloadExpirationDays" title="">Number of days</label><div class="ico-help" title="The number of days during customers keeps access to the file (e.g. 14). Leave this field blank to allow continuous downloads."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Number of days must be a number." id="DownloadExpirationDays" name="DownloadExpirationDays" type="text" value="" />
<script>
    $(document).ready(function() {
        $("#DownloadExpirationDays").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="DownloadExpirationDays" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlDownloadActivationType">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DownloadActivationTypeId" title="">Download activation type</label><div class="ico-help" title="A value indicating when download links will be enabled."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Download activation type must be a number." data-val-required="&#39;Download Activation Type Id&#39; must not be empty." id="DownloadActivationTypeId" name="DownloadActivationTypeId"><option value="1">When order is paid</option>
<option value="10">Manually</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="DownloadActivationTypeId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlHasUserAgreement">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="HasUserAgreement" title="">Has user agreement</label><div class="ico-help" title="Select this checkbox if the customer has a user agreement (a customer must agree with this user agreement when trying to download the product)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Has User Agreement&#39; must not be empty." id="HasUserAgreement" name="HasUserAgreement" type="checkbox" value="true" /><input name="HasUserAgreement" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="HasUserAgreement" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlUserAgreementText">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="UserAgreementText" title="">User agreement text</label><div class="ico-help" title="The text of the user agreement."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" cols="20" id="UserAgreementText" name="UserAgreementText" rows="4">
</textarea>
                            <span class="field-validation-valid" data-valmsg-for="UserAgreementText" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlHasSampleDownload">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="HasSampleDownload" title="">Has sample download file</label><div class="ico-help" title="You can download file using URL or uploading from the computer. If you want to download file using URL check the box Use download URL."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Has Sample Download&#39; must not be empty." id="HasSampleDownload" name="HasSampleDownload" type="checkbox" value="true" /><input name="HasSampleDownload" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="HasSampleDownload" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlSampleDownloadFile">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SampleDownloadId" title="">Sample download file</label><div class="ico-help" title="The sample download file."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-5">
                            


<script type="text/javascript">
    $(document).ready(function () {
        $('#cbUseDownloadURL1752867667').click(toggleDownloadRecordType1752867667);

        $('#saveDownloadUrl1752867667').click(function () {
            var downloadUrl = $("#downloadurl1752867667").val();
            $('#saveDownloadUrl1752867667').attr('disabled', true);
            $.ajax({
                cache: false,
                type: "POST",
                url: "/Admin/Download/SaveDownloadUrl",
                data: { "downloadUrl": downloadUrl },
                success: function (data) {
                    $('#pnlDownloadURLResult1752867667').fadeIn("slow").delay(1000).fadeOut("slow");
                    $("#download1752867667value input").val(data.downloadId);
                    $('#saveDownloadUrl1752867667').attr('disabled', false);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert('Failed to save download object.');
                    $('#saveDownloadUrl1752867667').attr('disabled', false);
                }
            });
        });

        toggleDownloadRecordType1752867667();
    });

    function toggleDownloadRecordType1752867667() {
        if ($('#cbUseDownloadURL1752867667').is(':checked')) {
            $('#pnlDownloadURL1752867667').show();
            $('#pnlDownloadFile1752867667').hide();
        } else {
            $('#pnlDownloadURL1752867667').hide();
            $('#pnlDownloadFile1752867667').show();
        }
    }

</script>

<div id="download1752867667value">
    <input data-val="true" data-val-number="The field Sample download file must be a number." data-val-required="&#39;Sample Download Id&#39; must not be empty." id="SampleDownloadId" name="SampleDownloadId" type="hidden" value="0" />
</div>

<div class="panel panel-default">
    <div class="panel-body">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="label-wrapper">
                        <label class="control-label">
                            Use download URL
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <input type="checkbox" name="cbUseDownloadURL1752867667" id="cbUseDownloadURL1752867667"
                            />
                </div>
            </div>
        <div id="pnlDownloadURL1752867667">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="label-wrapper">
                        <label class="control-label">
                            Download URL
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="downloadurl1752867667" id="downloadurl1752867667"
                            />
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-6">
                    <button type="button" id="saveDownloadUrl1752867667" class="btn btn-primary">Save download</button>
                    <div id="pnlDownloadURLResult1752867667" style="display: none;">Download object is saved</div>
                </div>
            </div>
        </div>
        <div class="form-group" id="pnlDownloadFile1752867667">
            <div class="col-xs-6">
                <div class="label-wrapper">
                    <label class="control-label">
                        Upload file
                    </label>
                </div>
            </div>
            <div class="col-xs-6">
                
                <div id="download1752867667">
                    <noscript>
                        <p>
                            Please enable JavaScript to use file uploader.
                        </p>
                        <!-- or put a simple form for upload here -->
                    </noscript>
                </div>
                
                <script type="text/template" id="download1752867667-qq-template">
                    <div class="qq-uploader-selector qq-uploader">
                        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                            <span>Drop files here to upload</span>
                        </div>
                        <div class="qq-upload-button-selector qq-upload-button">
                            <div>Upload a file</div>
                        </div>
                        <span class="qq-drop-processing-selector qq-drop-processing">
                            <span>Processing dropped files...</span>
                            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
                        </span>
                        <ul class="qq-upload-list-selector qq-upload-list">
                            <li>
                                <div class="qq-progress-bar-container-selector">
                                    <div class="qq-progress-bar-selector qq-progress-bar"></div>
                                </div>
                                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                                <span class="qq-edit-filename-icon-selector qq-edit-filename-icon"></span>
                                <span class="qq-upload-file-selector qq-upload-file"></span>
                                <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                                <span class="qq-upload-size-selector qq-upload-size"></span>
                                <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Cancel</a>
                                <a class="qq-upload-retry-selector qq-upload-retry" href="#">Retry</a>
                                <a class="qq-upload-delete-selector qq-upload-delete" href="#">Delete</a>
                                <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
                            </li>
                        </ul>
                    </div>
                </script>

                <script type="text/javascript">

                    $(document).ready(function () {
                        $("#download1752867667").fineUploader({
                            request: {
                                endpoint: '/Admin/Download/AsyncUpload'
                            },
                            template: "download1752867667-qq-template",
                            multiple: false
                        }).on("complete", function (event, id, name, responseJSON, xhr) {
                            $("#download1752867667downloadurl").html("<a href='" + responseJSON.downloadUrl + "'>Download uploaded file</a>");
                            $("#download1752867667value input").val(responseJSON.downloadId);
                            $("#download1752867667remove").show();
                        });


                        $("#download1752867667remove").click(function (e) {
                            $("#download1752867667downloadurl").html("");
                            $("#download1752867667value input").val(0);
                            $(this).hide();
                        });
                    });

                </script>

                <div id="download1752867667downloadurl">
                </div>
                <div>
                        <span id="download1752867667remove" class="btn btn-default" style="display:none;">Remove download</span>
                </div>
            </div>
        </div>
    </div>
</div>



                            <span class="field-validation-valid" data-valmsg-for="SampleDownloadId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default advanced-setting" id="group-recurring">
                <div class="panel-heading">
                    Recurring product
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="IsRecurring" title="">Recurring product</label><div class="ico-help" title="Check if it is a recurring product. For any product, you can define a recurring cycle to enable the system to automatically create orders that repeat when a customer purchases such products."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Recurring&#39; must not be empty." id="IsRecurring" name="IsRecurring" type="checkbox" value="true" /><input name="IsRecurring" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsRecurring" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlCycleLength">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="RecurringCycleLength" title="">Cycle length</label><div class="ico-help" title="Specify the cycle length. It is a time period recurring order can be repeated."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Cycle length must be a number." data-val-required="&#39;Recurring Cycle Length&#39; must not be empty." id="RecurringCycleLength" name="RecurringCycleLength" type="text" value="100" />
<script>
    $(document).ready(function() {
        $("#RecurringCycleLength").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="RecurringCycleLength" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlCyclePeriod">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="RecurringCyclePeriodId" title="">Cycle period</label><div class="ico-help" title="Specify the cycle period. It defines units time period can be measured in."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Cycle period must be a number." data-val-required="&#39;Recurring Cycle Period Id&#39; must not be empty." id="RecurringCyclePeriodId" name="RecurringCyclePeriodId"><option selected="selected" value="0">Days</option>
<option value="10">Weeks</option>
<option value="20">Months</option>
<option value="30">Years</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="RecurringCyclePeriodId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlTotalCycles">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="RecurringTotalCycles" title="">Total cycles</label><div class="ico-help" title="Total cycles are number of times customer will receive the recurring product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Total cycles must be a number." data-val-required="&#39;Recurring Total Cycles&#39; must not be empty." id="RecurringTotalCycles" name="RecurringTotalCycles" type="text" value="10" />
<script>
    $(document).ready(function() {
        $("#RecurringTotalCycles").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="RecurringTotalCycles" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default advanced-setting" id="group-rental">
                <div class="panel-heading">
                    Rental
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="IsRental" title="">Is rental</label><div class="ico-help" title="Check if this is a rental product (price is set for some period). Please note that inventory management is not fully supported for rental products yet. It&#39;s recommended to set &#39;Manage inventory method&#39; to &#39;Don&#39;t track inventory&#39; now."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Rental&#39; must not be empty." id="IsRental" name="IsRental" type="checkbox" value="true" /><input name="IsRental" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsRental" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlRentalPriceLength">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="RentalPriceLength" title="">Rental period length</label><div class="ico-help" title="Specify period length for rental product. Price is specified for this period."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Rental period length must be a number." data-val-required="&#39;Rental Price Length&#39; must not be empty." id="RentalPriceLength" name="RentalPriceLength" type="text" value="1" />
<script>
    $(document).ready(function() {
        $("#RentalPriceLength").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="RentalPriceLength" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlRentalPricePeriod">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="RentalPricePeriodId" title="">Rental period</label><div class="ico-help" title="Specify period for rental product. Price is specified for this period."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Rental period must be a number." data-val-required="&#39;Rental Price Period Id&#39; must not be empty." id="RentalPricePeriodId" name="RentalPricePeriodId"><option selected="selected" value="0">Days</option>
<option value="10">Weeks</option>
<option value="20">Months</option>
<option value="30">Years</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="RentalPricePeriodId" data-valmsg-replace="true"></span>
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
                            <input data-val="true" data-val-number="The field Price must be a number." data-val-required="&#39;Price&#39; must not be empty." id="Price" name="Price" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#Price").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="OldPrice" title="">Old price</label><div class="ico-help" title="The old price of the product. If you set an old price, this will display alongside the current price on the product page to show the difference in price."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Old price must be a number." data-val-required="&#39;Old Price&#39; must not be empty." id="OldPrice" name="OldPrice" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#OldPrice").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="OldPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="ProductCost" title="">Product cost</label><div class="ico-help" title="Product cost is a prime product cost. This field is only for internal use, not visible for customers."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Product cost must be a number." data-val-required="&#39;Product Cost&#39; must not be empty." id="ProductCost" name="ProductCost" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#ProductCost").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="ProductCost" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SpecialPrice" title="">Special price</label><div class="ico-help" title="Set a special price of the product. The new price will be valid between the start and end dates."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Special price must be a number." id="SpecialPrice" name="SpecialPrice" type="text" value="" />
<script>
    $(document).ready(function() {
        $("#SpecialPrice").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="SpecialPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SpecialPriceStartDateTimeUtc" title="">Special price start date</label><div class="ico-help" title="The start date of the special price in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="SpecialPriceStartDateTimeUtc" name="SpecialPriceStartDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#SpecialPriceStartDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="SpecialPriceStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SpecialPriceEndDateTimeUtc" title="">Special price end date</label><div class="ico-help" title="The end date of the special price in Coordinated Universal Time (UTC)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="SpecialPriceEndDateTimeUtc" name="SpecialPriceEndDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#SpecialPriceEndDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="SpecialPriceEndDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DisableBuyButton" title="">Disable buy button</label><div class="ico-help" title="Check to disable the buy button for this product. This may be necessary for products that are &#39;available upon request&#39;."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Disable Buy Button&#39; must not be empty." id="DisableBuyButton" name="DisableBuyButton" type="checkbox" value="true" /><input name="DisableBuyButton" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="DisableBuyButton" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="DisableWishlistButton" title="">Disable wishlist button</label><div class="ico-help" title="Check to disable the wishlist button for this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Disable Wishlist Button&#39; must not be empty." id="DisableWishlistButton" name="DisableWishlistButton" type="checkbox" value="true" /><input name="DisableWishlistButton" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="DisableWishlistButton" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="AvailableForPreOrder" title="">Available for pre-order</label><div class="ico-help" title="Check if this item is available for Pre-Order. It also displays &quot;Pre-order&quot; button instead of &quot;Add to cart&quot;."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Available For Pre Order&#39; must not be empty." id="AvailableForPreOrder" name="AvailableForPreOrder" type="checkbox" value="true" /><input name="AvailableForPreOrder" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="AvailableForPreOrder" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlPreOrderAvailabilityStartDateTimeUtc">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="PreOrderAvailabilityStartDateTimeUtc" title="">Pre-order availability start date</label><div class="ico-help" title="The availability start date of the product configured for pre-order in Coordinated Universal Time (UTC). &#39;Pre-order&#39; button will automatically be changed to &#39;Add to cart&#39; at this moment."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            
<input id="PreOrderAvailabilityStartDateTimeUtc" name="PreOrderAvailabilityStartDateTimeUtc" />
<script>
    $(document).ready(function () {
        $("#PreOrderAvailabilityStartDateTimeUtc").kendoDateTimePicker();
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="PreOrderAvailabilityStartDateTimeUtc" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="CallForPrice" title="">Call for price</label><div class="ico-help" title="Check to show &quot;Call for Pricing&quot; or &quot;Call for quote&quot; instead of price."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Call For Price&#39; must not be empty." id="CallForPrice" name="CallForPrice" type="checkbox" value="true" /><input name="CallForPrice" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="CallForPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="CustomerEntersPrice" title="">Customer enters price</label><div class="ico-help" title="An option indicating whether customer should enter price."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Customer Enters Price&#39; must not be empty." id="CustomerEntersPrice" name="CustomerEntersPrice" type="checkbox" value="true" /><input name="CustomerEntersPrice" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="CustomerEntersPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMinimumCustomerEnteredPrice">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MinimumCustomerEnteredPrice" title="">Minimum amount</label><div class="ico-help" title="Enter a minimum amount."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Minimum amount must be a number." data-val-required="&#39;Minimum Customer Entered Price&#39; must not be empty." id="MinimumCustomerEnteredPrice" name="MinimumCustomerEnteredPrice" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#MinimumCustomerEnteredPrice").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="MinimumCustomerEnteredPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMaximumCustomerEnteredPrice">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="MaximumCustomerEnteredPrice" title="">Maximum amount</label><div class="ico-help" title="Enter a maximum amount."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Maximum amount must be a number." data-val-required="&#39;Maximum Customer Entered Price&#39; must not be empty." id="MaximumCustomerEnteredPrice" name="MaximumCustomerEnteredPrice" type="text" value="1000" />
<script>
    $(document).ready(function() {
        $("#MaximumCustomerEnteredPrice").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="MaximumCustomerEnteredPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="BasepriceEnabled" title="">PAngV (base price) enabled</label><div class="ico-help" title="Check to display baseprice of a product. This is required according to the German law (PAngV). If you sell 500ml of beer for 1,50 euro, then you have to display baseprice: 3.00 euro per 1L."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Baseprice Enabled&#39; must not be empty." id="BasepriceEnabled" name="BasepriceEnabled" type="checkbox" value="true" /><input name="BasepriceEnabled" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="BasepriceEnabled" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlBasepriceAmount">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="BasepriceAmount" title="">Amount in product</label><div class="ico-help" title="Enter an amount in product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Amount in product must be a number." data-val-required="&#39;Baseprice Amount&#39; must not be empty." id="BasepriceAmount" name="BasepriceAmount" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#BasepriceAmount").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>

                            <span class="field-validation-valid" data-valmsg-for="BasepriceAmount" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlBasepriceUnit">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="BasepriceUnitId" title="">Unit of product</label><div class="ico-help" title="Enter a unit of product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Unit of product must be a number." data-val-required="&#39;Baseprice Unit Id&#39; must not be empty." id="BasepriceUnitId" name="BasepriceUnitId"><option value="1">ounce(s)</option>
<option value="2">lb(s)</option>
<option value="3">kg(s)</option>
<option value="4">gram(s)</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="BasepriceUnitId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlBasepriceBaseAmount">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="BasepriceBaseAmount" title="">Reference amount</label><div class="ico-help" title="Enter a reference amount."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input data-val="true" data-val-number="The field Reference amount must be a number." data-val-required="&#39;Baseprice Base Amount&#39; must not be empty." id="BasepriceBaseAmount" name="BasepriceBaseAmount" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#BasepriceBaseAmount").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>

                            <span class="field-validation-valid" data-valmsg-for="BasepriceBaseAmount" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlBasepriceBaseUnit">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="BasepriceBaseUnitId" title="">Reference unit</label><div class="ico-help" title="Enter a reference unit."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Reference unit must be a number." data-val-required="&#39;Baseprice Base Unit Id&#39; must not be empty." id="BasepriceBaseUnitId" name="BasepriceBaseUnitId"><option value="1">ounce(s)</option>
<option value="2">lb(s)</option>
<option value="3">kg(s)</option>
<option value="4">gram(s)</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="BasepriceBaseUnitId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="SelectedDiscountIds" title="">Discounts</label><div class="ico-help" title="Select discounts to apply to this product. You can manage discounts by selecting Discounts from the Promotions menu."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select id="SelectedDiscountIds" multiple="multiple" name="SelectedDiscountIds"><option value="1">Sample discount with coupon code</option>
</select>
<script>
    $(document).ready(function() {
        $("#SelectedDiscountIds").kendoMultiSelect({
            select: function (e) {
                var current = this.value();

                if (this.dataSource.view()[e.item.index()].value === "0") {
                    this.value("");
                }
                else if (current.indexOf("0") !== -1) {
                    current = $.grep(current, function (value) {
                        return value !== "0";
                    });

                    this.value(current);
                }
            },
            change: function (e) {
                if (this.value().length === 0)
                    this.value(["0"]);
            }
        }).data("kendoMultiSelect");
    });
</script>
                            <script>
                                $(document).ready(function() {
                                    var discountsIdsInput = $('#SelectedDiscountIds').data("kendoMultiSelect");
                                    discountsIdsInput.setOptions({
                                        autoClose: false
                                    });

                                });
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="IsTaxExempt" title="">Tax exempt</label><div class="ico-help" title="Determines whether this product is tax exempt (tax will not be applied to this product at checkout)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Tax Exempt&#39; must not be empty." id="IsTaxExempt" name="IsTaxExempt" type="checkbox" value="true" /><input name="IsTaxExempt" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsTaxExempt" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlTaxCategory">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="TaxCategoryId" title="">Tax category</label><div class="ico-help" title="The tax classification for the product. You can manage tax categories by selecting Configuration > Tax > Tax Categories."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" data-val="true" data-val-number="The field Tax category must be a number." data-val-required="&#39;Tax Category Id&#39; must not be empty." id="TaxCategoryId" name="TaxCategoryId"><option selected="selected" value="0">---</option>
<option value="1">Books</option>
<option value="2">Electronics &amp; Software</option>
<option value="3">Downloadable Products</option>
<option value="4">Jewelry</option>
<option value="5">Apparel</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="TaxCategoryId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlIsTelecommunicationsOrBroadcastingOrElectronicServices">
                        <div class="col-md-3">
                            <div class="label-wrapper"><label class="control-label" for="IsTelecommunicationsOrBroadcastingOrElectronicServices" title="">Telecommunications, broadcasting and electronic services</label><div class="ico-help" title="Check if it&#39;s telecommunications, broadcasting and electronic services. It&#39;s used for tax calculation in Europe Union."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-9">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Telecommunications Or Broadcasting Or Electronic Services&#39; must not be empty." id="IsTelecommunicationsOrBroadcastingOrElectronicServices" name="IsTelecommunicationsOrBroadcastingOrElectronicServices" type="checkbox" value="true" /><input name="IsTelecommunicationsOrBroadcastingOrElectronicServices" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsTelecommunicationsOrBroadcastingOrElectronicServices" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default advanced-setting" id="tier-prices">
                <div class="panel-heading">
                    Tier prices
                </div>
                <div class="panel-body">
                    <p>
                        Tier pricing is a promotional tool that allows a store owner to price items differently for higher quantities.
                    </p>
You need to save the product before you can add tier prices for this product page.                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="panel-group">


            <div class="panel panel-default margin-bottom" id="group-associated-products">
                <div class="panel-heading">
                    Associated products (variants)
                </div>
                    <div class="panel-body">
                        You need to save the product before you can add associated products for this product page.
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
                            <select class="form-control" data-val="true" data-val-number="The field Inventory method must be a number." data-val-required="&#39;Manage Inventory Method Id&#39; must not be empty." id="ManageInventoryMethodId" name="ManageInventoryMethodId"><option selected="selected" value="0">Don&#39;t track inventory</option>
<option value="1">Track inventory</option>
<option value="2">Track inventory by product attributes</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="ManageInventoryMethodId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlStockQuantity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="StockQuantity" title="">Stock quantity</label><div class="ico-help" title="The current stock quantity of this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Stock quantity must be a number." data-val-required="&#39;Stock Quantity&#39; must not be empty." id="StockQuantity" name="StockQuantity" type="text" value="10000" />
<script>
    $(document).ready(function() {
        $("#StockQuantity").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <input data-val="true" data-val-number="The field LastStockQuantity must be a number." data-val-required="&#39;Last Stock Quantity&#39; must not be empty." id="LastStockQuantity" name="LastStockQuantity" type="hidden" value="0" />
                            <span class="field-validation-valid" data-valmsg-for="StockQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlWarehouse">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="WarehouseId" title="">Warehouse</label><div class="ico-help" title="Choose the warehouse which will be used when calculating shipping rates. You can manage warehouses by selecting  Configuration > Shipping > Warehouses."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val="true" data-val-number="The field Warehouse must be a number." data-val-required="&#39;Warehouse Id&#39; must not be empty." id="WarehouseId" name="WarehouseId"><option selected="selected" value="0">None</option>
<option value="1">Warehouse 1 (New York)</option>
<option value="2">Warehouse 2 (Los Angeles)</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="WarehouseId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlUseMultipleWarehouses">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="UseMultipleWarehouses" title="">Multiple warehouses</label><div class="ico-help" title="Check if you want to support shipping and inventory management from multiple warehouses."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Use Multiple Warehouses&#39; must not be empty." id="UseMultipleWarehouses" name="UseMultipleWarehouses" type="checkbox" value="true" /><input name="UseMultipleWarehouses" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="UseMultipleWarehouses" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMultipleWarehouses">
                        <div class="col-md-12" style="overflow-x: auto;">
                                <table class="table table-hover table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                                Warehouse
                                            </th>
                                            <th>
                                                Use
                                            </th>
                                            <th>
                                                Stock qty
                                            </th>
                                            <th>
                                                Reserved qty
                                            </th>
                                            <th>
                                                Planned qty
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td style="width: 36%;">
                                                    <div style="padding-left: 10px; padding-right: 10px;">
                                                        Warehouse 1 (New York)
                                                    </div>
                                                </td>
                                                <td style="width: 10%;">
                                                    <input type="checkbox" id="warehouse_used_1" name="warehouse_used_1" value="1" />
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $("#warehouse_used_1").change(toggleWarehouseUsed_1);
                                                            toggleWarehouseUsed_1();
                                                        });

                                                        function toggleWarehouseUsed_1() {
                                                            if ($('#warehouse_used_1').is(':checked')) {
                                                                $('#warehouse_qty_1').prop('disabled', false);
                                                                $('#warehouse_reserved_1').prop('disabled', false);
                                                            } else {
                                                                $('#warehouse_qty_1').prop('disabled', true);
                                                                $('#warehouse_reserved_1').prop('disabled', true);
                                                            }
                                                        }
                                                    </script>
                                                <td style="width: 18%;">
                                                    <input id="warehouse_qty_1" name="warehouse_qty_1" type="text" value="0" class="form-control" />
                                                </td>
                                                <td style="width: 18%;">
                                                    <input id="warehouse_reserved_1" name="warehouse_reserved_1" type="text" value="0" class="form-control" />
                                                </td>
                                                <td style="width: 18%;">
                                                    0
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 36%;">
                                                    <div style="padding-left: 10px; padding-right: 10px;">
                                                        Warehouse 2 (Los Angeles)
                                                    </div>
                                                </td>
                                                <td style="width: 10%;">
                                                    <input type="checkbox" id="warehouse_used_2" name="warehouse_used_2" value="2" />
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $("#warehouse_used_2").change(toggleWarehouseUsed_2);
                                                            toggleWarehouseUsed_2();
                                                        });

                                                        function toggleWarehouseUsed_2() {
                                                            if ($('#warehouse_used_2').is(':checked')) {
                                                                $('#warehouse_qty_2').prop('disabled', false);
                                                                $('#warehouse_reserved_2').prop('disabled', false);
                                                            } else {
                                                                $('#warehouse_qty_2').prop('disabled', true);
                                                                $('#warehouse_reserved_2').prop('disabled', true);
                                                            }
                                                        }
                                                    </script>
                                                <td style="width: 18%;">
                                                    <input id="warehouse_qty_2" name="warehouse_qty_2" type="text" value="0" class="form-control" />
                                                </td>
                                                <td style="width: 18%;">
                                                    <input id="warehouse_reserved_2" name="warehouse_reserved_2" type="text" value="0" class="form-control" />
                                                </td>
                                                <td style="width: 18%;">
                                                    0
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                                <p>
                                    <em>"Stock quantity" is total quantity. It's reduced from when a shipment is shipped.</em>
                                </p>
                                <p>
                                    <em>"Reserved qty" is product quantity that is ordered but not shipped yet.</em>
                                </p>
                                <p>
                                    <em>"Planned qty" is product quantity that is ordered and already added to a shipment but not shipped yet.</em>
                                </p>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDisplayStockAvailability">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="DisplayStockAvailability" title="">Display availability</label><div class="ico-help" title="Check to display stock availability. When enabled, customers will see stock availability."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Display Stock Availability&#39; must not be empty." id="DisplayStockAvailability" name="DisplayStockAvailability" type="checkbox" value="true" /><input name="DisplayStockAvailability" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="DisplayStockAvailability" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDisplayStockQuantity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="DisplayStockQuantity" title="">Display stock quantity</label><div class="ico-help" title="Check to display stock quantity. When enabled, customers will see stock quantity."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Display Stock Quantity&#39; must not be empty." id="DisplayStockQuantity" name="DisplayStockQuantity" type="checkbox" value="true" /><input name="DisplayStockQuantity" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="DisplayStockQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlMinStockQuantity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="MinStockQuantity" title="">Minimum stock qty</label><div class="ico-help" title="If you have enabled &#39;Manage Stock&#39; you can perform a number of different actions when the current stock quantity falls below (reaches) your minimum stock quantity."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Minimum stock qty must be a number." data-val-required="&#39;Min Stock Quantity&#39; must not be empty." id="MinStockQuantity" name="MinStockQuantity" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#MinStockQuantity").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="MinStockQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlLowStockActivity">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="LowStockActivityId" title="">Low stock activity</label><div class="ico-help" title="Action to be taken when your current stock quantity falls below (reaches) the &#39;Minimum stock quantity&#39;."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val="true" data-val-number="The field Low stock activity must be a number." data-val-required="&#39;Low Stock Activity Id&#39; must not be empty." id="LowStockActivityId" name="LowStockActivityId"><option selected="selected" value="0">Nothing</option>
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
                            <input data-val="true" data-val-number="The field Notify for qty below must be a number." data-val-required="&#39;Notify Admin For Quantity Below&#39; must not be empty." id="NotifyAdminForQuantityBelow" name="NotifyAdminForQuantityBelow" type="text" value="1" />
<script>
    $(document).ready(function() {
        $("#NotifyAdminForQuantityBelow").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="NotifyAdminForQuantityBelow" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlBackorders">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="BackorderModeId" title="">Backorders</label><div class="ico-help" title="Select backorder mode."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val="true" data-val-number="The field Backorders must be a number." data-val-required="&#39;Backorder Mode Id&#39; must not be empty." id="BackorderModeId" name="BackorderModeId"><option selected="selected" value="0">No backorders</option>
<option value="1">Allow qty below 0</option>
<option value="2">Allow qty below 0 and notify customer</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="BackorderModeId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlAllowBackInStockSubscriptions">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AllowBackInStockSubscriptions" title="">Allow back in stock subscriptions</label><div class="ico-help" title="Allow customers to subscribe to a notification list for a product that has gone out of stock."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Allow Back In Stock Subscriptions&#39; must not be empty." id="AllowBackInStockSubscriptions" name="AllowBackInStockSubscriptions" type="checkbox" value="true" /><input name="AllowBackInStockSubscriptions" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="AllowBackInStockSubscriptions" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="OrderMinimumQuantity" title="">Minimum cart qty</label><div class="ico-help" title="Set the minimum quantity allowed in a customer&#39;s shopping cart e.g. set to 3 to only allow customers to purchase 3 or more of this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Minimum cart qty must be a number." data-val-required="&#39;Order Minimum Quantity&#39; must not be empty." id="OrderMinimumQuantity" name="OrderMinimumQuantity" type="text" value="1" />
<script>
    $(document).ready(function() {
        $("#OrderMinimumQuantity").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="OrderMinimumQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="OrderMaximumQuantity" title="">Maximum cart qty</label><div class="ico-help" title="Set the maximum quantity allowed in a customer&#39;s shopping cart e.g. set to 5 to only allow customers to purchase 5 of this product."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Maximum cart qty must be a number." data-val-required="&#39;Order Maximum Quantity&#39; must not be empty." id="OrderMaximumQuantity" name="OrderMaximumQuantity" type="text" value="10000" />
<script>
    $(document).ready(function() {
        $("#OrderMaximumQuantity").kendoNumericTextBox({
            format: "#",
            decimals: 0
        });
    });
</script>
                            <span class="field-validation-valid" data-valmsg-for="OrderMaximumQuantity" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AllowedQuantities" title="">Allowed quantities</label><div class="ico-help" title="Enter a comma separated list of quantities you want this product to be restricted to. Instead of a quantity textbox that allows them to enter any quantity, they will receive a dropdown list of the values you enter here."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Allowed Quantities&#39; must be between 0 and 1000 characters." data-val-length-max="1000" id="AllowedQuantities" name="AllowedQuantities" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="AllowedQuantities" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlAllowAddingOnlyExistingAttributeCombinations">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AllowAddingOnlyExistingAttributeCombinations" title="">Allow only existing attribute combinations</label><div class="ico-help" title="Check to allow adding to the cart/wishlist only attribute combinations that exist and have stock greater than zero. In this case you have to create all existing product attribute combinations that you have in stock."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Allow Adding Only Existing Attribute Combinations&#39; must not be empty." id="AllowAddingOnlyExistingAttributeCombinations" name="AllowAddingOnlyExistingAttributeCombinations" type="checkbox" value="true" /><input name="AllowAddingOnlyExistingAttributeCombinations" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="AllowAddingOnlyExistingAttributeCombinations" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="NotReturnable" title="">Not returnable</label><div class="ico-help" title="Check if this product is not returnable. In this case a customer won&#39;t be allowed to submit return request."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Not Returnable&#39; must not be empty." id="NotReturnable" name="NotReturnable" type="checkbox" value="true" /><input name="NotReturnable" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="NotReturnable" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" id="group-shipping">
                <div class="panel-heading">
                    Shipping
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="IsShipEnabled" title="">Shipping enabled</label><div class="ico-help" title="Check if the product can be shipped. You can manage shipping settings by selecting Configuration > Shipping."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input checked="checked" class="check-box" data-val="true" data-val-required="&#39;Is Ship Enabled&#39; must not be empty." id="IsShipEnabled" name="IsShipEnabled" type="checkbox" value="true" /><input name="IsShipEnabled" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsShipEnabled" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlWeight">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Weight" title="">Weight</label><div class="ico-help" title="The product weight."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Weight must be a number." data-val-required="&#39;Weight&#39; must not be empty." id="Weight" name="Weight" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#Weight").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [lb(s)]
                            <span class="field-validation-valid" data-valmsg-for="Weight" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlLength">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Length" title="">Length</label><div class="ico-help" title="The product length."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Length must be a number." data-val-required="&#39;Length&#39; must not be empty." id="Length" name="Length" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#Length").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [inch(es)]
                            <span class="field-validation-valid" data-valmsg-for="Length" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlWidth">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Width" title="">Width</label><div class="ico-help" title="The product width."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Width must be a number." data-val-required="&#39;Width&#39; must not be empty." id="Width" name="Width" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#Width").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [inch(es)]
                            <span class="field-validation-valid" data-valmsg-for="Width" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group" id="pnlHeight">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="Height" title="">Height</label><div class="ico-help" title="The product height."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Height must be a number." data-val-required="&#39;Height&#39; must not be empty." id="Height" name="Height" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#Height").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [inch(es)]
                            <span class="field-validation-valid" data-valmsg-for="Height" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlFreeShipping">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="IsFreeShipping" title="">Free shipping</label><div class="ico-help" title="Check if this product comes with FREE shipping."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Is Free Shipping&#39; must not be empty." id="IsFreeShipping" name="IsFreeShipping" type="checkbox" value="true" /><input name="IsFreeShipping" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="IsFreeShipping" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlShipSeparately">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="ShipSeparately" title="">Ship separately</label><div class="ico-help" title="Check if the product should be shipped separately from other products (in single box). Notice that if the order includes several items of this product, all of them will be shipped separately."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Ship Separately&#39; must not be empty." id="ShipSeparately" name="ShipSeparately" type="checkbox" value="true" /><input name="ShipSeparately" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="ShipSeparately" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlAdditionalShippingCharge">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AdditionalShippingCharge" title="">Additional shipping charge</label><div class="ico-help" title="The additional shipping charge."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input data-val="true" data-val-number="The field Additional shipping charge must be a number." data-val-required="&#39;Additional Shipping Charge&#39; must not be empty." id="AdditionalShippingCharge" name="AdditionalShippingCharge" type="text" value="0" />
<script>
    $(document).ready(function() {
        $("#AdditionalShippingCharge").kendoNumericTextBox({
            format: "#.0000",
            decimals: 4 //always display 4 digits
        });
    });
</script>
 [USD]
                            <span class="field-validation-valid" data-valmsg-for="AdditionalShippingCharge" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" id="pnlDeliveryDate">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="DeliveryDateId" title="">Delivery date</label><div class="ico-help" title="Choose a delivery date which will be displayed in the public store. You can manage delivery dates by selecting Configuration > Shipping > Delivery dates."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val="true" data-val-number="The field Delivery date must be a number." data-val-required="&#39;Delivery Date Id&#39; must not be empty." id="DeliveryDateId" name="DeliveryDateId"><option selected="selected" value="0">None</option>
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
                            <select id="SelectedCategoryIds" multiple="multiple" name="SelectedCategoryIds"><option value="1">Computers</option>
<option value="2">Computers &gt;&gt; Desktops</option>
<option value="3">Computers &gt;&gt; Notebooks</option>
<option value="4">Computers &gt;&gt; Software</option>
<option value="5">Electronics</option>
<option value="6">Electronics &gt;&gt; Camera &amp; photo</option>
<option value="7">Electronics &gt;&gt; Cell phones</option>
<option value="8">Electronics &gt;&gt; Others</option>
<option value="9">Apparel</option>
<option value="10">Apparel &gt;&gt; Shoes</option>
<option value="11">Apparel &gt;&gt; Clothing</option>
<option value="12">Apparel &gt;&gt; Accessories</option>
<option value="13">Digital downloads</option>
<option value="14">Books</option>
<option value="15">Jewelry</option>
<option value="16">Gift Cards</option>
</select>
<script>
    $(document).ready(function() {
        $("#SelectedCategoryIds").kendoMultiSelect({
            select: function (e) {
                var current = this.value();

                if (this.dataSource.view()[e.item.index()].value === "0") {
                    this.value("");
                }
                else if (current.indexOf("0") !== -1) {
                    current = $.grep(current, function (value) {
                        return value !== "0";
                    });

                    this.value(current);
                }
            },
            change: function (e) {
                if (this.value().length === 0)
                    this.value(["0"]);
            }
        }).data("kendoMultiSelect");
    });
</script>
                            <script>
                                $(document).ready(function() {
                                    var categoryIdsInput = $('#SelectedCategoryIds').data("kendoMultiSelect");
                                    categoryIdsInput.setOptions({
                                        autoClose: false
                                    });

                                });
                            </script>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="SelectedManufacturerIds" title="">Manufacturers</label><div class="ico-help" title="Choose the manufacturer. You can manage manufacturers by selecting Catalog > Manufacturers."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select id="SelectedManufacturerIds" multiple="multiple" name="SelectedManufacturerIds"><option value="1">Apple</option>
<option value="2">HP</option>
<option value="3">Nike</option>
</select>
<script>
    $(document).ready(function() {
        $("#SelectedManufacturerIds").kendoMultiSelect({
            select: function (e) {
                var current = this.value();

                if (this.dataSource.view()[e.item.index()].value === "0") {
                    this.value("");
                }
                else if (current.indexOf("0") !== -1) {
                    current = $.grep(current, function (value) {
                        return value !== "0";
                    });

                    this.value(current);
                }
            },
            change: function (e) {
                if (this.value().length === 0)
                    this.value(["0"]);
            }
        }).data("kendoMultiSelect");
    });
</script>
                            <script>
                                $(document).ready(function() {
                                    var manufacturersIdsInput = $('#SelectedManufacturerIds').data("kendoMultiSelect");
                                    manufacturersIdsInput.setOptions({
                                        autoClose: false
                                    });

                                });
                            </script>
                        </div>
                    </div>
                    <div class="form-group advanced-setting">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="SelectedStoreIds" title="">Limited to stores</label><div class="ico-help" title="Option to limit this product to a certain store. If you have multiple stores, choose one or several from the list. If you don&#39;t use this option just leave this field empty. In order to use this functionality you have to disable the following setting: Configuration > Catalog settings > Ignore &quot;limit per store&quot; rules (sitewide)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select id="SelectedStoreIds" multiple="multiple" name="SelectedStoreIds"><option value="1">nopCommerce demo store</option>
<option value="2">Sample store 2</option>
</select>
<script>
    $(document).ready(function() {
        $("#SelectedStoreIds").kendoMultiSelect({
            select: function (e) {
                var current = this.value();

                if (this.dataSource.view()[e.item.index()].value === "0") {
                    this.value("");
                }
                else if (current.indexOf("0") !== -1) {
                    current = $.grep(current, function (value) {
                        return value !== "0";
                    });

                    this.value(current);
                }
            },
            change: function (e) {
                if (this.value().length === 0)
                    this.value(["0"]);
            }
        }).data("kendoMultiSelect");
    });
</script>
                            <script>
                                $(document).ready(function() {
                                    var storesIdsInput = $('#SelectedStoreIds').data("kendoMultiSelect");
                                    storesIdsInput.setOptions({
                                        autoClose: false
                                    });

                                });
                            </script>
                        </div>
                    </div>
                    <div class="form-group advanced-setting" >
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="VendorId" title="">Vendor</label><div class="ico-help" title="Choose the vendor. You can manage vendors by selecting Customers > Vendors."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" data-val="true" data-val-number="The field Vendor must be a number." data-val-required="&#39;Vendor Id&#39; must not be empty." id="VendorId" name="VendorId"><option selected="selected" value="0">No vendor</option>
<option value="1">Vendor 1</option>
<option value="2">Vendor 2</option>
</select>
                            <span class="field-validation-valid" data-valmsg-for="VendorId" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default advanced-setting">
                <div class="panel-heading">
                    Access control list
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="SelectedCustomerRoleIds" title="">Customer roles</label><div class="ico-help" title="Choose one or several customer roles i.e. administrators, vendors, guests, who will be able to see this product in catalog. If you don&#39;t need this option just leave this field empty. In order to use this functionality you have to disable the following setting: Configuration > Catalog settings > Ignore ACL rules (sitewide)."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <select id="SelectedCustomerRoleIds" multiple="multiple" name="SelectedCustomerRoleIds"><option value="1">Administrators</option>
<option value="2">Forum Moderators</option>
<option value="4">Guests</option>
<option value="3">Registered</option>
<option value="5">Vendors</option>
</select>
<script>
    $(document).ready(function() {
        $("#SelectedCustomerRoleIds").kendoMultiSelect({
            select: function (e) {
                var current = this.value();

                if (this.dataSource.view()[e.item.index()].value === "0") {
                    this.value("");
                }
                else if (current.indexOf("0") !== -1) {
                    current = $.grep(current, function (value) {
                        return value !== "0";
                    });

                    this.value(current);
                }
            },
            change: function (e) {
                if (this.value().length === 0)
                    this.value(["0"]);
            }
        }).data("kendoMultiSelect");
    });
</script>
                            <script>
                                $(document).ready(function() {
                                    var rolesIdsInput = $('#SelectedCustomerRoleIds').data("kendoMultiSelect");
                                    rolesIdsInput.setOptions({
                                        autoClose: false
                                    });

                                });
                            </script>
                        </div>
                    </div>
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
                            <input class="check-box" data-val="true" data-val-required="&#39;Require Other Products&#39; must not be empty." id="RequireOtherProducts" name="RequireOtherProducts" type="checkbox" value="true" /><input name="RequireOtherProducts" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="RequireOtherProducts" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div id="pnlRequiredProductIds">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="label-wrapper"><label class="control-label" for="RequiredProductIds" title="">Required product IDs</label><div class="ico-help" title="Specify comma separated list of required product IDs. NOTE: Ensure that there are no circular references (for example, A requires B, and B requires A)."><i class='fa fa-question-circle'></i></div></div>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Required Product Ids&#39; must be between 0 and 1000 characters." data-val-length-max="1000" id="RequiredProductIds" name="RequiredProductIds" type="text" value="" />
                                    <span class="input-group-btn">
                                        <input type="submit" id="btnRefreshRequiredProducts" style="display: none" />
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#btnRefreshRequiredProducts').click(function() {
                                                    //refresh product list
                                                    loadRequiredProductFriendlyNames();

                                                    //return false to don't reload a page
                                                    return false;
                                                });
                                            });
                                        </script>
                                        <button type="submit" id="btnAddNewRequiredProduct" onclick="javascript:OpenWindow('/Admin/Product/RequiredProductAddPopup?btnId=btnRefreshRequiredProducts&amp;productIdsInput=RequiredProductIds', 800, 850, true); return false;" class="btn btn-info">
                                            Add required product
                                        </button>
                                    </span>
                                </div>
                                <span class="field-validation-valid" data-valmsg-for="RequiredProductIds" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <span id="required-products-check-progress" style="display: none; float: right" class="please-wait">Wait...</span>
                            </div>
                            <div class="col-md-8">
                                <span id="required-product-names"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="pnlAutomaticallyAddRequiredProducts">
                        <div class="col-md-4">
                            <div class="label-wrapper"><label class="control-label" for="AutomaticallyAddRequiredProducts" title="">Automatically add these products to the cart</label><div class="ico-help" title="Check to automatically add these products to the cart."><i class='fa fa-question-circle'></i></div></div>
                        </div>
                        <div class="col-md-8">
                            <input class="check-box" data-val="true" data-val-required="&#39;Automatically Add Required Products&#39; must not be empty." id="AutomaticallyAddRequiredProducts" name="AutomaticallyAddRequiredProducts" type="checkbox" value="true" /><input name="AutomaticallyAddRequiredProducts" type="hidden" value="false" />
                            <span class="field-validation-valid" data-valmsg-for="AutomaticallyAddRequiredProducts" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default advanced-setting">
                <div class="panel-heading">
                    Related products
                </div>
                    <div class="panel-body">
                        You need to save the product before you can add related products for this product page.
                    </div>
            </div>
            <div class="panel panel-default advanced-setting">
                <div class="panel-heading">
                    Cross-sells
                </div>
                    <div class="panel-body">
                        You need to save the product before you can add cross-sell products for this product page.
                    </div>
            </div>
        </div>
    </div>
</div></div>
                <div class="tab-pane" id="tab-seo"><div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div>
                <div class="form-group">
                    <div class="col-md-3">
<div class="label-wrapper"><label class="control-label" for="MetaKeywords" title="">Meta keywords</label><div class="ico-help" title="Meta keywords to be added to product page header."><i class='fa fa-question-circle'></i></div></div>
                    </div>
                    <div class="col-md-9">
<input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Meta Keywords&#39; must be between 0 and 400 characters." data-val-length-max="400" id="MetaKeywords" name="MetaKeywords" type="text" value="" />
<span class="field-validation-valid" data-valmsg-for="MetaKeywords" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
<div class="label-wrapper"><label class="control-label" for="MetaDescription" title="">Meta description</label><div class="ico-help" title="Meta description to be added to product page header."><i class='fa fa-question-circle'></i></div></div>
                    </div>
                    <div class="col-md-9">
<textarea class="form-control" cols="20" id="MetaDescription" name="MetaDescription" rows="4">
</textarea>
<span class="field-validation-valid" data-valmsg-for="MetaDescription" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
<div class="label-wrapper"><label class="control-label" for="MetaTitle" title="">Meta title</label><div class="ico-help" title="Override the page title. The default is the name of the product."><i class='fa fa-question-circle'></i></div></div>
                    </div>
                    <div class="col-md-9">
<input class="form-control text-box single-line" data-val="true" data-val-length="&#39;Meta Title&#39; must be between 0 and 400 characters." data-val-length-max="400" id="MetaTitle" name="MetaTitle" type="text" value="" />
<span class="field-validation-valid" data-valmsg-for="MetaTitle" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
<div class="label-wrapper"><label class="control-label" for="SeName" title="">Search engine friendly page name</label><div class="ico-help" title="Set a search engine friendly page name e.g. &#39;the-best-product&#39; to make your page URL &#39;http://www.yourStore.com/the-best-product&#39;. Leave empty to generate it automatically based on the name of the product."><i class='fa fa-question-circle'></i></div></div>
                    </div>
                    <div class="col-md-9">
<input class="form-control text-box single-line" id="SeName" name="SeName" type="text" value="" />
<span class="field-validation-valid" data-valmsg-for="SeName" data-valmsg-replace="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                <div class="tab-pane" id="tab-pictures"><div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-body">
                You need to save the product before you can upload pictures for this product page.
            </div>
        </div>
</div>
</div>
                <div class="tab-pane" id="tab-specification-attributes"><div class="panel-group">
    <p>
        Specification attributes are product features i.e, screen size, number of USB-ports, visible on product details page. Specification attributes can be used for filtering products on the category details page.  Unlike product attributes, specification attributes are used for information purposes only.
    </p>
        <div class="panel panel-default">
            <div class="panel-body">
                You need to save the product before you can add product specification attributes for this product page.
            </div>
        </div>
</div>
</div>
                <div class="tab-pane" id="tab-product-attributes">
<div class="panel-group">
    <p>
        
      Product attributes are quantifiable or descriptive aspects of a product (such as, color). For example, if you were to create an attribute for color, with the values of blue, green, yellow, and so on, you may want to apply this attribute to shirts, which you sell in various colors (you can adjust a price or weight for any of existing attribute values).
      You can add attribute for your product using existing list of attributes, or if you need to create a new one go to Catalog > Attributes > Product attributes. Please notice that if you want to manage inventory by product attributes (e.g. 5 green shirts and 3 blue ones), then ensure that Inventory method is set to Track inventory by product attributes.
    
    </p>
        <div class="panel panel-default">
            <div class="panel-body">
                You need to save the product before you can add attributes for this page.
            </div>
        </div>
</div>


</div>
            </div>
        </div>
    </div>
</div>




<input type="hidden" id="selected-tab-name" name="selected-tab-name" value="">


</form>
                </div>
            </div>
            <div class="main-footer clearfix">
                    <div class="pull-left">
                        Powered by <a href="http://www.nopcommerce.com/?utm_source=admin-panel&utm_medium=footer&utm_campaign=admin-panel" target="_blank">nopCommerce</a>
                    </div>
                <div class="pull-right hidden-xs">
                    <b>nopCommerce version 3.80</b>
                </div>
                <div class="text-center">
                    Wednesday, October 26, 2016 1:49 PM
                </div>
            </div>
        </div>

        <script>
            var AdminLTEOptions = {
                boxWidgetOptions: {
                    boxWidgetIcons: {
                        collapse: 'fa-minus',
                        open: 'fa-plus'
                    }
                }
            };
        </script>

        
        

        <a id="backTop" class="btn btn-back-top bg-teal"></a>
        <script>
            $(document).ready(function () {
                $('#backTop').backTop();

                $('a.sidebar-toggle').on('click', function () {
                    var collapsed = $('body').hasClass('sidebar-collapse');
                    saveUserPreferences('/Admin/Preferences/SavePreference', 'HideSidebar', collapsed);
                });
            });
        </script>
@endsection
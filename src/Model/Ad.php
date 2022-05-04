<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields for an ad.
 */
class Ad extends AbstractModel
{
    /**
     * A unique eBay-assigned ID for the ad that is generated when the ad is created.
     *
     * @var string
     */
    public $adId = null;

    /**
     * The user-defined bid percentage (also known as the <i>ad rate</i>) sets level to
     * which eBay should raise the visibility of the associated listing across the eBay
     * buyer flows. The value is also used to calculate the Promoted Listings fee.</p>
     * <b>Minimum value:</b> 1.0 <br><b>Maximum value:</b> 100.0.
     *
     * @var string
     */
    public $bidPercentage = null;

    /**
     * An ID that identifies an a single-item listing or multiple-variation listing
     * that is managed with the <a href="/api-docs/sell/inventory/resources/methods"
     * title="Inventory API Reference">Inventory API</a>. <p>The <i>inventory reference
     * ID</i> is a seller-defined value that can be either an <b>SKU</b> for a
     * single-item listing or an <b>inventoryItemGroupKey</b> for a multiple-value
     * listing.</p>  <p>An <i>inventoryItemGroupKey</i> is a value that the seller
     * defines to indicate a listing that's the parent of a inventory item group (a
     * multiple-variation listing, such as a listing for shirt that's available in
     * multiple sizes and colors).</p>  <p>You must always specify both an
     * <b>inventoryRreferenceId</b> and an <b>inventoryReferenceType</b> to indicate an
     * item that's managed with the Inventory API.</p>.
     *
     * @var string
     */
    public $inventoryReferenceId = null;

    /**
     * Indicates the type of item the <b>inventoryReferenceId</b> references. The item
     * can be either an <code>INVENTORY_ITEM</code> or
     * <code>INVENTORY_ITEM_GROUP</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;

    /**
     * A unique eBay-assigned ID that is generated when a listing is created via the <a
     * href="/Devzone/XML/docs/Reference/eBay/index.html" title="Trading API
     * Reference">Trading API</a>.
     *
     * @var string
     */
    public $listingId = null;
}

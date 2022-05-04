<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields needed to create ads by inventory reference ID
 * request.
 */
class CreateAdsByInventoryReferenceRequest extends AbstractModel
{
    /**
     * The user-defined bid percentage (also known as the <i>ad rate</i>) sets the
     * level that eBay increases the visibility of a listing across the eBay buyer
     * flows. The higher the <b>bidPercentage</b> value, the more eBay promotes the
     * listing.  <br><br>The value specified here is also used to calculate the
     * <i>Promoted Listings fee</i>. This percentage value is multiplied by the final
     * sales price to determine the fee. <br><br>The Promoted Listings fee is
     * determined at the time the transaction completes and the seller is assessed the
     * fee only when an item sells through a Promoted Listings ad campaign.
     * <br><br><b>bidPercentage</b> is a single precision value that is guided by the
     * following rules: <ul><li>These values are
     * <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>1</code>,
     * &nbsp;&nbsp;&nbsp;<code>1.0</code>, &nbsp;&nbsp;&nbsp;<code>4.1</code>,<br />
     * &nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>
     *  <li>These values are <b>not valid</b>:<br />
     * &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>,
     * &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so
     * on.</li></ul>  <p>If a bid percentage is not provided for an ad, eBay uses the
     * default bid percentage of the associated campaign.</p><b>Minimum value:</b> 1.0
     * <br><b>Maximum value:</b> 100.0.
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
     * <code>INVENTORY_ITEM_GROUP</code>. <p>You must always pair an
     * <b>inventoryReferenceId</b> with and <b>inventoryReferenceType</b>.</p> For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;
}

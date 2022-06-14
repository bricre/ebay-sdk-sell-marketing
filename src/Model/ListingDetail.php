<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields that describe a listing that is in a promotion.
 */
class ListingDetail extends AbstractModel
{
    /**
     * The container that returns the current price of the listing.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $currentPrice = null;

    /**
     * If set to <code>true</code>, the seller pays for the shipping (or that the item
     * is marked for local pickup only) In this case, the listing does not have an
     * associated shipping cost for the first listed domestic-shipping option (even if
     * the first domestic-shipping option specifies a flat-rate or calculated shipping
     * option). If <code>false</code>, the buyer is required to pay for a flat-rate or
     * calculated cost shipping service.
     *
     * @var bool
     */
    public $freeShipping = null;

    /**
     * The seller's inventory reference ID for a listing. Also known as the "SKU" or
     * "custom label," an inventory reference ID is either the ID of the listing or, if
     * the listing has variations (such as a shirt that's available in multiple sizes
     * and colors), the ID of the parent listing.
     *
     * @var string
     */
    public $inventoryReferenceId = null;

    /**
     * Indicates the type of the <b>inventoryReferenceId</b>, which can be either an
     * individual item or a multi-SKU item (<code>INVENTORY_ITEM</code> and
     * <code>INVENTORY_ITEM_GROUP</code>, respectively).  <br><br><b>Note:</b> This
     * value is not currently returned in the response.
     *
     * @var string
     */
    public $inventoryReferenceType = null;

    /**
     * The ID of the category that listing belongs to. The ID is a numeric and unique
     * identifier for the category that is assigned by eBay.
     *
     * @var string
     */
    public $listingCategoryId = null;

    /**
     * An eBay-assigned value that indicates condition of the associated item. For more
     * information, see <a
     * href="/api-docs/sell/static/metadata/condition-id-values.html">Item condition ID
     * and name values</a>.
     *
     * @var string
     */
    public $listingCondition = null;

    /**
     * The ID of the condition associated with the item. For more information, see <a
     * href="/api-docs/sell/static/metadata/condition-id-values.html">Item condition ID
     * and name values</a>.<br /><br /><span class="tablenote"><b>Note: </b> This value
     * is not currently returned in the response.</span>.
     *
     * @var string
     */
    public $listingConditionId = null;

    /**
     * A unique eBay-assigned ID that is generated when the item is listed.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * A list of the status values assigned to the item and the date that each new
     * status was assigned.
     *
     * @var \Ebay\Sell\Marketing\Model\ItemMarkdownStatus[]
     */
    public $listingPromotionStatuses = null;

    /**
     * The number of items being sold in the listing.
     *
     * @var int
     */
    public $quantity = null;

    /**
     * Store CategoryId (if any) that to which the listing belongs. This field is blank
     * if there is no seller Store category ID.
     *
     * @var string
     */
    public $storeCategoryId = null;

    /**
     * The seller-defined title of the listing that a seller can use to identify the
     * item.  This label is not displayed in end-user flows.
     *
     * @var string
     */
    public $title = null;
}

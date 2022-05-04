<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines either the selections rules or the list of listing IDs for the
 * promotion. The "listing IDs" are are either the seller's item IDs or the eBay
 * listing IDs.
 */
class InventoryCriterion extends AbstractModel
{
    /**
     * Indicates how the items to include in the promotion are selected. You can
     * include inventory by ID, using rules, or globally include all your inventory.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:InventoryCriterionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryCriterionType = null;

    /**
     * An array of containers for the seller's inventory reference IDs (also known as
     * an "SKU" or "custom label") to be added to the promotion.  <p
     * class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b>
     * or <b>listingIds</b>, but not both.</p>  <br><br><b>Required:</b> All listings
     * in a promotion must offer an electronic payment method.  <br><b>Maximum:</b> 500
     * parent items  <br><b>Maximum SKU or custom label length:</b> 50 characters
     * <br><br><i>Required if </i> <b>InventoryCriterionType</b> is set to
     * <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b>
     * or <b>listingIds</b>.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryItem[]
     */
    public $inventoryItems = null;

    /**
     * An array of eBay listing IDs to be added to the promotion.  <p
     * class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b>
     * or <b>listingIds</b>, but not both.</p>  <br><br><b>Required:</b> All listings
     * in a promotion must offer an electronic payment method.  <br><b>Maximum:</b> 500
     * parent items  <br><b>Maximum SKU or custom label length:</b> 50 characters
     * <br><br><i>Required if </i> <b>InventoryCriterionType</b> is set to
     * <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b>
     * or <b>listingIds</b>.
     *
     * @var string[]
     */
    public $listingIds = null;

    /**
     * This container defines a set of inventory selection rules for a promotion.
     * <br><br>When defining rule criteria, you must limit item exclusions to 100 IDs
     * when you choose from live inventory.  <br><br>Required if
     * <b>InventoryCriterionEnum</b> is set to <code>INVENTORY_BY_RULE</code> or
     * <code>INVENTORY_ANY</code>.
     *
     * @var \Ebay\Sell\Marketing\Model\RuleCriteria
     */
    public $ruleCriteria = null;
}

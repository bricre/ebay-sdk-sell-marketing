<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields that describe the discounts applied to a set of
 * inventory items and the order in which the selection rules are applied.
 */
class SelectedInventoryDiscount extends AbstractModel
{
    /**
     * This container defines the promotional discount as either a monetary amount or a
     * percentage applied to the sales price.
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountBenefit
     */
    public $discountBenefit = null;

    /**
     * A unique, eBay-generated ID that you can use to identify the discount. This
     * field is ignored in POST and PUT operations.
     *
     * @var string
     */
    public $discountId = null;

    /**
     * A container that defines either the listing IDs or the selection rules that
     * specify the items to include in the promotion. Listing IDs can be either eBay
     * listing IDs or a list of the seller's inventory reference IDs (know as SKUs or
     * custom labels). See the <b>selectionRules</b> container for the rule criteria
     * you can use to select inventory.  <p class="tablenote"><b>Note:</b> All listings
     * in Promotions Manager promotions must support an electronic payment method.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryCriterion
     */
    public $inventoryCriterion = null;

    /**
     * For markdown promotions, this field is reserved for future use. <!--This field
     * specifies the precedence of this set of inventory criteria, which is taken into
     * account if an item is selected for multiple discounts by different sets of
     * criteria. The criteria with the highest priority (lowest ruleOrder value) takes
     * precedence over criteria with a lower precedence.-->.
     *
     * @var int
     */
    public $ruleOrder = null;
}

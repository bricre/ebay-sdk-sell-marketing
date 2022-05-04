<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container defines the criteria for when the discounts of a promotion
 * trigger, such as the minimum quantity the buyer must purchase before the
 * promotion kicks in. The promotional discount is applied each time the criteria
 * defined by this container is met.  <p><b>Note:</b> When configuring the rules
 * that govern when the discounts are applied, populate just one of the following
 * fields in the <b>discountSpecification</b> container:</p>
 * <ul><li><b>minAmount</b></li> <li><b>minQuantity</b></li>
 * <li><b>forEachQuantity</b></li> <li><b>forEachAmount</b></li></ul> <p
 * class="tablenote"><b>Tip:</b> Refer to <a
 * href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring
 * discounts for threshold promotions</a> for information and examples on how to
 * combine <b>discountBenefit</b> and <b>discountSpecification</b> to create
 * different types of promotions.</p>.
 */
class DiscountSpecification extends AbstractModel
{
    /**
     * The monetary amount that must be spent on promoted items before the promotional
     * discount is applied.  <br><br><b>Valid values</b> for the associated
     * <code>forEachAmount.</code><b>value</b> field: <br><code> &nbsp; 5, 10, 15, 20,
     * 25, 30, 35, 40, 45, 49, <br> &nbsp; 50, 55, 59, 60, 65, 69, 70, 75, 79, 80, <br>
     * &nbsp; 85, 89, 90, 95, 99, 100, 110, 120, 125, <br> &nbsp; 149, 150, 175, 199,
     * 200, 249, 250, 299, <br> &nbsp; 300, 350, 399, 400, 450, 499, 500</code>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $forEachAmount = null;

    /**
     * The number of items that must be purchased in order to qualify for the discount.
     *  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
     * 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75,
     * 100</code>.
     *
     * @var int
     */
    public $forEachQuantity = null;

    /**
     * Known as the "threshold amount", the minimum dollar amount that needs to be
     * spent on promoted items in order to qualify for the promotion's discount.
     * <br><br><b>Valid values</b> for the associated
     * <code>minAmount.</code><b>value</b> field: <br><code> &nbsp; 5, 10, 15, 20, 25,
     * 30, 35, 40, 45, 49, <br> &nbsp; 50, 55, 59, 60, 65, 69, 70, 75, 79, 80, <br>
     * &nbsp; 85, 89, 90, 95, 99, 100, 110, 120, <br> &nbsp; 125, 149, 150, 175, 199,
     * 200, 249, 250, 299, <br> &nbsp; 300, 350, 399, 400, 450, 499, 500</code>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $minAmount = null;

    /**
     * The minimum quantity of promoted items that needs to be bought in order to
     * qualify for the promotion's discount.  <br><br><b>Valid values:</b> <br><code>
     * &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17,
     * 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>.
     *
     * @var int
     */
    public $minQuantity = null;

    /**
     * Use this field to configure "Buy One Get One" (or <b>BOGO</b>) promotions.
     * <br><br>You must couple this field with <b>forEachQuantity</b> and an
     * <b>amountOffItem</b> or <b>percentOffItem</b> field to configure your BOGO
     * promotion. This field is not valid with order-based promotions. <br><br>The
     * value of this field represents the number of items to be discounted when other
     * promotion criteria is met. For example, when the buyer adds the number of items
     * identified by the <b>forEachQuantity</b> value to their cart, they are then
     * eligible to receive the stated discount from an additional number of like items
     * (the number of which is identified by this field) when they add those items to
     * their cart. To receive the discount, the buyer must purchase the number of items
     * indicated by  <b>forEachQuantity</b> <i>plus</i> the number indicated by this
     * field.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8,
     * 9, 10</code>.
     *
     * @var int
     */
    public $numberOfDiscountedItems = null;
}

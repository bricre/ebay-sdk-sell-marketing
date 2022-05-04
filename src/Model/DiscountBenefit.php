<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container defines the promotional discount as either a monetary amount or a
 * percentage of the sales price.  <p class="tablenote"><b>Important!:</b> You must
 * populate one and only one of the fields in this container:
 * <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li>
 * <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul></p>
 * <p class="tablenote"><b>Tip:</b> Refer to <a
 * href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring
 * discounts for threshold promotions</a> for information and examples on how to
 * combine <b>discountBenefit</b> and <b>discountSpecification</b> values to create
 * different types of promotions.</p>.
 */
class DiscountBenefit extends AbstractModel
{
    /**
     * The monetary amount that is discounted off an item (or items) when the promotion
     * criteria is met.  <br><br>For <b>threshold promotions</b>, where the buyer
     * triggers the discount, the valid values for this field are:  <br><code> &nbsp;
     * 5, 6, 7, 8, 9, 10, 15, 20, 25, <br> &nbsp; 30, 35, 40, 45, 50, 55, 60, 65, <br>
     * &nbsp; 70, 75, 80, 85, 90, 95, 100, 110, <br> &nbsp; 120, 125, 150, 200,
     * 250</code>  <br><br>For <b>markdown</b> promotions, the range is greater, as
     * outlined below and detailed more precisely <a
     * href="/api-docs/sell/static/marketing/pm-amountoffitems-values.html"
     * target="_blank">here</a>: <ul><li>$1 increments from $5 to $100</li><li>$5
     * increments from $105 to $1,000</li><li>$100 increments from $1,100 to
     * $15,000</li></ul>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $amountOffItem = null;

    /**
     * Used for threshold promotions, this is the monetary amount that is discounted
     * off an order when the promotion criteria is met. Because this field is valid
     * only for orders, it's not a valid combination to use with markdown promotions.
     * <br><br><b>Valid values</b> for the associated
     * <code>amountOffOrder.</code><b>value</b> field:  <br><code> &nbsp; 5, 6, 7, 8,
     * 9, 10, 15, 20, 25, <br> &nbsp; 30, 35, 40, 45, 50, 55, 60, 65, <br> &nbsp; 70,
     * 75, 80, 85, 90, 95, 100, 110, <br> &nbsp; 120, 125, 150, 200, 250</code>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $amountOffOrder = null;

    /**
     * The percentage applied to the sales price that is discounted off the promoted
     * item (or items) when the promotion criteria is met.  <br><br>Valid integer
     * values for percentage off: &nbsp;&nbsp;<b>Min:</b> <code>5</code>
     * &nbsp;&nbsp;<b>Max:</b> <code>80</code>.
     *
     * @var string
     */
    public $percentageOffItem = null;

    /**
     * Used for threshold promotions, this is the percentage of the order price that is
     * discounted off the order when the promotion criteria is met. This field is not
     * value for markdown promotions.  <br><br>Valid integer values for ORDER_DISCOUNT
     * promotions: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b>
     * <code>80</code>  <br><br>For VOLUME_DISCOUNT promotions: Must be set to
     * <code>0</code> for the first discount rule.
     *
     * @var string
     */
    public $percentageOffOrder = null;
}

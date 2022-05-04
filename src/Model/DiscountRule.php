<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines a promotion as being either a monetary amount or a
 * percentage of a sales price that's subtracted from the price of an item or
 * order. <p>Set the amount of the discount and the rules that govern when the
 * discount triggers using the <b>discountBenefit</b> and
 * <b>discountSpecification</b> fields.</p>  <p class="tablenote"><b>Note:</b> In
 * <b>volume pricing promotions</b>, you must configure at least two
 * <b>discountRule</b> containers and at most four.</p>.
 */
class DiscountRule extends AbstractModel
{
    /**
     * This container defines the promotional discount as either a monetary amount or a
     * percentage of the sales price.  <p><b>Note:</b> When configuring promotion
     * benefits, populate just one of the following fields in the
     * <b>discountBenefit</b> container:</p> <ul><li><b>amountOffItem</b></li>
     * <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li>
     * <li><b>percentageOffOrder</b></li></ul>  <p>For volume pricing, only
     * <b>percentageOffOrder</b> is applicable as a <b>discountBenefit</b>. Also, the
     * first <b>discountBenefit</b> container in a volume pricing configuration must
     * set <b>percentageOffOrder</b> to <code>0</code>.</p>  <p
     * class="tablenote"><b>Tip:</b> Refer to <a
     * href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring
     * discounts for threshold promotions</a> for information and examples on how to
     * combine <b>discountBenefit</b> and <b>discountSpecification</b> to create
     * different types of promotions.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountBenefit
     */
    public $discountBenefit = null;

    /**
     * This container defines the criteria for when the discounts of a promotion
     * trigger, such as the minimum quantity that the buyer must purchase before the
     * promotion kicks in. The promotional discount is applied each time the criteria
     * defined by this container is met.  <p>When configuring the rules that govern
     * when the discounts are applied, populate just one of the following fields in the
     * <b>discountSpecification</b> container:</p>  <ul><li><b>minAmount</b></li>
     * <li><b>minQuantity</b></li> <li><b>forEachQuantity</b></li>
     * <li><b>forEachAmount</b></li></ul>  <p class="tablenote"><b>Important:</b> When
     * configuring <i>volume pricing promotions</i>, only <b>minQuantity</b> is
     * applicable as a <b>discountSpecification</b>. Also, the configuration for
     * <b>minQuantity</b> in a volume pricing configuration is specific. In the first
     * <b>discountSpecification</b> container, set <b>minQuantity</b> to
     * <code>1</code>, and in the second, set <b>minQuantity</b> to <code>2</code>. If
     * you include a third <b>discountRules</b> pair, <b>minQuantity</b> must be set to
     * <code>3</code>, and in a fourth, it must be set to <code>4</code>. Also, you
     * must set a <b>ruleOrder</b> value in each <b>discountRules</b> container. In the
     * first container, <b>discountRules</b> must be set to <code>1</code>, and in each
     * subsequent container, the value be be incremented by 1. For more, see <a
     * href="/api-docs/sell/static/marketing/pm-volume-discounts.html"
     * target="_blank">Configuring volume pricing discounts</a>.</p> <p
     * class="tablenote"><b>Tip:</b> see <a
     * href="/api-docs/sell/static/marketing/pm-specifying-discounts.html"
     * target="_blank">Configuring discounts for threshold promotions</a> for
     * information and examples on how to combine <b>discountBenefit</b> and
     * <b>discountSpecification</b> to create different types of promotions.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountSpecification
     */
    public $discountSpecification = null;

    /**
     * The limit on how much a buyer can save using a <code>CODED_COUPON</code>
     * promotion type. Permitted values are 1-1000. Supported currency codes include
     * USD, GBP, EUR, and AUD. <p class="tablenote"><b>Note:</b> The Currency Code for
     * 'maxDiscountAmount' must be the same as the Currency Code for 'budget'.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $maxDiscountAmount = null;

    /**
     * This field indicates the order in which the <b>discountRules</b> are presented.
     * The value specified for this field must equal the associated <b>minQuantity</b>
     * value. <br><br><i>Required if </i> you are creating a volume pricing promotion.
     *
     * @var int
     */
    public $ruleOrder = null;
}

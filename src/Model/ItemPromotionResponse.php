<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This complex type defines the fields returned for an item (threshold) promotion.
 */
class ItemPromotionResponse extends AbstractModel
{
    /**
     * If set to <code>true</code>, the discount is applied only when the buyer
     * purchases multiple quantities of a single item in the promotion. Otherwise, the
     * promotional discount applies to multiple quantities of any items in the
     * promotion. Different variations of a multi-variation item are considered to be
     * the same item. Note that this flag is not relevant if the
     * <b>inventoryCriterion</b> container identifies a single listing ID for the
     * promotion.
     *
     * @var bool
     */
    public $applyDiscountToSingleItemOnly = null;

    /**
     * This sets the budget for the <code>CODED_COUPON</code> promotion type. Supported
     * values range from 100-1000000. Supported currency codes include USD, GBP, EUR,
     * and AUD. <p class="tablenote"><b>Note:</b> The budget value for an active or
     * paused promotion can not be decreased.</p> <p class="tablenote"><b>Note:</b> The
     * Currency Code for 'budget' must be the same as the Currency Code for
     * 'maxDiscountAmount'.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $budget = null;

    /**
     * The configuration of a coded coupon promotion.
     *
     * @var \Ebay\Sell\Marketing\Model\CouponConfiguration
     */
    public $couponConfiguration = null;

    /**
     * Required for CODED_COUPON promotions, this is the seller-defined "tag line" for
     * the offer, such as "Save on designer shoes." The tag line appears under the
     * "offer-type text" that is generated for the promotion and is displayed under the
     * offer tile that is shown on the seller's <b>All Offers</b> page and on the event
     * page for the promotion.  This tag line is not used with volume pricing
     * promotions. <p class="tablenote"><b>Note:</b> Offer-type text is a teaser that's
     * presented throughout the buyer's journey through the sales flow and is generated
     * by eBay. This text is not editable by the seller&mdash;it's derived from the
     * settings in the <b>discountRules</b> and <b>discountSpecification</b>
     * fields&mdash;and can be, for example, "Extra 20% off when you buy 3+".</p>
     * <br><b>Maximum length:</b> 50.
     *
     * @var string
     */
    public $description = null;

    /**
     * A list containing the promotion benefits (<b>discountRule</b>) and the rules
     * that define when the benefit is applied (<b>discountSpecification</b>).
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountRule[]
     */
    public $discountRules = null;

    /**
     * The date and time the promotion ends in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time
     * into the local time of the seller.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * Returns either an array of listing IDs or the selection rules used to specify
     * the items included in the promotion. Listing IDs can be either eBay listing IDs
     * or an array of seller's inventory reference IDs (know as SKUs or custom labels).
     * See the <b>selectionRules</b> container for the rule criteria you can use to
     * select inventory.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryCriterion
     */
    public $inventoryCriterion = null;

    /**
     * The eBay marketplace ID of the site where the threshold promotion is hosted.
     * Threshold promotions are currently supported on a limited number of eBay
     * marketplaces.  <p><b>Valid values:</b></p>  <ul
     * class="compact"><li><code>EBAY_AU</code> = Australia</li>
     * <li><code>EBAY_DE</code> = Germany</li> <li><code>EBAY_ES</code> = Spain</li>
     * <li><code>EBAY_FR</code> = France</li> <li><code>EBAY_GB</code> = Great
     * Britain</li> <li><code>EBAY_IT</code> = Italy</li> <li><code>EBAY_US</code> =
     * United States</li></ul> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The seller-defined name or "title" of the promotion that the seller can use to
     * identify a promotion. This label is not displayed in end-user flows.
     * <br><br><b>Maximum length:</b> 90.
     *
     * @var string
     */
    public $name = null;

    /**
     * Applicable for only <b>ORDER_DISCOUNT</b> promotions, this field indicates the
     * precedence of the promotion, which eBay uses to determine the position of a
     * promotion on the seller's <b>All Offers</b> page. If an item is associated with
     * multiple promotions, the promotion with the higher priority takes precedence.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionPriorityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priority = null;

    /**
     * A unique eBay-assigned ID for the promotion that's generated when the promotion
     * is created.
     *
     * @var string
     */
    public $promotionId = null;

    /**
     * Required for CODED_COUPON, MARKDOWN_SALE, and ORDER_DISCOUNT promotions, and not
     * applicable for <b>VOLUME_DISCOUNT</b> promotions, this field is a URL that
     * points to an image for the promotion. This image is displayed on the seller's
     * <b>All Offers</b> page. The URL must point to either JPEG or PNG image and it
     * must be a minimum of 500x500 pixels in dimension and cannot exceed 12Mb in size.
     *
     * @var string
     */
    public $promotionImageUrl = null;

    /**
     * The current status of the promotion. When creating a new promotion, this value
     * must be set to either <code>DRAFT</code> or <code>SCHEDULED</code>. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionStatus = null;

    /**
     * Indicates the type of the promotion, either <code>CODED_COUPON</code>,
     * <code>MARKDOWN_SALE</code>, <code>ORDER_DISCOUNT</code>, or
     * <code>VOLUME_DISCOUNT</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionType = null;

    /**
     * The date and time the promotion starts in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time
     * into the local time of the seller.
     *
     * @var string
     */
    public $startDate = null;
}

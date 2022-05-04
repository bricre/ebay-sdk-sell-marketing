<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields used to describe an item price markdown promotion.
 */
class ItemPriceMarkdown extends AbstractModel
{
    /**
     * If set to <code>true</code>, free shipping is applied to the first shipping
     * service specified for the item. The first domestic shipping option is set to
     * "free shipping," regardless if the shipping <b>optionType</b> for that service
     * is set to <code>FLAT_RATE</code>, <code>CALCULATED</code>, or
     * <code>NOT_SPECIFIED</code> (freight). This flag essentially adds free shipping
     * as a promotional bonus. <br><br><b>Default:</b> <code>false</code>.
     *
     * @var bool
     */
    public $applyFreeShipping = null;

    /**
     * If set to <code>true</code>, eBay will automatically add inventory items to the
     * markdown promotion if they meet the <b>selectedInventoryDiscounts</b> criteria
     * specified for the markdown promotion.  <br><br><b>Default:</b>
     * <code>false</code>.
     *
     * @var bool
     */
    public $autoSelectFutureInventory = null;

    /**
     * If set to <code>true</code>, price increases (including removing the free
     * shipping flag) are blocked and an error message is returned if a seller attempts
     * to adjust the price of an item that's partaking in this markdown promotion. If
     * set to <code>false</code>, an item is dropped from the markdown promotion if the
     * seller adjusts the price.  <br><br><b>Default:</b> <code>false</code>.
     *
     * @var bool
     */
    public $blockPriceIncreaseInItemRevision = null;

    /**
     * This field is required if you are configuring an MARKDOWN_SALE promotion.
     * <br><br>This is the seller-defined "tag line" for the offer, such as "Save on
     * designer shoes." A tag line appears under the "offer-type text" that is
     * generated for the promotion. The text is displayed on the offer tile that is
     * shown on the seller's <b>All Offers</b> page and on the event page for the
     * promotion.  <p class="tablenote"><b>Note:</b> Offer-type text is a teaser that's
     * presented throughout the buyer's journey through the sales flow and is generated
     * by eBay. This text is not editable by the seller&mdash;it's derived from the
     * settings in the <b>discountRules</b> and <b>discountSpecification</b>
     * fields&mdash;and can be, for example, "20% off".</p>  <br><b>Maximum length:</b>
     * 50.
     *
     * @var string
     */
    public $description = null;

    /**
     * The date and time the promotion ends, in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). The value supplied for <b>endDate</b> must
     * be at least 24 hours after the value supplied for the <b>startDate</b> of the
     * markdown promotion.<br><br>For display purposes, convert this time into the
     * local time of the seller.  <br><br><b>Max value:</b><ul><li><code>14</code> days
     * for the AT, CH, DE, ES, FR, IE, IT, and UK, marketplaces.</li>
     * <li><code>45</code> days for all other marketplaces.</li></ul>.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The eBay marketplace ID of the site where the markdown promotion is hosted.
     * Markdown promotions are supported on all eBay marketplaces. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The seller-defined name or 'title' of the promotion that the seller can use to
     * identify a promotion. This label is not displayed in end-user flows.
     * <br><br><b>Maximum length:</b> 90.
     *
     * @var string
     */
    public $name = null;

    /**
     * This field is ignored in markdown promotions. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionPriorityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priority = null;

    /**
     * Required for CODED_COUPON, MARKDOWN_SALE, and ORDER_DISCOUNT promotions,
     * populate this field with a URL that points to an image to be used with the
     * promotion. This image is displayed on the seller's <b>All Offers</b> page. The
     * URL must point to either JPEG or PNG image and it must be a minimum of 500x500
     * pixels in dimension and cannot exceed 12Mb in size.
     *
     * @var string
     */
    public $promotionImageUrl = null;

    /**
     * The current status of the promotion. When creating a new promotion, you must set
     * this value to either <code>DRAFT</code> or <code>SCHEDULED</code>.  <br><br>Note
     * that you must set this value to <code>SCHEDULED</code> when you update a
     * <b>RUNNING</b> promotion. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionStatus = null;

    /**
     * A list that defines the sets of selected items for the markdown promotion and
     * the discount specified for promotion.
     *
     * @var \Ebay\Sell\Marketing\Model\SelectedInventoryDiscount[]
     */
    public $selectedInventoryDiscounts = null;

    /**
     * The date and time the promotion starts in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time
     * into the local time of the seller.
     *
     * @var string
     */
    public $startDate = null;
}

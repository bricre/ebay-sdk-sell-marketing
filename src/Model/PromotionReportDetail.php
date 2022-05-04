<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields in a promotion-level report.
 */
class PromotionReportDetail extends AbstractModel
{
    /**
     * The <i>average item discount</i> is the average discount that has been applied
     * to each item in a promotion. This value is calculated as follows:
     * <br><br><b>totalDiscount</b> / <b>itemsSoldQuantity</b> =
     * <b>averageItemDiscount</b>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageItemDiscount = null;

    /**
     * The <i>average item revenue</i> is the average revenue that has been received
     * for each item in a promotion. This value is calculated as follows:
     * <br><br><b>totalSales</b> / <b>itemsSoldQuantity</b> = <b>averageItemRevenue</b>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageItemRevenue = null;

    /**
     * The <i>average order discount</i> is the average discount that has been applied
     * to each order in a promotion. This value is calculated as follows:
     * <br><br><b>totalDiscount</b> / <b>numberOfOrdersSold</b> =
     * <b>averageOrderDiscount</b>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageOrderDiscount = null;

    /**
     * The <i>average order revenue</i> is the average revenue that has been received
     * for each order in a promotion. This value is calculated as follows:
     * <br><br><b>totalSales</b> / <b>numberOfOrdersSold</b> =
     * <b>averageOrderRevenue</b>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageOrderRevenue = null;

    /**
     * The <i>average order size</i> is the average number of items that each order
     * contained in a promotion. This value is calculated as follows:
     * <br><br><b>itemsSoldQuantity</b> / <b>numberOfOrdersSold</b> =
     * <b>averageOrderSize</b>.
     *
     * @var string
     */
    public $averageOrderSize = null;

    /**
     * This is the monetary amount of items purchased in a promotion where the
     * threshold <i>wasn't met</i>, so the discount was not applied.  <br><br>For
     * example, suppose you're running a "Buy 1, get 1 at 50%" promotion on $5 socks.
     * One buyer purchased only one pair of socks, so they pay the full price of $5.
     * Here, your <b>baseSale</b> amount would be $5.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $baseSale = null;

    /**
     * This is the quantity of items purchased in a threshold promotion where the
     * threshold <i>has been met</i> and the discount was applied. <br><br>For example,
     * suppose you're running a "Buy 1, get 1 at 50%" promotion on $5 socks. One buyer
     * purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the
     * full price of $10). Your number of items sold (<b>itemsSoldQuantity</b>) would
     * be 2 and you number of orders sold (<b>numberOfOrdersSold</b>) would be 1.
     *
     * @var int
     */
    public $itemsSoldQuantity = null;

    /**
     * This is the number of orders sold in a threshold promotion where the threshold
     * <i>has been met</i> and the discount was applied. <br><br>For example, suppose
     * you're running a "Buy 1, get 1 at 50%" promotion on $5 socks. One buyer
     * purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the
     * full price of $10). Your <b>numberOfOrdersSold</b> would be 1 and your
     * <b>itemsSoldQuantity</b> would be 2.
     *
     * @var int
     */
    public $numberOfOrdersSold = null;

    /**
     * The <i>percentage sales lift</i> is the total dollar amount gained due to
     * promotions. This value is calculated as follows:  <br><br> <b>promotionSale</b>
     * / <b>totalSale</b> =  <b>percentageSalesLift</b>.
     *
     * @var string
     */
    public $percentageSalesLift = null;

    /**
     * The URI of the promotion report.
     *
     * @var string
     */
    public $promotionHref = null;

    /**
     * A unique eBay-assigned ID for the promotion that's generated when the promotion
     * is created.
     *
     * @var string
     */
    public $promotionId = null;

    /**
     * The unique eBay-assigned ID of the promotion report that is generated when the
     * report is created.
     *
     * @var string
     */
    public $promotionReportId = null;

    /**
     * This is the monetary amount of the items sold in a threshold promotion where the
     * threshold <i>has been met</i> and the discount was applied.  <br><br>For
     * example, suppose you're running a "Buy 1, get 1 at 50%" promotion on $5 socks.
     * One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather
     * than the full price of $10). Your <b>promotionSale</b> amount would be $7.50.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $promotionSale = null;

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
     * This is the monetary discount amount applied to the sale of items in a threshold
     * promotion where the threshold <i>has been met</i> and the discount was applied.
     * <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" promotion on
     * $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both
     * pairs (rather than the full price of $10). Your <b>totalDiscount</b> amount
     * would be $2.50.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $totalDiscount = null;

    /**
     * This is the total monetary sales amount of all items sold in a promotion.
     * <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" promotion on
     * $5 socks. You make one sale where the buyer purchases only one pair of socks and
     * they pay the full price of $5 (<b>baseSale</b>). You make a second sale where
     * the buyer purchases two pairs of socks and they pay $7.50, for both pairs
     * (<b>promotionSale</b>). Your <b>totalSale</b> would be $12.50. This value is
     * calculated as follows:  <br><br><b>baseSale</b> + <b>promotionSale</b> =
     * <b>totalSale</b>.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $totalSale = null;
}

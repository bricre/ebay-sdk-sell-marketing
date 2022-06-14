<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\ItemsPagedCollection;
use Ebay\Sell\Marketing\Model\PromotionsPagedCollection;

class Promotion extends AbstractAPI
{
    /**
     * <p>This method returns the set of listings associated with the
     * <b>promotion_id</b> specified in the path parameter. Call <a
     * href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a>
     * to retrieve the IDs of a seller's promotions.  <p>The listing details are
     * returned in a paginated set and you can control and results returned using the
     * following query parameters: <b>limit</b>, <b>offset</b>, <b>q</b>, <b>sort</b>,
     * and <b>status</b>.</p>  <ul><li><b>Maximum associated listings returned:</b>
     * 200</li>  <li><b>Default number of listings returned:</b> 200</li></ul>.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to get plus the marketplace ID on which the promotion
     *                             is hosted. Concatenate the two values by separating them with an "at sign"
     *                             (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique
     *                             eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     * @param array  $queries      options:
     *                             'limit'	string	Specifies the maximum number of promotions returned on a page
     *                             from the result set. <br><br><b>Default:</b> 200<br><b>Maximum:</b> 200
     *                             'offset'	string	Specifies the number of promotions to skip in the result set
     *                             before returning the first promotion in the paginated response.  <p>Combine
     *                             <b>offset</b> with the <b>limit</b> query parameter to control the items
     *                             returned in the response. For example, if you supply an <b>offset</b> of
     *                             <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the
     *                             response contains the first 10 items from the complete list of items retrieved
     *                             by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is
     *                             <code>20</code>, the first page of the response contains items 11-30 from the
     *                             complete result set.</p> <p><b>Default:</b> 0</p>
     *                             'q'	string	Reserved for future use.
     *                             'sort'	string	Specifies the order in which to sort the associated listings in
     *                             the response. If you precede the supplied value with a dash, the response is
     *                             sorted in reverse order.  <br><br><b>Example:</b>
     *                             <br>&nbsp;&nbsp;&nbsp;<code>sort=PRICE</code> - Sorts the associated listings by
     *                             their current price in ascending order
     *                             <br>&nbsp;&nbsp;&nbsp;<code>sort=-TITLE</code> - Sorts the associated listings
     *                             by their title in descending alphabetical order (Z-Az-a)  <br><br><b>Valid
     *                             values</b>:<ul class="compact"><li>AVAILABLE</li> <li>PRICE</li>
     *                             <li>TITLE</li></ul> For implementation help, refer to eBay API documentation at
     *                             https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
     *                             'status'	string	This query parameter applies only to markdown promotions. It
     *                             filters the response based on the indicated status of the promotion. Currently,
     *                             the only supported value for this parameter is <code>MARKED_DOWN</code>, which
     *                             indicates active markdown promotions. For implementation help, refer to eBay API
     *                             documentation at
     *                             https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum
     *
     * @return ItemsPagedCollection
     */
    public function getListingSet(string $promotion_id, array $queries = []): ItemsPagedCollection
    {
        return $this->request(
        'getListingSet',
        'GET',
        "promotion/$promotion_id/get_listing_set",
        null,
        $queries,
        []
        );
    }

    /**
     * This method returns a list of a seller's undeleted promotions. <p>The call
     * returns up to 200 currently-available promotions on the specified marketplace.
     * While the response body does not include the promotion's <b>discountRules</b> or
     * <b>inventoryCriterion</b> containers, it does include the <b>promotionHref</b>
     * (which you can use to retrieve the complete details of the promotion).</p>
     * <p>Use query parameters to sort and filter the results by the number of
     * promotions to return, the promotion state or type, and the eBay marketplace. You
     * can also supply keywords to limit the response to the promotions that contain
     * that keywords in the title of the promotion.</p> <p><b>Maximum returned:</b>
     * 200</p>.
     *
     * @param array $queries options:
     *                       'limit'	string	Specifies the maximum number of promotions returned on a page
     *                       from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
     *                       'marketplace_id'	string	The eBay marketplace ID of the site where the promotion
     *                       is hosted.  <p><b>Valid values:</b></p>  <ul><li><code>EBAY_AU</code> =
     *                       Australia</li> <li><code>EBAY_DE</code> = Germany</li> <li><code>EBAY_ES</code>
     *                       = Spain</li> <li><code>EBAY_FR</code> = France</li> <li><code>EBAY_GB</code> =
     *                       Great Britain</li> <li><code>EBAY_IT</code> = Italy</li>
     *                       <li><code>EBAY_US</code> = United States</li></ul>
     *                       'offset'	string	Specifies the number of promotions to skip in the result set
     *                       before returning the first promotion in the paginated response.  <p>Combine
     *                       <b>offset</b> with the <b>limit</b> query parameter to control the items
     *                       returned in the response. For example, if you supply an <b>offset</b> of
     *                       <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the
     *                       response contains the first 10 items from the complete list of items retrieved
     *                       by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is
     *                       <code>20</code>, the first page of the response contains items 11-30 from the
     *                       complete result set.</p> <p><b>Default:</b> 0</p>
     *                       'promotion_status'	string	Specifies the promotion state by which you want to
     *                       filter the results. The response contains only those promotions that match the
     *                       state you specify.  <br><br><b>Valid values:</b> <ul><li><code>DRAFT</code></li>
     *                       <li><code>SCHEDULED</code></li> <li><code>RUNNING</code></li>
     *                       <li><code>PAUSED</code></li> <li><code>ENDED</code></li></ul><b>Maximum number
     *                       of input values:</b> 1
     *                       'promotion_type'	string	Filters the returned promotions based on their campaign
     *                       promotion type. Specify one of the following values to indicate the promotion
     *                       type you want returned: <ul><li><code>CODED_COUPON</code> &ndash; A coupon code
     *                       promotion set with <b>createItemPromotion</b>.</li>
     *                       <li><code>MARKDOWN_SALE</code> &ndash; A markdown promotion set with
     *                       <b>createItemPriceMarkdownPromotion</b>.</li> <li><code>ORDER_DISCOUNT</code>
     *                       &ndash; A threshold promotion set with <b>createItemPromotion</b>.</li>
     *                       <li><code>VOLUME_DISCOUNT</code> &ndash; A volume pricing promotion set with
     *                       <b>createItemPromotion</b>.</li></ul>
     *                       'q'	string	A string consisting of one or more <i>keywords</i>. eBay filters the
     *                       response by returning only the promotions that contain the supplied keywords in
     *                       the promotion title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."
     *                       <br><br>Commas that separate keywords are ignored. For example, a keyword string
     *                       of "iPhone, iPad" equals "iPhone iPad", and each results in a response that
     *                       contains promotions with both "iPhone" and "iPad" in the title.
     *                       'sort'	string	Specifies the order for how to sort the response. If you precede
     *                       the supplied value with a dash, the response is sorted in reverse order.
     *                       <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=END_DATE</code> &nbsp;
     *                       Sorts the promotions in the response by their end dates in ascending order
     *                       <br>&nbsp;&nbsp;&nbsp;<code>sort=-PROMOTION_NAME</code> &nbsp; Sorts the
     *                       promotions by their promotion name in descending alphabetical order (Z-Az-a)
     *                       <br><br><b>Valid values</b>:<ul><li><code>START_DATE</code></li>
     *                       <li><code>END_DATE</code></li> <li><code>PROMOTION_NAME</code></li></ul> For
     *                       implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
     *
     * @return PromotionsPagedCollection
     */
    public function gets(array $queries = []): PromotionsPagedCollection
    {
        return $this->request(
        'getPromotions',
        'GET',
        'promotion',
        null,
        $queries,
        []
        );
    }

    /**
     * This method pauses a currently-active (RUNNING) threshold promotion and changes
     * the state of the promotion from <code>RUNNING</code> to <code>PAUSED</code>.
     * Pausing a promotion makes the promotion temporarily unavailable to buyers and
     * any currently-incomplete transactions will not receive the promotional offer
     * until the promotion is resumed. Also, promotion teasers are not displayed when a
     * promotion is paused.  <br><br>Pass the ID of the promotion you want to pause
     * using the <b>promotion_id</b> path parameter. Call <a
     * href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a>
     * to retrieve the IDs of the seller's promotions. <br><br><b>Note:</b> You can
     * only pause threshold promotions (you cannot pause markdown promotions).
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to pause plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an "at
     *                             sign" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a
     *                             unique eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     *
     * @return mixed
     */
    public function pause(string $promotion_id): mixed
    {
        return $this->request(
        'pausePromotion',
        'POST',
        "promotion/$promotion_id/pause",
        null,
        [],
        []
        );
    }

    /**
     * This method restarts a threshold promotion that was previously paused and
     * changes the state of the promotion from <code>PAUSED</code> to
     * <code>RUNNING</code>. Only promotions that have been previously paused can be
     * resumed. Resuming a promotion reinstates the promotional teasers and any
     * transactions that were in motion before the promotion was paused will again be
     * eligible for the promotion.  <br><br>Pass the ID of the promotion you want to
     * resume using the <b>promotion_id</b> path parameter. Call <a
     * href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a>
     * to retrieve the IDs of the seller's promotions.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to resume plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an "at
     *                             sign" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a
     *                             unique eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     *
     * @return mixed
     */
    public function resume(string $promotion_id): mixed
    {
        return $this->request(
        'resumePromotion',
        'POST',
        "promotion/$promotion_id/resume",
        null,
        [],
        []
        );
    }
}

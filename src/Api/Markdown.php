<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\ItemPriceMarkdown;

class Markdown extends AbstractAPI
{
    /**
     * This method creates an <b>item price markdown promotion</b> (know simply as a
     * "markdown promotion") where a discount amount is applied directly to the items
     * included the promotion. Discounts can be specified as either a monetary amount
     * or a percentage off the standard sales price. eBay highlights promoted items by
     * placing teasers for the items throughout the online sales flows.  <p>Unlike an
     * <a
     * href="/api-docs/sell/marketing/resources/item_promotion/methods/createItemPromotion">item
     * promotion</a>, a markdown promotion does not require the buyer meet a
     * "threshold" before the offer takes effect. With markdown promotions, all the
     * buyer needs to do is purchase the item to receive the promotion benefit.</p>  <p
     * class="tablenote"><b>Important:</b> There are some restrictions for which
     * listings are available for price markdown promotions. For details, see <a
     * href="/api-docs/sell/marketing/static/overview.html#PM-requirements">Promotions
     * Manager requirements and restrictions</a>. <br><br>In addition, we recommend you
     * list items at competitive prices before including them in your markdown
     * promotions. For an extensive list of pricing recommendations, see the
     * <b>Growth</b> tab in Seller Hub.</p> <p>There are two ways to add items to
     * markdown promotions:</p> <ul><li><b>Key-based promotions</b> select items using
     * either the listing IDs or inventory reference IDs of the items you want to
     * promote. Note that if you use inventory reference IDs, you must specify both the
     * <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of
     * the item(s) you want to include the promotion.</li>  <li><b>Rule-based
     * promotions</b> select items using a list of eBay category IDs or seller Store
     * category IDs. Rules can further constrain items in a promotion by minimum and
     * maximum prices, brands, and item conditions.</li></ul>  <p>New promotions must
     * be created in either a <code>DRAFT</code> or a <code>SCHEDULED</code> state. Use
     * the DRAFT state when you are initially creating a promotion and you want to be
     * sure it's correctly configured before scheduling it to run. When you create a
     * promotion, the promotion ID is returned in the <b>Location</b> response header.
     * Use this ID to reference the promotion in subsequent requests (such as to
     * schedule a promotion that's in a DRAFT state).</p>  <p
     * class="tablenote"><b>Tip:</b> Refer to <a
     * href="/api-docs/sell/static/marketing/promotions-manager.html">Promotions
     * Manager</a> in the <i>Selling Integration Guide</i> for details and examples
     * showing how to create and manage seller promotions.</p>  <p>Markdown promotions
     * are available on all eBay marketplaces. For more information, see <a
     * href="/api-docs/sell/marketing/static/overview.html#PM-requirements">Promotions
     * Manager requirements and restrictions</a>.</p>.
     *
     * @param ItemPriceMarkdown $Model this type defines the fields that describe an
     *                                 item price markdown promotion
     *
     * @return object
     */
    public function createPromotion(ItemPriceMarkdown $Model): object
    {
        return $this->request(
        'createItemPriceMarkdownPromotion',
        'POST',
        'item_price_markdown',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method returns the complete details of the item price markdown promotion
     * that's indicated by the <b>promotion_id</b> path parameter. <br><br>Call <a
     * href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a>
     * to retrieve the IDs of a seller's promotions.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to get plus the marketplace ID on which the promotion
     *                             is hosted. Concatenate the two values by separating them with an "at sign"
     *                             (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique
     *                             eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     *
     * @return ItemPriceMarkdown
     */
    public function getPromotion(string $promotion_id): ItemPriceMarkdown
    {
        return $this->request(
        'getItemPriceMarkdownPromotion',
        'GET',
        "item_price_markdown/$promotion_id",
        null,
        [],
        []
        );
    }

    /**
     * This method updates the specified item price markdown promotion with the new
     * configuration that you supply in the payload of the request. Specify the
     * promotion you want to update using the <b>promotion_id</b> path parameter. Call
     * <a
     * href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a>
     * to retrieve the IDs of a seller's promotions.  <br><br>When updating a
     * promotion, supply all the fields that you used to configure the original
     * promotion (and not just the fields you are updating). eBay replaces the
     * specified promotion with the values you supply in the update request and if you
     * don't pass a field that currently has a value, the update request fails.
     * <br><br>The parameters you are allowed to update with this request depend on the
     * status of the promotion you're updating:  <ul><li>DRAFT or SCHEDULED promotions:
     * You can update any of the parameters in these promotions that have not yet
     * started to run, including the <b>discountRules</b>.</li> <li>RUNNING promotions:
     * You can change the <b>endDate</b> and the item's inventory but you cannot change
     * the promotional discount or the promotion's start date.</li> <li>ENDED
     * promotions: Nothing can be changed.</li></ul>.
     *
     * @param string            $promotion_id This path parameter takes a concatenation of the ID
     *                                        of the promotion you want to update plus the marketplace ID on which the
     *                                        promotion is hosted. Concatenate the two values by separating them with an "at
     *                                        sign" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a
     *                                        unique eBay-assigned value that's generated when the promotion is created. The
     *                                        Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                                        hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     * @param ItemPriceMarkdown $Model        this type defines the fields that describe an
     *                                        item price markdown promotion
     *
     * @return object
     */
    public function updatePromotion(string $promotion_id, ItemPriceMarkdown $Model): object
    {
        return $this->request(
        'updateItemPriceMarkdownPromotion',
        'PUT',
        "item_price_markdown/$promotion_id",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method deletes the item price markdown promotion specified by the
     * <b>promotion_id</b> path parameter. Call <a
     * href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a>
     * to retrieve the IDs of a seller's promotions.  <br><br>You can delete any
     * promotion with the exception of those that are currently active (RUNNING). To
     * end a running promotion, call <a
     * href="/api-docs/sell/marketing/resources/item_price_markdown/methods/updateItemPriceMarkdownPromotion">updateItemPriceMarkdownPromotion</a>
     * and adjust the <b>endDate</b> field as appropriate.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to delete plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an "at
     *                             sign" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a
     *                             unique eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     *
     * @return mixed
     */
    public function deletePromotion(string $promotion_id): mixed
    {
        return $this->request(
        'deleteItemPriceMarkdownPromotion',
        'DELETE',
        "item_price_markdown/$promotion_id",
        null,
        [],
        []
        );
    }
}

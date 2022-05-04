<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type specifies the selection rules used to create a campaign.
 */
class SelectionRule extends AbstractModel
{
    /**
     * A list of the brands of the items to be included in the campaign.
     *
     * @var string[]
     */
    public $brands = null;

    /**
     * A list of category IDs associated with the listings to be included in the
     * campaign. Ads are created for all the seller's items listed in the specified
     * categories, up to a maximum of 50,000 items. The IDs can be either a list of
     * eBay category IDs (from the site where the item is hosted), or a list of
     * category IDs defined and used by the seller's store. <p><b>eBay Marketplace
     * category IDs</b>  <br>To get a list of marketplace category IDs, do one of the
     * following:</p> <ul><li>Get a list of category IDs for a marketplace by adding
     * <code>/sch/allcategories/all-categories</code> to the marketplace URL when
     * browsing the site. <br>For example: <code>
     * http://www.ebay.com.au/sch/allcategories/all-categories</code> </li><li>Navigate
     * to the desired category on the host site and copy the category ID from the
     * URL.</li>  <li>These options are also available for the US marketplace:
     * <ul><li>See <a
     * href="http://pages.ebay.com/sellerinformation/news/categorychanges.html"
     * target="_blank">Category Changes</a> for the latest list of category
     * IDs.</li><li>Retrieve a list of category IDs using the <a
     * href="/api-docs/commerce/taxonomy/resources/methods">Taxonomy
     * API</a>.</li></ul></li></ul><p><b>Seller store category IDs</b> <br>Because
     * store category IDs are uniquely defined and maintained by each seller, this
     * service cannot provide a list of a seller's IDs. However, sellers can retrieve
     * their store category IDs as follows:</p><ol><li>Go to <b>Seller Hub</b> &gt;
     * <b>Marketing</b>.</li> <li>Click <b>Manage store categories</b>. <br>  A list of
     * your store categories displays.</li> <li>Click the <b>All categories</b> link
     * displayed at the bottom of the list. <br>A complete list of your store
     * categories and their associated store category IDs displays.</li></ol>.
     *
     * @var string[]
     */
    public $categoryIds = null;

    /**
     * Indicates the source of the category ID; eBay or seller's store. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CategoryScopeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $categoryScope = null;

    /**
     * A comma-separated list of unique identifiers for the conditions of listings to
     * be included in the campaign. Up to four IDs can be specified.<br /><br />This
     * array is only returned if one or more item condition values are used as a
     * filter.<br /><br /><span class="tablenote"><strong>Note:</strong> Multiple
     * listing condition IDs are mapped to the four valid values listed below. Refer to
     * <a href="/api-docs/sell/static/marketing/pl-create-campaign.html#add-by-rule"
     * target="_blank">Creating a Promoted Listings campaign</a> for more
     * details.</span><br /><br /><strong>Valid
     * Values:</strong><ul><li><code>1000</code> = New</li><li><code>2000</code> =
     * Certified Refurbished</li><li><code>2500</code> = Seller
     * Refurbished</li><li><code>3000</code> = Used</li></ul>.
     *
     * @var string[]
     */
    public $listingConditionIds = null;

    /**
     * The maximum price of the listings included in the campaign.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $maxPrice = null;

    /**
     * The minimum price of the listings included in the campaign.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $minPrice = null;
}

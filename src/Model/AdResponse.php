<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields returned in an ad response.
 */
class AdResponse extends AbstractModel
{
    /**
     * A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.
     *
     * @var string
     */
    public $adId = null;

    /**
     * An array of errors associated with the request.
     *
     * @var \Ebay\Sell\Marketing\Model\Error[]
     */
    public $errors = null;

    /**
     * The URI that points to the ad.
     *
     * @var string
     */
    public $href = null;

    /**
     * A unique eBay-assigned ID for a listing that is generated when the listing is
     * created.  <p class="tablenote"><b>Note:</b> This field accepts both listing IDs,
     * as generated by the Inventory API, and an item IDs, as used in the eBay
     * Traditional API set (e.g., the Trading and Finding APIs).</p>.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * An HTTP status code that indicates the response-status of the request. Check
     * this code to see if the ad was successful created.
     *
     * @var int
     */
    public $statusCode = null;
}

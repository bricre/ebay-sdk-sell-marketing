<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields for a paginated result set of promotions. The
 * response consists of 0 or more sequenced pages that are returned from the
 * complete <i>result set</i>, where each page consists of 0 or more items.
 */
class ItemsPagedCollection extends AbstractModel
{
    /**
     * The URI of the current page of results from the result set.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of items returned on a single page from the result set. This value
     * can be set in the request with the <b>limit</b> query parameter.
     *
     * @var int
     */
    public $limit = null;

    /**
     * An array of the listings associated with a promotion.
     *
     * @var \Ebay\Sell\Marketing\Model\ListingDetail[]
     */
    public $listings = null;

    /**
     * The URI for the following page of results. This value is returned only if there
     * is an additional page of results to display from the result set. <br><br><b>Max
     * length</b>: 2048.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of results skipped in the result set before listing the first
     * returned result. This value can be set in the request with the <b>offset</b>
     * query parameter. <p class="tablenote"><strong>Note: </strong>The items in a
     * paginated result set use a zero-based list where the first item in the list has
     * an offset of <code>0</code>.</p>.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI for the preceding page of results. This value is returned only if there
     * is a previous page of results to display from the result set. <br><br><b>Max
     * length</b>: 2048.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of items retrieved in the result set.  <br><br>If no items are
     * found, this field is returned with a value of <code>0</code>.
     *
     * @var int
     */
    public $total = null;

    /**
     * A list of warnings that were generated by the request. Warning do not stop
     * processing, but should be checked to ensure that the response contains the
     * correct information.
     *
     * @var \Ebay\Sell\Marketing\Model\Error[]
     */
    public $warnings = null;
}

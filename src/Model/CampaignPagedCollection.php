<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields that paginate the campaigns returned by the
 * request. The entire <i>result set</i> consists of 0 or more sequenced
 * <i>response pages</i>, where each page consists of 0 or more items from the
 * complete result set.
 */
class CampaignPagedCollection extends AbstractModel
{
    /**
     * A list of campaigns contained on this page from the paginated response.
     *
     * @var \Ebay\Sell\Marketing\Model\Campaign[]
     */
    public $campaigns = null;

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
}

<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the status of a markdown promotion.
 */
class ItemMarkdownStatus extends AbstractModel
{
    /**
     * Indicates the state assigned to the markdown promotion using one of the
     * <b>status</b> values. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $listingMarkdownStatus = null;

    /**
     * Identifies the date the last time the state of the promotion changed. Both both
     * markdown and markup events can trigger a status change.
     *
     * @var string
     */
    public $statusChangedDate = null;

    /**
     * An eBay-assigned text string that describes the status of the promotion.
     *
     * @var string
     */
    public $statusMessage = null;
}

<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the response fields used by the
 * <b>bulkCreateAdsByInventoryReference</b> method.
 */
class BulkCreateAdsByInventoryReferenceResponse extends AbstractModel
{
    /**
     * A list of inventory reference IDs, and their bid percentages, that the call
     * processed.
     *
     * @var \Ebay\Sell\Marketing\Model\CreateAdsByInventoryReferenceResponse[]
     */
    public $responses = null;
}

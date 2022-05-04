<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the request fields that
 * <b>bulkDeleteAdsByInventoryReference</b> uses to delete ads in bulk.
 */
class BulkDeleteAdsByInventoryReferenceRequest extends AbstractModel
{
    /**
     * A list of inventory referenceID and inventory reference type pairs that specify
     * the set of ads to remove in bulk.
     *
     * @var \Ebay\Sell\Marketing\Model\DeleteAdsByInventoryReferenceRequest[]
     */
    public $requests = null;
}

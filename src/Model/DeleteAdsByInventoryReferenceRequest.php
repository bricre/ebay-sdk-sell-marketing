<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields needed to delete an ad by its inventory reference
 * ID.  You must always supply both <b>inventory_reference_id</b> and
 * <b>inventory_reference_type</b>.
 */
class DeleteAdsByInventoryReferenceRequest extends AbstractModel
{
    /**
     * An ID that identifies an a single-item listing or multiple-variation listing
     * that is managed with the <a href="/api-docs/sell/inventory/resources/methods"
     * title="Inventory API Reference">Inventory API</a>. <p>The <i>inventory reference
     * ID</i> is a seller-defined value that can be either an <b>SKU</b> for a
     * single-item listing or an <b>inventoryItemGroupKey</b> for a multiple-value
     * listing.</p>.
     *
     * @var string
     */
    public $inventoryReferenceId = null;

    /**
     * Indicates the type of item the <b>inventoryReferenceId</b> references. The item
     * can be either an <code>INVENTORY_ITEM</code> or
     * <code>INVENTORY_ITEM_GROUP</code>. <p>You must always pair an
     * <b>inventoryReferenceId</b> with and <b>inventoryReferenceType</b>.</p> For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;
}

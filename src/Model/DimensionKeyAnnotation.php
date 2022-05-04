<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the annotation values associated with a dimension. Annotations
 * are metadata of the dimension. For example, annotations for a listing ID could
 * be <code>listing_title</code> or <code>listing_quantity_sold</code>.
 */
class DimensionKeyAnnotation extends AbstractModel
{
    /**
     * An annotation key associated with the dimension.
     *
     * @var string
     */
    public $annotationKey = null;

    /**
     * The data type of the annotation key value. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dataType = null;
}

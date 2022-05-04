<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the annotation and dimension key used by the report. For
 * information on how to set these values, see <a
 * href="/api-docs/sell/static/marketing/pl-reports.html">Reading Promoted Listings
 * reports</a>.
 */
class Dimension extends AbstractModel
{
    /**
     * A list of annotations associated with the dimension of the report.
     *
     * @var string[]
     */
    public $annotationKeys = null;

    /**
     * The name of the dimension on which the report is based. <p>A dimension is an
     * attribute to which the report data applies.</p>.
     *
     * @var string
     */
    public $dimensionKey = null;
}

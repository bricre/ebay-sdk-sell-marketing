<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A name/value pair that provides parameter details regarding a warning or error
 * condition.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * Name of the entity that threw the error.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value that was set for the element specified in the <b>name</b> field.
     *
     * @var string
     */
    public $value = null;
}

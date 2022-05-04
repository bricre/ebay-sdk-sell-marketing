<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines how the Promoted Listing fee is calculated when
 * <b>fundingModel</b> is set to <code>COST_PER_SALE</code>.
 */
class FundingStrategy extends AbstractModel
{
    /**
     * The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets
     * the level that eBay increases the visibility in search results for the
     * associated listing. The higher the <b>bidPercentage</b> value, the more eBay
     * promotes the listing.  <br><br>The value specified here is also used to
     * calculate the Promoted Listings fee. This percentage value is multiplied by the
     * final sales price to determine the fee. <br><br>The Promoted Listings fee is
     * determined at the time the transaction completes and the seller is assessed the
     * fee only when an item sells through a Promoted Listings ad campaign.
     * <br><br><b>bidPercentage</b> is a single precision value that is guided by the
     * following rules: <ul><li>These values are
     * <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>1</code>,
     * &nbsp;&nbsp;&nbsp;<code>1.0</code>, &nbsp;&nbsp;&nbsp;<code>4.1</code>,<br />
     * &nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>
     *  <li>These values are <b>not valid</b>:<br />
     * &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>,
     * &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so
     * on.</li></ul>  <p>If a bid percentage is not provided for an ad, eBay uses the
     * default bid percentage of the associated campaign.</p><b>Minimum value:</b> 1.0
     * <br><b>Maximum value:</b> 100.0.
     *
     * @var string
     */
    public $bidPercentage = null;

    /**
     * Indicates the model that eBay uses to calculate the Promoted Listings fee.
     * Currently, only <code>COST_PER_SALE</code> is supported. <br><br><b>Default:
     * </b> COST_PER_SALE For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:FundingModelEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $fundingModel = null;
}

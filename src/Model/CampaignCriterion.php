<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields for specifying the criterion (selection rule)
 * settings of an ad campaign.
 */
class CampaignCriterion extends AbstractModel
{
    /**
     * A field used to indicate whether listings shall be automatically added to, or
     * removed from, a Promoted Listings campaign based on the rules that have been
     * configured for the campaign.<br /><br />If set to <code>true</code>, eBay adds
     * all listings matching the campaign criterion to the campaign, including any new
     * listings created from the items in a seller's inventory.<br /><br
     * /><b>Default:</b> <code>false</code>.
     *
     * @var bool
     */
    public $autoSelectFutureInventory = null;

    /**
     * An enumerated value that defines the criterion (selection rule) types.
     * Currently, the only criterion type supported is
     * <code>INVENTORY_PARTITION</code>, and you must specify this value if you manage
     * your items with the Inventory API and you want to include items based on their
     * inventory reference IDs.  <br><br>Leave this field blank if you want to create
     * campaign ads based on listing IDs. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:CriterionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $criterionType = null;

    /**
     * A set of rules that selects the listings to include in the campaign.  <p>The
     * following rules apply to the selection rules:</p> <ul><li>Each set of selection
     * rules are <i>ORed</i> with each other. </li>  <li>Individual rules within a
     * selection rule set are <i>ANDed</i> with each other. If a rule has a list of
     * values (such a list of category IDs), the item need match only one of the values
     * of the rule in order to be included in the campaign.</li>  <p><b>Note: </b>If an
     * item matches multiple sets of rules or multiple rules within a selection rule
     * set, the item is considered only once.</p></ul><b>Maximum number of rules: </b>
     * 10.
     *
     * @var \Ebay\Sell\Marketing\Model\SelectionRule[]
     */
    public $selectionRules = null;
}

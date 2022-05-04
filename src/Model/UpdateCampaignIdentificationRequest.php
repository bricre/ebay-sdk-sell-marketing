<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type specifies the updated name, and start and end dates for an
 * update-campaign request.
 */
class UpdateCampaignIdentificationRequest extends AbstractModel
{
    /**
     * The new seller-defined name for the campaign. This value must be unique for the
     * seller. <p>If you don't want to change the name of the campaign, specify the
     * current campaign name in this field.<p>You can use any alphanumeric characters
     * in the name, except the less than (&lt;) or greater than (&gt;)
     * characters.</p><b>Max length: </b>80 characters.
     *
     * @var string
     */
    public $campaignName = null;

    /**
     * The new date and time the campaign ends, in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is blank (code>null</code>),
     * it indicates a campaign that has no end date. For display purposes, convert this
     * time into the local time of the seller.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The new start date for the campaign, in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). <p>If the campaign is currently
     * <code>RUNNING</code> or <code>PAUSED</code>, enter the current date in this
     * field because you cannot submit past or future date for these campaigns.</p>
     * <p>On the date specified, the service derives the keywords for each listing in
     * the campaign, creates an ad for each listing, and associates each new ad with
     * the campaign. The campaign starts after this process is completed. The amount of
     * time it takes the service to start the campaign depends on the number of
     * listings in the campaign.</p>  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve the <b>campaign_id</b> and the campaign status
     * (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for
     * all the seller's campaigns.</p>.
     *
     * @var string
     */
    public $startDate = null;
}

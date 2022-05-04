<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields that describe an ad campaign.
 */
class Campaign extends AbstractModel
{
    /**
     * The selection rules (criterion) used to select the listings for a campaign.
     *
     * @var \Ebay\Sell\Marketing\Model\CampaignCriterion
     */
    public $campaignCriterion = null;

    /**
     * A unique eBay-assigned ID for a campaign. This ID is generated when a campaign
     * is created.
     *
     * @var string
     */
    public $campaignId = null;

    /**
     * A seller-defined name for the campaign. This value must be unique for the
     * seller. <p>You can use any alphanumeric characters in the name, except the less
     * than (&lt;) or greater than (&gt;) characters.</p><b>Max length: </b>80
     * characters.
     *
     * @var string
     */
    public $campaignName = null;

    /**
     * Indicates the status of the campaign, such as <code>RUNNING</code>,
     * <code>PAUSED</code>, and <code>ENDED</code>. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:CampaignStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $campaignStatus = null;

    /**
     * The date and time the campaign ends, in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is blank (code>null</code>),
     * it indicates a campaign that has no end date. For display purposes, convert this
     * time into the local time of the seller.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * This field specifies the funding model that defines how the <i>Promoted Listing
     * fee</i> is calculated. The seller is assessed the fee if an item sells via a
     * Promoted Listings action (such as buyer clicking on a Promoted Listings ad).
     * <p>currently, the only funding model supported is <code>COST_PER_SALE</code>.
     *
     * @var \Ebay\Sell\Marketing\Model\FundingStrategy
     */
    public $fundingStrategy = null;

    /**
     * The ID of the eBay marketplace where the campaign is hosted. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The date and time the campaign starts, in UTC format
     * (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time
     * into the local time of the seller.  <p>On the date specified, the service
     * derives the keywords for each listing in the campaign, creates an ad for each
     * listing, and associates each new ad with the campaign. The campaign starts after
     * this process is completed. The amount of time it takes the service to start the
     * campaign depends on the number of listings in the campaign. Call
     * <b>getCampaign</b> to check the status of the campaign.</p>.
     *
     * @var string
     */
    public $startDate = null;
}

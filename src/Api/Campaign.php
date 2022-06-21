<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\Campaign as CampaignModel;
use Ebay\Sell\Marketing\Model\CampaignPagedCollection;
use Ebay\Sell\Marketing\Model\Campaigns;
use Ebay\Sell\Marketing\Model\CloneCampaignRequest;
use Ebay\Sell\Marketing\Model\CreateCampaignRequest;
use Ebay\Sell\Marketing\Model\UpdateCampaignIdentificationRequest;
use OpenAPI\Runtime\UnexpectedResponse;

class Campaign extends AbstractAPI
{
    /**
     * This method clones (makes a copy of) the specified campaign. <p>To clone a
     * campaign, supply the <b>campaign_id</b> as a path parameter in your call, there
     * is no call payload.</p>  <p>The ID of the newly-cloned campaign is returned in
     * the <b>Location</b> response header.  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve a seller's current campaign IDs</p>  <p><b>Requirement: </b>In order
     * to clone a campaign, the <b>campaignStatus</b> must be <code>ENDED</code> and
     * the campaign must define a set of selection rules (it must be a rules-based
     * campaign).</p>.
     *
     * @param string               $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                                          generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                                          href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     * @param CloneCampaignRequest $Model       this type defines the fields for a clone
     *                                          campaign request
     *
     * @return object|UnexpectedResponse
     */
    public function clone(string $campaign_id, CloneCampaignRequest $Model)
    {
        return $this->request(
        'cloneCampaign',
        'POST',
        "ad_campaign/$campaign_id/clone",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method retrieves the details for all the campaigns of a seller, including
     * the campaign's the selection rules. <p>Note that this method does not return the
     * listing IDs or inventory reference IDs of the items included in the ad campaign.
     * Call <a href="/api-docs/sell/marketing/resources/ad/methods/getAds">getAds</a>
     * to retrieve these IDs.</p>  <p>You can filter the result set by a campaign name,
     * end date range, start date range, or campaign status. You can also paginate the
     * records returned from the result set using the <b>limit</b> query parameter, and
     * control which records to return using the  <b>offset</b> parameter.</p>.
     *
     * @param array $queries options:
     *                       'campaign_name'	string	Specifies the campaign name. The results are filtered to
     *                       include only the campaign by the specified name.<br /><br /><b>Note: </b>The
     *                       results might be null if other filters exclude the campaign with this name. <br
     *                       /><br /><b>Maximum: </b> 1 campaign name
     *                       'campaign_status'	string	Specifies the campaign status. The results are filtered
     *                       to include only campaigns that are in the specified states. <br /><br /><b>Note:
     *                       </b>The results might not include all the campaigns with this status if other
     *                       filters exclude them. <br /><br /><b>Valid values:</b> See <a
     *                       href="/api-docs/sell/marketing/types/pls:CampaignStatusEnum">CampaignStatusEnum</a>
     *                       <br /><br /><b>Maximum: </b> 1 status
     *                       'end_date_range'	string	Specifies the range of a campaign's end date. The
     *                       results are filtered to include only campaigns with an end date that is within
     *                       specified range. <br><br><b>Valid format (UTC): </b>
     *                       <br><br>&nbsp;&nbsp;&nbsp;&nbsp;<code>yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ&nbsp;&nbsp;</code>
     *                       (campaign ends within this range)
     *                       <br>&nbsp;&nbsp;&nbsp;&nbsp;<code>yyyy-MM-ddThh:mm:ssZ..&nbsp;&nbsp;</code>(campaign
     *                       ends on or after this
     *                       date)<br>&nbsp;&nbsp;&nbsp;&nbsp;<code>..yyyy-MM-ddThh:mm:ssZ&nbsp;&nbsp;</code>
     *                       (campaign ends on or before this
     *                       date)<br>&nbsp;&nbsp;&nbsp;&nbsp;<code>2016-09-08T00:00:00Z..2016-09-09T00:00:00Z&nbsp;&nbsp;</code>
     *                       (campaign ends on September 8, 2016) <br /><br /><b>Note: </b>The results might
     *                       not include all the campaigns ending on this date if other filters exclude them.
     *                       'limit'	string	<p>Specifies the maximum number of campaigns to return on a page
     *                       in the paginated response.</p>  <b>Default: </b>10 <br><b>Maximum: </b> 500
     *                       'offset'	string	Specifies the number of campaigns to skip in the result set
     *                       before returning the first report in the paginated response.  <p>Combine
     *                       <b>offset</b> with the <b>limit</b> query parameter to control the items
     *                       returned in the response. For example, if you supply an <b>offset</b> of
     *                       <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the
     *                       response contains the first 10 items from the complete list of items retrieved
     *                       by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is
     *                       <code>20</code>, the first page of the response contains items 11-30 from the
     *                       complete result set.</p> <p><b>Default:</b> 0</p>
     *                       'start_date_range'	string	Specifies the range of a campaign's start date in
     *                       which to filter the results. The results are filtered to include only campaigns
     *                       with a start date that is equal to this date or is within specified
     *                       range.<br><br><b>Valid format (UTC): </b>
     *                       <br><br>&nbsp;&nbsp;&nbsp;&nbsp;<code>yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ&nbsp;&nbsp;</code>
     *                       (starts within this
     *                       range)<br>&nbsp;&nbsp;&nbsp;&nbsp;<code>yyyy-MM-ddThh:mm:ssZ..&nbsp;&nbsp;</code>(campaign
     *                       starts on or after this
     *                       date)<br>&nbsp;&nbsp;&nbsp;&nbsp;<code>..yyyy-MM-ddThh:mm:ssZ&nbsp;&nbsp;</code>
     *                       (campaign starts on or before this
     *                       date)<br>&nbsp;&nbsp;&nbsp;&nbsp;<code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z&nbsp;&nbsp;</code>
     *                       (campaign starts on September 8, 2016)   <br /><br /><b>Note: </b>The results
     *                       might not include all the campaigns with this start date if other filters
     *                       exclude them.
     *
     * @return CampaignPagedCollection|UnexpectedResponse
     */
    public function gets(array $queries = [])
    {
        return $this->request(
        'getCampaigns',
        'GET',
        'ad_campaign',
        null,
        $queries,
        []
        );
    }

    /**
     * This method creates a Promoted Listings ad campaign. <p>A Promoted Listings
     * <i>campaign</i> is the structure into which you place the ads for the listings
     * you want to promote.</p>  <p>Identify the items you want to place into a
     * campaign either by "key" or by "rule" as follows:</p> <ul><li><b>Rules-based
     * campaigns</b> &ndash; A rules-based campaign adds items to the campaign
     * according to the <i>criteria</i> you specify in your call to
     * <b>createCampaign</b>. You can set the <b>autoSelectFutureInventory</b> request
     * field to <code>true</code> so that after your campaign launches, eBay will
     * regularly assess your new, revised, or newly-eligible listings to determine
     * whether any should be added or removed from your campaign according to the rules
     * you set. If there are, eBay will add or remove them automatically on a daily
     * basis.</li> <li><b>Key-based campaigns</b> &ndash; Add items to an existing
     * campaign using either listing ID values or Inventory Reference values:
     * <ul><li>Add <b>listingId</b> values to an existing campaign by calling either
     * <b>createAdByListingID</b> or <b>bulkCreateAdsByListingId</b>.</li>  <li>Add
     * <b>inventoryReference</b> values to an existing campaign by calling either
     * <b>createAdByInventoryReference</b> or
     * <b>bulkCreateAdsByInventoryReference</b>.</li></ul></li></ul>  <p
     * class="tablenote"><b>Note:</b> No matter how you add items to a Promoted
     * Listings campaign, each campaign can contain ads for a maximum of 50,000 items.
     * <br><br>If a rules-based campaign identifies more than 50,000 items, ads are
     * created for only the first 50,000 items identified by the specified criteria,
     * and ads are not created for the remaining items.</p>  <p><b>Creating a
     * campaign</b></p> <p>To create a basic campaign, supply:</p>  <ul><li>The
     * user-defined campaign name</li> <li>The start date (and optionally the end date)
     * of the campaign</li> <li>The eBay marketplace on which the campaign is
     * hosted</li> <li>Details on the campaign funding model</li></ul>  <p>The campaign
     * funding model specifies how the Promoted Listings fee is calculated. Currently,
     * the only supported funding model is <code>COST_PER_SALE</code>. For complete
     * information on how the fee is calculated and when it applies, see <a
     * href="/api-docs/sell/static/marketing/promoted-listings.html#pl-fees">Promoted
     * Listings fees</a>.</p>   <p>If you populate the <b>campaignCriterion</b> object
     * in your <b>createCampaign</b> request, campaign "ads" are created by "rule" for
     * the listings that meet the criteria you specify, and these ads are associated
     * with the newly created campaign.</p>  <p>For details on creating Promoted
     * Listings campaigns and how to select the items to be included in your campaigns,
     * see <a href="/api-docs/sell/static/marketing/pl-create-campaign.html">Creating a
     * Promoted Listings campaign</a>.</p>  <p>For recommendations on which listings
     * are prime for a Promoted Listings ad campaign and to get guidance on how to set
     * the <b>bidPercentage</b> field, see <a
     * href="/api-docs/sell/static/marketing/pl-reco-api.html">Using the Recommendation
     * API to help configure campaigns</a>.</p>  <p class="tablenote"><b>Tip:</b> See
     * <a href="/api-docs/sell/marketing/static/overview.html#PL-requirements">Promoted
     * Listings requirements and restrictions</a> for the details on the marketplaces
     * that support Promoted Listings via the API.</p>.
     *
     * @param CreateCampaignRequest $Model this type defines the fields for the create
     *                                     campaign request
     *
     * @return object|UnexpectedResponse
     */
    public function create(CreateCampaignRequest $Model)
    {
        return $this->request(
        'createCampaign',
        'POST',
        'ad_campaign',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method retrieves the details of a single campaign, as specified with the
     * <b>campaign_id</b> query parameter.  <p>This method returns all the details of a
     * campaign (including the campaign's the selection rules), except the for the
     * listing IDs or inventory reference IDs included in the campaign. These IDs are
     * returned by <a
     * href="/api-docs/sell/marketing/resources/ad/methods/getAds">getAds</a>.</p>
     * <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve a list of the seller's campaign IDs.</p>.
     *
     * @param string $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                            generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                            href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     *
     * @return CampaignModel|UnexpectedResponse
     */
    public function get(string $campaign_id)
    {
        return $this->request(
        'getCampaign',
        'GET',
        "ad_campaign/$campaign_id",
        null,
        [],
        []
        );
    }

    /**
     * This method deletes the campaign specified by the <code>campaign_id</code> query
     * parameter.  <p class="tablenote"><b>Note: </b> You can delete only campaigns
     * that have ended.</p>  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve the <b>campaign_id</b> and the campaign status
     * (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for
     * all the seller's campaigns.</p>.
     *
     * @param string $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                            generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                            href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     *
     * @return UnexpectedResponse
     */
    public function delete(string $campaign_id): UnexpectedResponse
    {
        return $this->request(
        'deleteCampaign',
        'DELETE',
        "ad_campaign/$campaign_id",
        null,
        [],
        []
        );
    }

    /**
     * This method ends an active (<code>RUNNINGM</code>) or paused campaign. Specify
     * the campaign you want to end by supplying its  campaign ID in a query parameter.
     *  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve the <b>campaign_id</b> and the campaign status
     * (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for
     * all the seller's campaigns.</p>.
     *
     * @param string $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                            generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                            href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     *
     * @return UnexpectedResponse
     */
    public function end(string $campaign_id): UnexpectedResponse
    {
        return $this->request(
        'endCampaign',
        'POST',
        "ad_campaign/$campaign_id/end",
        null,
        [],
        []
        );
    }

    /**
     * This method retrieves the campaigns containing the listing that is specified
     * using either a listing ID, or an inventory reference ID and inventory reference
     * type pair.  <p>eBay <i>listing IDs</i> are generated by either the <a
     * href="/Devzone/XML/docs/Reference/eBay/index.html" title="Trading API
     * Reference">Trading API</a> or the <a
     * href="/api-docs/sell/inventory/resources/methods">Inventory API</a> when you
     * create a listing.</p>  <p> An <i>inventory reference ID</i> can be either a
     * seller-defined <b>SKU</b> or <b>inventoryItemGroupKey</b>, as specified in the
     * Inventory API.</p>  <p class="tablenote"><b>Note:</b> This request accepts
     * either a <b>listing_id</b>, <i>or</i> an <b>inventory_reference_id</b> and
     * <b>inventory_reference_type</b> pair, as used in the Inventory API.</p>.
     *
     * @param array $queries options:
     *                       'inventory_reference_id'	string	The seller's inventory reference ID of the
     *                       listing to be used to find the campaign in which it is associated. You must
     *                       always pass in both  <b>inventory_reference_id</b> and
     *                       <b>inventory_reference_type</b>.
     *                       'inventory_reference_type'	string	The type of the seller's inventory reference
     *                       ID, which is a listing or group of items. You must always pass in both
     *                       <b>inventory_reference_id</b> and <b>inventory_reference_type</b>.
     *                       'listing_id'	string	Identifier of the eBay listing associated with the ad.
     *
     * @return Campaigns|UnexpectedResponse
     */
    public function findByAdReference(array $queries = [])
    {
        return $this->request(
        'findCampaignByAdReference',
        'GET',
        'ad_campaign/find_campaign_by_ad_reference',
        null,
        $queries,
        []
        );
    }

    /**
     * This method retrieves the details of a single campaign, as specified with the
     * <b>campaign_name</b> query parameter. Note that the campaign name you specify
     * must be an exact, case-sensitive match of the name of the campaign you want to
     * retrieve.</p>  <p>This method returns all the details of a campaign (including
     * the campaign's the selection rules), except the for the listing IDs or inventory
     * reference IDs included in the campaign. These IDs are returned by <a
     * href="/api-docs/sell/marketing/resources/ad/methods/getAds">getAds</a>.</p>
     * <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve a list of the seller's campaign names.</p>.
     *
     * @param array $queries options:
     *                       'campaign_name'	string	Name of the campaign
     *
     * @return CampaignModel|UnexpectedResponse
     */
    public function getByName(array $queries = [])
    {
        return $this->request(
        'getCampaignByName',
        'GET',
        'ad_campaign/get_campaign_by_name',
        null,
        $queries,
        []
        );
    }

    /**
     * This method pauses an active (RUNNING) campaign.  <p>You can restarted by
     * calling <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/resumeCampaign">resumeCampaign</a>,
     * as long as the campaign's end date is in the future.</p>  <p><b>Note: </b> The
     * listings associated with a paused campaign cannot be added into another
     * campaign.</p>  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve the <b>campaign_id</b> and the campaign status
     * (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for
     * all the seller's campaigns.</p>.
     *
     * @param string $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                            generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                            href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     *
     * @return UnexpectedResponse
     */
    public function pause(string $campaign_id): UnexpectedResponse
    {
        return $this->request(
        'pauseCampaign',
        'POST',
        "ad_campaign/$campaign_id/pause",
        null,
        [],
        []
        );
    }

    /**
     * This method resumes a paused campaign, as long as it's end date is in the
     * future. Supply the <b>campaign_id</b> for the campaign you want to restart as a
     * query parameter in the request.  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve the <b>campaign_id</b> and the campaign status
     * (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for
     * all the seller's campaigns.</p>.
     *
     * @param string $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                            generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                            href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     *
     * @return UnexpectedResponse
     */
    public function resume(string $campaign_id): UnexpectedResponse
    {
        return $this->request(
        'resumeCampaign',
        'POST',
        "ad_campaign/$campaign_id/resume",
        null,
        [],
        []
        );
    }

    /**
     * This method replaces the name and the start and end dates of a campaign.
     * <p>Specify the <b>campaign_id</b> you want to update as a URI parameter, and
     * configure the <b>campaignName</b> and <b>startDate</b> in the request payload.
     * <p>If you want to change only the end date of the campaign, specify the current
     * campaign name and set <b>startDate</b> to the current date (you cannot use a
     * start date that is in the past), and set the <b>endDate</b> as desired. Note
     * that if you do not set a new end date in this call, any current <b>endDate</b>
     * value will be set to <code>null</code>. To preserve the currently-set end date,
     * you must specify the value again in your request.</p>  <p>Call <a
     * href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>
     * to retrieve a seller's campaign details, including the campaign ID, campaign
     * name, and the start and end dates of the campaign.
     *
     * @param string                              $campaign_id A unique eBay-assigned ID for an ad campaign that's
     *                                                         generated when a campaign is created. Get a seller's campaign IDs by calling <a
     *                                                         href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a>.
     * @param UpdateCampaignIdentificationRequest $Model       this type defines the fields
     *                                                         to updated the campaign name and start and end dates
     *
     * @return UnexpectedResponse
     */
    public function updateIdentification(string $campaign_id, UpdateCampaignIdentificationRequest $Model): UnexpectedResponse
    {
        return $this->request(
        'updateCampaignIdentification',
        'POST',
        "ad_campaign/$campaign_id/update_campaign_identification",
        $Model->getArrayCopy(),
        [],
        []
        );
    }
}

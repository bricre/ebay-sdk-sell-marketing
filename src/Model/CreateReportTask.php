<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the rules that govern the generation of a report task and the
 * criteria that's used to create the report. The report-generation rules include
 * the starting and ending dates for the report. Report-task criteria includes the
 * report dimensions, metrics, listings covered in the report, and so on. For
 * information on the required and optional fields for each report type, see <a
 * href="/api-docs/sell/static/marketing/pl-reports.html">Reading Promoted Listings
 * reports</a>.
 */
class CreateReportTask extends AbstractModel
{
    /**
     * A list of campaign IDs to be included in the report task. Call
     * <b>getCampaigns</b> to get a list of the current campaign IDs for a
     * seller.<br><br><b>Maximum: </b>10  <br><br><i>Required if </i> <b>reportType</b>
     * is set to <code>CAMPAIGN_PERFORMANCE_REPORT</code> or
     * <code>CAMPAIGN_PERFORMANCE_SUMMARY_REPORT</code>.
     *
     * @var string[]
     */
    public $campaignIds = null;

    /**
     * The date defining the start of the timespan covered by the report.<br /><br
     * />Format the timestamp as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based
     * on the 24-hour Coordinated Universal Time (UTC) clock with local offset.<br
     * /><br /><span class="tablenote"><b>Note:</b> The date specified cannot be a
     * future date.</span><br /><br /><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b>
     * <code>2021-03-15T13:00:00-07:00</code>.
     *
     * @var string
     */
    public $dateFrom = null;

    /**
     * The date defining the end of the timespan covered by the report.<br /><br />As
     * with the <b>dateFrom</b> field, format the timestamp as an <a
     * href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> string.<br /><br
     * /><span class="tablenote"><b>Note:</b> The date specified cannot be a future
     * date. Additionally, the time specified must be a later time than that specified
     * in the <b>dateFrom</b> field.</span><br /><br /><b>Format:</b>
     * <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b>
     * <code>2021-03-17T13:00:00-07:00</code>.
     *
     * @var string
     */
    public $dateTo = null;

    /**
     * The list of the dimensions applied to the report.  <p>A dimension is an
     * attribute to which the report data applies. For example, if you set
     * <b>dimensionKey</b> to <code>campaign_id</code> in a Campaign Performance
     * Report, the data will apply to the entire ad campaign. For information on the
     * dimensions and how to specify them, see <a
     * href="/api-docs/sell/static/marketing/pl-reports.html">Reading Promoted Listings
     * reports</a>.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\Dimension[]
     */
    public $dimensions = null;

    /**
     * You can use this field to supply an array of items to include in the report if
     * you manage your inventory with the <a
     * href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.
     * <br><br>This field is mutually exclusive with the <b>listingIds</b> field; if
     * you populate this field, <i>do not</i> populate the <b>listingIds</b> field.
     * <br><br>An inventory reference identifies an item in your inventory using a pair
     * of values, where the <b>inventoryReferenceId</b> can be either a seller-defined
     * <b>SKU</b> value or an <b>inventoryItemGroupKey</b>, where an
     * <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a
     * multiple-variation listing). <br><br>Couple the <b>inventoryReferenceId</b> with
     * an <b>inventoryReferenceType</b> identifier to fully identify an item in your
     * inventory.  <br><br><b>Maximum: </b> 500 items <br><br><i>Required if </i> you
     * do not supply an array of <b>listingId</b> values or if you set
     * <b>reportType</b> to <code>INVENTORY_PERFORMANCE_REPORT</code>.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryReference[]
     */
    public $inventoryReferences = null;

    /**
     * Use this field to supply a array of the listing ID you want to include in the
     * report.  <br><br>This field is mutually exclusive with the
     * <b>inventoryReferences</b> field; if you populate this field, <i>do not</i>
     * populate the <b>inventoryReferences</b> field.  <br><br> A listing ID is the
     * eBay listing identifier that's generated when the listing is created.  <p
     * class="tablenote"><b>Note:</b> This field accepts <b>listingId</b> values
     * generated with both the Inventory API and the eBay Traditional APIs, such as the
     * Trading and Finding APIs.</p> <p><b>Maximum:</b> 500 listings</p> <p><i>Required
     * if </i>  you do not supply an array of <b>inventoryReferences</b> values or if
     * you set <b>reportType</b> to <code>LISTING_PERFORMANCE_REPORT</code>.</p>.
     *
     * @var string[]
     */
    public $listingIds = null;

    /**
     * The ID for the eBay marketplace on which the report is based.</p> <p><b>Maximum:
     * </b> 1</p>  <p><i>Required if </i> <b>reportType</b> is set to
     * <code>ACCOUNT_PERFORMANCE_REPORT</code> or
     * <code>INVENTORY_PERFORMANCE_REPORT</code>.</p> For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The list of metrics to be included in the report.  <p>Metrics are the
     * quantitative measurements compiled into the report and the data returned is
     * based on the specified dimension of the report. For example, if the dimension is
     * <code>campaign</code>, the metrics for <b>number of sales</b> would be the
     * number of sales in the campaign. However, if the dimension is
     * <code>listing</code>, the <b>number of sales</b> represents the number of items
     * sold in that listing.</p>  <p>For information on metric keys and how to set
     * them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Reading
     * Promoted Listings reports</a>.</p><b>Minimum: </b> 1.
     *
     * @var string[]
     */
    public $metricKeys = null;

    /**
     * The file format of the report. Currently, the only supported format is
     * <code>TSV_GZIP</code>, which is a gzip file with tab separated values. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportFormat = null;

    /**
     * The type of report to be generated, such as
     * <code>ACCOUNT_PERFORMANCE_REPORT</code>,
     * <code>CAMPAIGN_PERFORMANCE_REPORT</code>, and so on.  <p><b>Maximum: </b> 1</p>
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportType = null;
}

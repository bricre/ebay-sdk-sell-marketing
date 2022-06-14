<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields in a report task.
 */
class ReportTask extends AbstractModel
{
    /**
     * A list of IDs for the campaigns that are included in the report. A campaign ID
     * is a unique eBay-assigned identifier of the campaign that's generated when the
     * campaign is created.<br /><br />Call <b>getCampaigns</b> to return the current
     * campaign IDs for a seller.
     *
     * @var string[]
     */
    public $campaignIds = null;

    /**
     * The date defining the start of the timespan covered by the report, formatted as
     * an <a href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> timestamp.
     *
     * @var string
     */
    public $dateFrom = null;

    /**
     * The date defining the end of the timespan covered by the report, formatted as an
     * <a href="https://www.iso.org/iso-8601-date-and-time-format.html"
     * title="https://www.iso.org" target="_blank">ISO 8601</a> timestamp.
     *
     * @var string
     */
    public $dateTo = null;

    /**
     * A list containing the dimension in the report.
     *
     * @var \Ebay\Sell\Marketing\Model\Dimension[]
     */
    public $dimensions = null;

    /**
     * If supplied in the request, this field returns a list of the seller's inventory
     * reference IDs included in the report.  <p>Each item is referenced by a pair of
     * <b>inventoryRefernceID</b> and <b>inventoryReferenceType</b> values, where an
     * inventory reference ID can be either a seller-defined <b>SKU</b> value or an
     * <b>inventoryItemGroupKey</b>. An <b>inventoryItemGroupKey</b> is seller-defined
     * ID for an inventory item group (a multiple-variation listing), and is created
     * and used by the <a href="/api-docs/sell/inventory/resources/methods">Inventory
     * API</a>.</p>.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryReference[]
     */
    public $inventoryReferences = null;

    /**
     * If supplied in the request, this field returns a list of the listing IDs
     * included in the report. A listing ID is an eBay-assigned ID that's generated
     * when a listing is created.
     *
     * @var string[]
     */
    public $listingIds = null;

    /**
     * The ID of the eBay marketplace used by the report task. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * A list of metrics for the report task.
     *
     * @var string[]
     */
    public $metricKeys = null;

    /**
     * The date after which the report is no longer be available. Reports are available
     * for 30 days and you cannot download a report after it has expired.
     * <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ.
     *
     * @var string
     */
    public $reportExpirationDate = null;

    /**
     * Indicates the format of the report. Currently, only <code>TSV_GZIP</code> is
     * supported. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportFormat = null;

    /**
     * The URL of the generated report, which can be used to download the report once
     * it has been generated.
     *
     * @var string
     */
    public $reportHref = null;

    /**
     * A unique eBay-assigned ID for the report.
     *
     * @var string
     */
    public $reportId = null;

    /**
     * An eBay-assigned name for the report that's created by the
     * <b>createReportTask</b> call. This name is unique for the seller.
     *
     * @var string
     */
    public $reportName = null;

    /**
     * The date the report task completed the report generation.  <br><br><b>Format
     * (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ.
     *
     * @var string
     */
    public $reportTaskCompletionDate = null;

    /**
     * The date the report task was created.  <br><br><b>Format (UTC): </b>
     * yyyy-MM-ddThh:mm:ss.sssZ.
     *
     * @var string
     */
    public $reportTaskCreationDate = null;

    /**
     * The date the report task is expected to complete the report generation.
     * <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ.
     *
     * @var string
     */
    public $reportTaskExpectedCompletionDate = null;

    /**
     * The unique eBay-assigned ID of the report task. This value is generated when the
     * report task is created with a call to <b>createReportTask</b>.
     *
     * @var string
     */
    public $reportTaskId = null;

    /**
     * Indicates the current state of the report task. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:TaskStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportTaskStatus = null;

    /**
     * A status message with additional information about the report task.
     *
     * @var string
     */
    public $reportTaskStatusMessage = null;

    /**
     * Indicates type of report associated with the report task. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportType = null;
}

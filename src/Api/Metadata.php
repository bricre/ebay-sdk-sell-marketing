<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\ReportMetadata;
use Ebay\Sell\Marketing\Model\ReportMetadatas;
use OpenAPI\Runtime\UnexpectedResponse;

class Metadata extends AbstractAPI
{
    /**
     * This call retrieves information that details the fields used in each of the
     * Promoted Listings reports. Use the returned information to configure the
     * different types of Promoted Listings reports.  <p> The request for this method
     * does not use a payload or any URI parameters.</p>.
     *
     * @return ReportMetadatas|UnexpectedResponse
     */
    public function getReportMetadata()
    {
        return $this->request(
        'getReportMetadata',
        'GET',
        'ad_report_metadata',
        null,
        [],
        []
        );
    }

    /**
     * This call retrieves metadata that details the fields used by a specific Promoted
     * Listings report type. Use the <b>report_type</b> path parameter to indicate
     * metadata to retrieve.  <p>This method does not use a request payload.</p>.
     *
     * @param string $report_type The name of the report type whose metadata you want
     *                            to get.  <br><br>For details about each report type, see <a
     *                            href="/api-docs/sell/marketing/types/plr:ReportTypeEnum">ReportTypeEnum</a>.
     *                            <br><br><b>Valid values:</b>
     *                            <br>&nbsp;&nbsp;&nbsp;<code>ACCOUNT_PERFORMANCE_REPORT</code>
     *                            <br>&nbsp;&nbsp;&nbsp;<code>CAMPAIGN_PERFORMANCE_REPORT</code>
     *                            <br>&nbsp;&nbsp;&nbsp;<code>CAMPAIGN_PERFORMANCE_SUMMARY_REPORT</code>
     *                            <br>&nbsp;&nbsp;&nbsp;<code>LISTING_PERFORMANCE_REPORT</code>
     *                            <br>&nbsp;&nbsp;&nbsp;<code>INVENTORY_PERFORMANCE_REPORT</code>
     *
     * @return ReportMetadata|UnexpectedResponse
     */
    public function getReportMetadataForReportType(string $report_type)
    {
        return $this->request(
        'getReportMetadataForReportType',
        'GET',
        "ad_report_metadata/$report_type",
        null,
        [],
        []
        );
    }
}

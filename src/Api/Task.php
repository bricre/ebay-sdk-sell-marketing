<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\CreateReportTask;
use Ebay\Sell\Marketing\Model\ReportTask;
use Ebay\Sell\Marketing\Model\ReportTaskPagedCollection;

class Task extends AbstractAPI
{
    /**
     * This method returns information on all the existing report tasks related to a
     * seller. <p>Use the <b>report_task_statuses</b> query parameter to control which
     * reports to return. You can paginate the result set by specifying a <b>limit</b>,
     * which dictates how many report tasks to return on each page of the response. Use
     * the <b>offset</b> parameter to specify how many reports to skip in the result
     * set before returning the first result.</p>.
     *
     * @param array $queries options:
     *                       'limit'	string	Specifies the maximum number of report tasks to return on a page
     *                       in the paginated response.  <p><b>Default:</b> 10<br><b>Maximum:</b> 500</p>
     *                       'offset'	string	Specifies the number of report tasks to skip in the result set
     *                       before returning the first report in the paginated response.  <p>Combine
     *                       <b>offset</b> with the <b>limit</b> query parameter to control the reports
     *                       returned in the response. For example, if you supply an <b>offset</b> of
     *                       <code>0</code> and a <b>limit</b> of <code>10</code>, the response contains the
     *                       first 10 reports from the complete list of report tasks retrieved by the call.
     *                       If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the
     *                       first page of the response contains reports 11-20 from the complete result
     *                       set.</p> <b>Default:</b> 0
     *                       'report_task_statuses'	string	This parameter filters the returned report tasks
     *                       by their status. Supply a comma-separated list of the report statuses you want
     *                       returned. The results are filtered to include only the report statuses you
     *                       specify.  <p><b>Note: </b>The results might not include some report tasks if
     *                       other search conditions exclude them.</p>  <b>Valid values: </b>
     *                       <br>&nbsp;&nbsp;&nbsp;<code>PENDING</code>
     *                       <br>&nbsp;&nbsp;&nbsp;<code>SUCCESS</code>
     *                       <br>&nbsp;&nbsp;&nbsp;<code>FAILED</code>
     *
     * @return ReportTaskPagedCollection
     */
    public function getReportTasks(array $queries = []): ReportTaskPagedCollection
    {
        return $this->request(
        'getReportTasks',
        'GET',
        'ad_report_task',
        null,
        $queries,
        []
        );
    }

    /**
     * This method creates a <i>report task</i>, which generates a Promoted Listings
     * report based on the values specified in the call.  <p>The report is generated
     * based on the criteria you specify, including the report type, the report's
     * dimensions and metrics, the report's start and end dates, the listings to
     * include in the report, and more. <i>Metrics </i>are the quantitative
     * measurements in the report while <i>dimensions</i> specify the attributes of the
     * data included in the reports.</p>  <p>When creating a report task, you can
     * specify the items you want included in the report. The items you specify, using
     * either <b>listingId</b> or <b>inventoryReference</b> values, must be in a
     * Promoted Listings campaign for them to be included in the report.</p>  <p>For
     * details on the required and optional fields for each report type, see <a
     * href="/api-docs/sell/static/marketing/pl-reports.html">Creating Promoted
     * Listings reports</a>.</p>  <p>This call returns the URL to the report task in
     * the <b>Location</b> response header, and the URL includes the report-task
     * ID.</p>  <p>Reports often take time to generate and it's common for this call to
     * return an HTTP status of <code>202</code>, which indicates the report is being
     * generated. Call <a
     * href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks">getReportTasks</a>
     * (or <a
     * href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTask">getReportTask</a>
     * with the report-task ID) to determine the status of a Promoted Listings report.
     * When a report is complete, eBay sets its status to <b>SUCCESS</b> and you can
     * download it using the URL returned in the <b>reportHref</b> field of the
     * <b>getReportTask</b> call. Report files are tab-separated value gzip files with
     * a file extension of <code>.tsv.gz</code>.</p>  <p class="tablenote"><b>Note:</b>
     * This call fails if you don't submit all the required fields for the specified
     * report type. Fields not supported by the specified report type are ignored. Call
     * <a
     * href="/api-docs/sell/marketing/resources/ad_report_metadata/methods/getReportMetadata">getReportMetadata</a>
     * to retrieve a list of the fields you need to configure for each Promoted
     * Listings report type.</p>.
     *
     * @param CreateReportTask $Model the container for the fields that define the
     *                                report task
     *
     * @return mixed
     */
    public function createReportTask(CreateReportTask $Model): mixed
    {
        return $this->request(
        'createReportTask',
        'POST',
        'ad_report_task',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This call returns the details of a specific Promoted Listings report task, as
     * specified by the <b>report_task_id</b> path parameter. <p>The report task
     * includes the report criteria (such as the report dimensions, metrics, and
     * included listing) and the report-generation rules (such as starting and ending
     * dates for the specified report task).</p>  <p>Report-task IDs are generated by
     * eBay when you call <a
     * href="/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask">createReportTask</a>.
     * Get a complete list of a seller's report-task IDs by calling <a
     * href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks">getReportTasks</a>.</p>.
     *
     * @param string $report_task_id a unique eBay-assigned ID for the report task
     *                               that's generated when the report task is created by a call to <a
     *                               href="/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask">createReportTask</a>
     *
     * @return ReportTask
     */
    public function getReportTask(string $report_task_id): ReportTask
    {
        return $this->request(
        'getReportTask',
        'GET',
        "ad_report_task/$report_task_id",
        null,
        [],
        []
        );
    }

    /**
     * This call deletes the report task specified by the <b>report_task_id</b> path
     * parameter. This method also deletes any reports generated by the report task.
     * <p>Report task IDs are generated by eBay when you call <a
     * href="/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask">createReportTask</a>.
     * Get a complete list of a seller's report-task IDs by calling <a
     * href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks">getReportTasks</a>.</p>.
     *
     * @param string $report_task_id a unique eBay-assigned ID for the report task
     *                               that's generated when the report task is created by a call to <a
     *                               href="/api-docs/sell/marketing/resources/ad_report_task/methods/createReportTask">createReportTask</a>
     *
     * @return mixed
     */
    public function deleteReportTask(string $report_task_id): mixed
    {
        return $this->request(
        'deleteReportTask',
        'DELETE',
        "ad_report_task/$report_task_id",
        null,
        [],
        []
        );
    }
}

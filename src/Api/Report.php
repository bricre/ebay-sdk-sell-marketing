<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\SummaryReportResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Report extends AbstractAPI
{
    /**
     * This method generates a report that summarizes the seller's promotions for the
     * specified eBay marketplace. The report returns information on
     * <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code> promotions
     * (deleted reports are not returned) and summarizes the seller's campaign
     * performance for all promotions on a given site.  <br><br>For information about
     * summary reports, see <a
     * href="/api-docs/sell/static/marketing/pm-summary-report.html">Reading the item
     * promotion Summary report</a>.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	The eBay marketplace ID of the site you for which you
     *                       want a promotion summary report.  <p><b>Valid values:</b></p>
     *                       <ul><li><code>EBAY_AU</code> = Australia</li> <li><code>EBAY_DE</code> =
     *                       Germany</li> <li><code>EBAY_ES</code> = Spain</li> <li><code>EBAY_FR</code> =
     *                       France</li> <li><code>EBAY_GB</code> = Great Britain</li>
     *                       <li><code>EBAY_IT</code> = Italy</li> <li><code>EBAY_US</code> = United
     *                       States</li></ul>
     *
     * @return SummaryReportResponse|UnexpectedResponse
     */
    public function get(array $queries = [])
    {
        return $this->request(
        'getPromotionSummaryReport',
        'GET',
        'promotion_summary_report',
        null,
        $queries,
        []
        );
    }
}

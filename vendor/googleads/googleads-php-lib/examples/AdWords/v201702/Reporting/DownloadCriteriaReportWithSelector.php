<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\Examples\AdWords\v201702\Reporting;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\Reporting\v201702\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201702\ReportDefinition;
use Google\AdsApi\AdWords\Reporting\v201702\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\Reporting\v201702\ReportDownloader;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\v201702\cm\Predicate;
use Google\AdsApi\AdWords\v201702\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201702\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201702\cm\Selector;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * Downloads CRITERIA_PERFORMANCE_REPORT for the specified client customer ID.
 */
class DownloadCriteriaReportWithSelector {

  public static function runExample(AdWordsSession $session, $filePath) {
    // Create selector.
    $selector = new Selector();
    $selector->setFields(['CampaignId', 'AdGroupId', 'Id', 'Criteria',
        'CriteriaType', 'Impressions', 'Clicks', 'Cost']);

    // Use a predicate to filter out paused criteria (this is optional).
    $selector->setPredicates([
        new Predicate('Status', PredicateOperator::NOT_IN, ['PAUSED'])]);

    // Create report definition.
    $reportDefinition = new ReportDefinition();
    $reportDefinition->setSelector($selector);
    $reportDefinition->setReportName(
        'Criteria performance report #' . uniqid());
    $reportDefinition->setDateRangeType(
        ReportDefinitionDateRangeType::LAST_7_DAYS);
    $reportDefinition->setReportType(
        ReportDefinitionReportType::CRITERIA_PERFORMANCE_REPORT);
    $reportDefinition->setDownloadFormat(DownloadFormat::CSV);

    // Download report.
    $reportDownloader = new ReportDownloader($session);
    $reportDownloadResult =
        $reportDownloader->downloadReport($reportDefinition);
    $reportDownloadResult->saveToFile($filePath);
    printf("Report with name '%s' was downloaded to '%s'.\n",
        $reportDefinition->getReportName(), $filePath);
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // See: ReportSettingsBuilder for more options (e.g., suppress headers)
    // or set them in your adsapi_php.ini file.
    $reportSettings = (new ReportSettingsBuilder())
        ->fromFile()
        ->includeZeroImpressions(false)
        ->build();

    // See: AdWordsSessionBuilder for setting a client customer ID that is
    // different from that specified in your adsapi_php.ini file.
    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->withReportSettings($reportSettings)
        ->build();

    $filePath = sprintf(
        '%s.csv',
        tempnam(sys_get_temp_dir(), 'criteria-report-')
    );
    self::runExample($session, $filePath);
  }
}

DownloadCriteriaReportWithSelector::main();

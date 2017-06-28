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
namespace Google\AdsApi\Examples\AdWords\v201702\BasicOperations;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201702\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201702\cm\AdType;
use Google\AdsApi\AdWords\v201702\cm\OrderBy;
use Google\AdsApi\AdWords\v201702\cm\Paging;
use Google\AdsApi\AdWords\v201702\cm\Predicate;
use Google\AdsApi\AdWords\v201702\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201702\cm\Selector;
use Google\AdsApi\AdWords\v201702\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example gets all text ads in an ad group. To get ad groups, run
 * GetAdGroups.php.
 */
class GetTextAds {

  const AD_GROUP_ID = 'INSERT_AD_GROUP_ID_HERE';
  const PAGE_LIMIT = 500;

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $adGroupId) {
    $adGroupAdService =
        $adWordsServices->get($session, AdGroupAdService::class);

    // Create a selector to select all ads for the specified ad group.
    $selector = new Selector();
    $selector->setFields(['Id', 'Headline']);
    $selector->setOrdering([new OrderBy('Headline', SortOrder::ASCENDING)]);
    // By default disabled ads aren't returned by the selector. To return them
    // include the DISABLED status in a predicate.
    $selector->setPredicates([
        new Predicate('AdGroupId', PredicateOperator::IN, [$adGroupId]),
        new Predicate('AdType', PredicateOperator::IN, [AdType::TEXT_AD]),
        new Predicate('Status', PredicateOperator::IN,
            [AdGroupAdStatus::DISABLED, AdGroupAdStatus::ENABLED,
                AdGroupAdStatus::PAUSED])
    ]);
    $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

    $totalNumEntries = 0;
    do {
      // Retrieve ad group ads one page at a time, continuing to request pages
      // until all ad group ads have been retrieved.
      $page = $adGroupAdService->get($selector);

      // Print out some information for each ad group ad.
      if ($page->getEntries() !== null) {
        $totalNumEntries = $page->getTotalNumEntries();
        foreach ($page->getEntries() as $adGroupAd) {
          printf(
              "Text ad with ID %d and headline '%s' was found.\n",
              $adGroupAd->getAd()->getId(),
              $adGroupAd->getAd()->getHeadline()
          );
        }
      }

      $selector->getPaging()->setStartIndex(
          $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT);
    } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

    printf("Number of results found: %d\n", $totalNumEntries);
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new AdWordsSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();
    self::runExample(
        new AdWordsServices(), $session, intval(self::AD_GROUP_ID));
  }
}

GetTextAds::main();

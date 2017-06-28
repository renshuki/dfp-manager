<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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
namespace Google\AdsApi\Examples\AdWords\v201609\Targeting;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201609\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201609\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201609\cm\ConstantOperand;
use Google\AdsApi\AdWords\v201609\cm\ConstantOperandConstantType;
use Google\AdsApi\AdWords\v201609\cm\ConstantOperandUnit;
use Google\AdsApi\AdWords\v201609\cm\FunctionOperator;
use Google\AdsApi\AdWords\v201609\cm\GeoTargetOperand;
use Google\AdsApi\AdWords\v201609\cm\IncomeOperand;
use Google\AdsApi\AdWords\v201609\cm\IncomeTier;
use Google\AdsApi\AdWords\v201609\cm\Keyword;
use Google\AdsApi\AdWords\v201609\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201609\cm\Location;
use Google\AdsApi\AdWords\v201609\cm\LocationExtensionOperand;
use Google\AdsApi\AdWords\v201609\cm\LocationGroups;
use Google\AdsApi\AdWords\v201609\cm\Language;
use Google\AdsApi\AdWords\v201609\cm\MatchingFunction;
use Google\AdsApi\AdWords\v201609\cm\NegativeCampaignCriterion;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds various types of targeting criteria to a campaign.
 * To get campaigns, run BasicOperations/GetCampaigns.php.
 */
class AddCampaignTargetingCrtieria {

  const CAMPAIGN_ID = 'INSERT_CAMPAIGN_ID_HERE';
  // Replace the value below with the ID of a feed that has been configured for
  // location targeting, meaning it has an ENABLED FeedMapping with
  // criterionType of 77. Feeds linked to a GMB account automatically have this
  // FeedMapping. If you don't have such a feed, set this value to null.
  const LOCATION_FEED_ID = 'INSERT_LOCATION_FEED_ID_HERE';

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, $campaignId, $locationFeedId) {
    $campaignCriterionService =
        $adWordsServices->get($session, CampaignCriterionService::class);

    $campaignCriteria = [];

    // Create locations. The IDs can be found in the documentation or retrieved
    // with the LocationCriterionService.
    $california = new Location();
    $california->setId(21137);
    $campaignCriteria[] =
        new CampaignCriterion($campaignId, null, $california);

    $mexico = new Location();
    $mexico->setId(2484);
    $campaignCriteria[] =
        new CampaignCriterion($campaignId, null, $mexico);

    // Create languages. The IDs can be found in the documentation or retrieved
    // with the ConstantDataService.
    $english = new Language();
    $english->setId(1000);
    $campaignCriteria[] =
        new CampaignCriterion($campaignId, null, $english);

    $spanish = new Language();
    $spanish->setId(1003);
    $campaignCriteria[] =
        new CampaignCriterion($campaignId, null, $spanish);

    // Location Groups criteria. These represent targeting by household income
    // or places of interest. The IDs can be found in the documentation or
    // retrieved with the LocationCriterionService.

    // Tiers are numbered 1-10, and represent 10% segments of earners.
    // For example, TIER_1 is the top 10%, TIER_2 is the 80-90%, etc.
    // Tiers 6 through 10 are grouped into TIER_6_TO_10.
    // Other valid options: AIRPORT, UNIVERSITY.
    $tierThree = new IncomeOperand();
    $tierThree->setTier(IncomeTier::TIER_3);
    $miami = new GeoTargetOperand();
    $miami->setLocations([1015116]); // Miami, FL
    $firstGroup = new LocationGroups();
    $firstGroup->setMatchingFunction(new MatchingFunction(
        FunctionOperator::AND_VALUE, [$tierThree], [$miami]));
    $campaignCriteria[] =
        new CampaignCriterion($campaignId, null, $firstGroup);

    if ($locationFeedId !== null) {
      // Distance targeting. Area of 10 miles around targets above.
      $radius = new ConstantOperand();
      $radius->setType(ConstantOperandConstantType::DOUBLE);
      $radius->setUnit(ConstantOperandUnit::MILES);
      $radius->setDoubleValue(10.0);
      $distance = new LocationExtensionOperand($radius);
      $secondGroup = new LocationGroups();
      $secondGroup->setFeedId(intval($locationFeedId));
      $secondGroup->setMatchingFunction(
          new MatchingFunction(FunctionOperator::IDENTITY, [$distance]));
      $campaignCriteria[] =
          new CampaignCriterion($campaignId, null, $secondGroup);
    }

    $operations = [];
    foreach ($campaignCriteria as $campaignCriterion) {
      $operation = new CampaignCriterionOperation();
      $operation->setOperator(Operator::ADD);
      $operation->setOperand($campaignCriterion);
      $operations[] = $operation;
    }

    // Add a negative campaign criterion.
    $negativeKeyword = new Keyword();
    $negativeKeyword->setText('jupiter cruise');
    $negativeKeyword->setMatchType(KeywordMatchType::BROAD);
    $negativeCriterion = new NegativeCampaignCriterion();
    $negativeCriterion->setCampaignId($campaignId);
    $negativeCriterion->setCriterion($negativeKeyword);

    $operation = new CampaignCriterionOperation();
    $operation->setOperator(Operator::ADD);
    $operation->setOperand($negativeCriterion);
    $operations[] = $operation;

    $result = $campaignCriterionService->mutate($operations);

    // Print out some information about added campaign criteria.
    foreach ($result->getValue() as $campaignCriterion) {
      printf(
          "Campaign targeting criterion with ID %d and type '%s' was added.\n",
          $campaignCriterion->getCriterion()->getId(),
          $campaignCriterion->getCriterion()->getType());
    }
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
        new AdWordsServices(), $session, intval(self::CAMPAIGN_ID),
            self::LOCATION_FEED_ID);
  }
}

AddCampaignTargetingCrtieria::main();

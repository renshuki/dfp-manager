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
namespace Google\AdsApi\Examples\Dfp\v201702\InventoryService;

require      '../vendor/autoload.php';
require_once '../../../../wp-load.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\v201702\AdUnit;
use Google\AdsApi\Dfp\v201702\AdUnitSize;
use Google\AdsApi\Dfp\v201702\AdUnitTargetWindow;
use Google\AdsApi\Dfp\v201702\EnvironmentType;
use Google\AdsApi\Dfp\v201702\InventoryService;
use Google\AdsApi\Dfp\v201702\NetworkService;
use Google\AdsApi\Dfp\v201702\Size;

class DFPApi {

  public static function createAdUnit(DfpServices $dfpServices, DfpSession $session) {
    $inventoryService =
       $dfpServices->get($session, InventoryService::class);
    $networkService =
       $dfpServices->get($session, NetworkService::class);

    // Get the effective root ad unit's ID for all ad units to be created under.
    $network = $networkService->getCurrentNetwork();
    $effectiveRootAdUnitId = $network->getEffectiveRootAdUnitId();

    /*****************
    
          Example   
    
    *****************/

    // Configure the ad unit to be created.
    $adUnit = new AdUnit();
    $adUnit->setName(uniqid('test_'));
    $adUnit->setParentId($effectiveRootAdUnitId);
    $adUnit->setDescription('Test Ad Unit');
    $adUnit->setTargetWindow(AdUnitTargetWindow::BLANK);

     // Set the size of possible creatives that can match this ad unit.
    $size = new Size();
    $size->setWidth(300);
    $size->setHeight(250);
    $size->setIsAspectRatio(false);
    $adUnitSize = new AdUnitSize();
    $adUnitSize->setSize($size);
    $adUnitSize->setEnvironmentType(EnvironmentType::BROWSER);
    $adUnit->setAdUnitSizes([$adUnitSize]);

    // Create the ad units on the server.
    $adUnits = $inventoryService->createAdUnits([$adUnit]);

    // Print out some information for each created ad unit.
    foreach ($adUnits as $i => $adUnit) {
      printf(
          "%d) An ad unit with ID '%s' and name '%s' was created.\n",
          $i,
          $adUnit->getId(),
          $adUnit->getName()
      );
    }

    printf("Created %d ad unit(s).\n", count($adUnits));
  }

  public static function main() {

    // Generate a refreshable OAuth2 credential for authentication.
    $options = get_option('dfp_manager_general_settings');
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->withJsonKeyFilePath($options['api_key'])
        ->withScopes($options['scopes'])
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->withNetworkCode($options['network_code'])
        ->withApplicationName($options['application_name'])
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::createAdUnit(new DfpServices(), $session);

  }
}

DFPApi::main();
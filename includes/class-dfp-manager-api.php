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

// namespace Google\AdsApi\Examples\Dfp\v201702\InventoryService;

define( 'WP_USE_THEMES', false );
// require_once '../../../../wp-load.php';
require plugin_dir_path( __FILE__ ) . '../vendor/autoload.php';

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

class Dfp_Manager_Api {

  public static function createAdUnit( DfpServices $dfpServices, DfpSession $session, $ID, $title, $type ) {

    $inventoryService =
       $dfpServices->get($session, InventoryService::class);
    $networkService =
       $dfpServices->get($session, NetworkService::class);

    // Get the effective root ad unit's ID for all ad units to be created under.
    $network = $networkService->getCurrentNetwork();
    $effectiveRootAdUnitId = $network->getEffectiveRootAdUnitId();

    $advanced_options = get_option('dfp_manager_advanced_settings');
    $adUnits = new \ArrayObject(); // Don't delete the \ (Accessing global classes)
    $ad_slots = query_posts('post_type=ad_slot');

    foreach ( $ad_slots as $ad_slot ) {
      $adUnit = new AdUnit();
      $adUnit->setName( $advanced_options['ad_units_prefix'].
                        $ID.'_'.
                        $type.'_'.
                        ($ad_slot->post_title)
                      );
      $adUnit->setAdUnitCode( $advanced_options['ad_units_prefix'].
                        $ID.'_'.
                        $type.'_'.
                        ($ad_slot->post_title)
                      );
      $adUnit->setParentId($effectiveRootAdUnitId);
      $adUnit->setDescription($title);
      $adUnit->setTargetWindow(AdUnitTargetWindow::BLANK);
      //$adUnit->setAdUnitSizes();

      // var_dump(get_post_types());
      // wp_die( var_dump(get_taxonomies()) );
      //wp_die(var_dump($ad_slot));
      wp_die(var_dump($adUnit));
      // var_dump($ad_slot->ID);

      // $adUnits->append($adUnit);
    }

    // echo(var_dump($adUnits));

  }

  public static function main($ID, $post) {

    $title = $post->post_title;
    $type = $post->post_type;

    // Generate a refreshable OAuth2 credential for authentication.
    $general_options = get_option('dfp_manager_general_settings');
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->withJsonKeyFilePath($general_options['api_key'])
        ->withScopes($general_options['scopes'])
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->withNetworkCode($general_options['network_code'])
        ->withApplicationName($general_options['application_name'])
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::createAdUnit(new DfpServices(), $session, $ID, $title, $type);

  }
}

// Dfp_Manager_Api::main();
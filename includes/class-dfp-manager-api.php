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
use Google\AdsApi\Dfp\Util\v201702\StatementBuilder;
use Google\AdsApi\Dfp\v201702\AdUnit;
use Google\AdsApi\Dfp\v201702\AdUnitSize;
use Google\AdsApi\Dfp\v201702\AdUnitTargetWindow;
use Google\AdsApi\Dfp\v201702\EnvironmentType;
use Google\AdsApi\Dfp\v201702\InventoryService;
use Google\AdsApi\Dfp\v201702\InventoryStatus;
use Google\AdsApi\Dfp\v201702\NetworkService;
use Google\AdsApi\Dfp\v201702\Size;

class Dfp_Manager_Api {

  public static function createAdUnit( DfpServices $dfpServices, DfpSession $session) {
    // Publishing post ID
    $post_id = get_the_ID();

    // Publishing post title
    $post_title = get_the_title();

    // Publishing post type
    $post_type = get_post_type();

    // Array to store all Ad Units
    $adUnits = array();

    $inventoryService =
       $dfpServices->get($session, InventoryService::class);
    $networkService =
       $dfpServices->get($session, NetworkService::class);

    // Get the effective root ad unit's ID for all ad units to be created under.
    $network = $networkService->getCurrentNetwork();
    $effectiveRootAdUnitId = $network->getEffectiveRootAdUnitId();

    // Get all Advanced Options
    $advanced_options = get_option('dfp_manager_advanced_settings');

    // Get all Ad Slots
    $ad_slots = query_posts('post_type=ad_slot');

    // Loop over all Ad Slots
    foreach ( $ad_slots as $ad_slot ) {
      $adUnit = new AdUnit();
      $adUnit->setName( $advanced_options['ad_units_prefix'].
                        $post_id.'_'.
                        $post_type.'_'.
                        ($ad_slot->post_title)
                      );
      $adUnit->setAdUnitCode( $advanced_options['ad_units_prefix'].
                        $post_id.'_'.
                        $post_type.'_'.
                        ($ad_slot->post_title)
                      );
      $adUnit->setParentId($effectiveRootAdUnitId);
      $adUnit->setDescription($post_title);
      $adUnit->setTargetWindow(AdUnitTargetWindow::BLANK);

      // Get terms(ad_size) for the Ad Slot
      $terms = wp_get_post_terms($ad_slot->ID, 'ad_size');

      // Create an array to store all the sizes for the Ad Slot
      $adUnitSizes = array();

      // Loop over all terms (ad_size) of the Ad Slot
      foreach ($terms as $term) {
        if( strpos($term->slug, 'x') !== false ){ // Check if slug contains x to split sizes (width and height)
          $ar_term = explode('x', $term->slug);
          $width = $ar_term[0];
          $height = $ar_term[1];
          $adUnitSize = self::createAdUnitSize($width, $height);

          array_push($adUnitSizes, $adUnitSize);
        }
      }

      $adUnit->setAdUnitSizes($adUnitSizes);
      
      // Push the Ad Unit to the Ad Units array
      array_push($adUnits, $adUnit);
    }

    // Check if Ad Unit already exists
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
            ->where("Name LIKE '".$advanced_options['ad_units_prefix'].$post_id."_".$post_type."_%' and status = :status")
            ->limit($pageSize)
            ->withBindVariableValue('status', InventoryStatus::ACTIVE);

    $page = $inventoryService->getAdUnitsByStatement($statementBuilder->toStatement());

    if ($page->getResults() == null) {
      // Create the ad units on the server.
      $adUnits = $inventoryService->createAdUnits($adUnits);
    }
    else {
      // Error
    }

    // Debug
    // wp_die(var_dump($adUnits));
  }

  public static function createAdUnitSize($width, $height) {
    $size = new Size();
    $size->setWidth($width);
    $size->setHeight($height);
    $size->setIsAspectRatio(false);
    $adUnitSize = new AdUnitSize();
    $adUnitSize->setSize($size);
    $adUnitSize->setEnvironmentType(EnvironmentType::BROWSER);

    return $adUnitSize;
  }

  public static function main() {

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

    self::createAdUnit(new DfpServices(), $session);

  }
}

// Dfp_Manager_Api::main();
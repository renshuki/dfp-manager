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

  public static function main() {

    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->withJsonKeyFilePath()
        ->withScopes(get_option('scopes'))
        ->build();

    var_dump($oAuth2Credential);

  }
}

DFPApi::main();
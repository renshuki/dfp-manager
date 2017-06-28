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
namespace Google\AdsApi\Examples\Dfp\v201702\LineItemCreativeAssociationService;

require '../../../../vendor/autoload.php';

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpServices;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201702\StatementBuilder;
use Google\AdsApi\Dfp\v201702\DeactivateLineItemCreativeAssociations as DeactivateLineItemCreativeAssociationsAction;
use Google\AdsApi\Dfp\v201702\LineItemCreativeAssociationService;

/**
 * Deactivates line item creative associations.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class DeactivateLicas {

  const LINE_ITEM_ID = 'INSERT_LINE_ITEM_ID_HERE';

  public static function runExample(DfpServices $dfpServices,
      DfpSession $session, $lineItemId) {
    $lineItemCreativeAssociationService =
        $dfpServices->get($session, LineItemCreativeAssociationService::class);

    // Create a statement to select the line item creative associations to
    // deactivate.
    $pageSize = StatementBuilder::SUGGESTED_PAGE_LIMIT;
    $statementBuilder = (new StatementBuilder())
        ->where('lineItemId = :lineItemId')
        ->orderBy('lineItemId ASC, creativeId ASC')
        ->limit($pageSize)
        ->withBindVariableValue('lineItemId', $lineItemId);

    // Retrieve a small amount of line item creative associations at a time,
    // paging through until all line item creative associations have been
    // retrieved.
    $totalResultSetSize = 0;
    do {
      $page = $lineItemCreativeAssociationService
          ->getLineItemCreativeAssociationsByStatement(
              $statementBuilder->toStatement());

      // Print out some information for the line item creative associations to
      // be deactivated.
      if ($page->getResults() !== null) {
        $totalResultSetSize = $page->getTotalResultSetSize();
        $i = $page->getStartIndex();
        foreach ($page->getResults() as $lica) {
          if ($lica->getCreativeSetId() !== null) {
            printf(
                "%d) Line item creative association with line item ID %d " .
                    "and creative set ID %d will be deactivated.\n",
                $i++,
                $lica->getLineItemId(),
                $lica->getCreativeSetId()
            );
          } else {
            printf(
                "%d) Line item creative association with line item ID %d " .
                    "and creative ID %d will be deactivated.\n",
                $i++,
                $lica->getLineItemId(),
                $lica->getCreativeId()
            );
          }
        }
      }

      $statementBuilder->increaseOffsetBy($pageSize);
    } while ($statementBuilder->getOffset() < $totalResultSetSize);

    printf(
        "Total number of line item creative associations to be deactivated: "
            . "%d\n",
        $totalResultSetSize
    );

    if ($totalResultSetSize > 0) {
      // Remove limit and offset from statement so we can reuse the statement.
      $statementBuilder->removeLimitAndOffset();

      // Create and perform action.
      $action = new DeactivateLineItemCreativeAssociationsAction();
      $result = $lineItemCreativeAssociationService
          ->performLineItemCreativeAssociationAction(
              $action, $statementBuilder->toStatement());

      if ($result !== null && $result->getNumChanges() > 0) {
        printf("Number of line item creative associations deactivated: %d\n",
            $result->getNumChanges());
      } else {
        printf("No line item creative associations were deactivated.\n");
      }
    }
  }

  public static function main() {
    // Generate a refreshable OAuth2 credential for authentication.
    $oAuth2Credential = (new OAuth2TokenBuilder())
        ->fromFile()
        ->build();

    // Construct an API session configured from a properties file and the OAuth2
    // credentials above.
    $session = (new DfpSessionBuilder())
        ->fromFile()
        ->withOAuth2Credential($oAuth2Credential)
        ->build();

    self::runExample(new DfpServices(), $session, intval(self::LINE_ITEM_ID));
  }
}

DeactivateLicas::main();

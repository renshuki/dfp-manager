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
namespace Google\AdsApi\Examples\AdWords\v201609\Remarketing;

require '../../../../vendor/autoload.php';

use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\Operator;
use Google\AdsApi\AdWords\v201609\rm\AdwordsUserListService;
use Google\AdsApi\AdWords\v201609\rm\CrmBasedUserList;
use Google\AdsApi\AdWords\v201609\rm\MutateMembersOperand;
use Google\AdsApi\AdWords\v201609\rm\MutateMembersOperandDataType;
use Google\AdsApi\AdWords\v201609\rm\MutateMembersOperation;
use Google\AdsApi\AdWords\v201609\rm\UserListOperation;
use Google\AdsApi\Common\OAuth2TokenBuilder;

/**
 * This example adds a user list (a.k.a. audience) and uploads hashed email
 * addresses to populate the list.
 *
 * <p><em>Note:</em> It may take up to several hours for the list to be
 * populated with members.
 * Email addresses must be associated with a Google account.
 * For privacy purposes, the user list size will show as zero until the list has
 * at least 1,000 members. After that, the size will be rounded to the two most
 * significant digits.
 */
class AddCrmBasedUserList {

  private static $EMAILS = ['customer1@example.com', 'customer2@example.com',
      ' Client3@example.com '];

  public static function runExample(AdWordsServices $adWordsServices,
      AdWordsSession $session, array $emails) {
    $userListService =
        $adWordsServices->get($session, AdwordsUserListService::class);

    // Create a CRM based user list.
    $userList = new CrmBasedUserList();
    $userList->setName('Customer relationship management list #' . uniqid());
    $userList->setDescription(
        'A list of customers that originated from email addresses');

    // Maximum life span is 180 days.
    $userList->setMembershipLifeSpan(180);

    // Create a user list operation and add it to the list.
    $operations = [];
    $operation = new UserListOperation();
    $operation->setOperand($userList);
    $operation->setOperator(Operator::ADD);
    $operations[] = $operation;

    // Create the user list on the server and print out some information.
    $userList = $userListService->mutate($operations)->getValue()[0];
    printf("User list with name '%s' and ID %d was added.\n",
        $userList->getName(), $userList->getId());

    // Create operation to add members to the user list based on email
    // addresses.
    $mutateMembersOperations = [];
    $mutateMembersOperation = new MutateMembersOperation();
    $operand = new MutateMembersOperand();
    $operand->setUserListId($userList->getId());

    // You can optionally provide this field.
    $operand->setDataType(MutateMembersOperandDataType::EMAIL_SHA256);

    // Hash normalized email addresses based on SHA-256 hashing algorithm.
    $emailHashes = [];
    foreach ($emails as $email) {
      $emailHashes[] = hash('sha256', strtolower(trim($email)));
    }

    // Add email address hashes and add the operation to the list.
    $operand->setMembers($emailHashes);
    $mutateMembersOperation->setOperand($operand);
    $mutateMembersOperation->setOperator(Operator::ADD);
    $mutateMembersOperations[] = $mutateMembersOperation;

    // Add members to the user list based on email addresses.
    $result = $userListService->mutateMembers($mutateMembersOperations);

    // Print out some information about the added user list.
    // Reminder: it may take several hours for the list to be populated with
    // members.
    foreach ($result->getUserLists() as $userList) {
      printf(
          "%d email addresses were uploaded to user list with name '%s' and ID"
              . " %d and are scheduled for review.\n",
          count($emails),
          $userList->getName(),
          $userList->getId()
      );
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
    self::runExample(new AdWordsServices(), $session, self::$EMAILS);
  }
}

AddCrmBasedUserList::main();

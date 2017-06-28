<?php

namespace Google\AdsApi\AdWords\v201702\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdwordsUserListService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthorizationError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Selector',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Page',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\CollectionSizeError',
      'UserListConversionType' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserListConversionType',
      'CrmBasedUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\CrmBasedUserList',
      'DataUploadResult' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\DataUploadResult',
      'DateKey' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\DateKey',
      'DateRuleItem' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\DateRuleItem',
      'DateSpecificRuleUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\DateSpecificRuleUserList',
      'ExpressionRuleUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\ExpressionRuleUserList',
      'LogicalUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\LogicalUserList',
      'LogicalUserListOperand' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\LogicalUserListOperand',
      'MutateMembersError' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\MutateMembersError',
      'MutateMembersOperand' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\MutateMembersOperand',
      'MutateMembersOperation' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\MutateMembersOperation',
      'MutateMembersReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\MutateMembersReturnValue',
      'NumberKey' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\NumberKey',
      'NumberRuleItem' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\NumberRuleItem',
      'RelativeDate' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\RelativeDate',
      'BasicUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\BasicUserList',
      'Rule' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\Rule',
      'RuleBasedUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\RuleBasedUserList',
      'RuleItem' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\RuleItem',
      'RuleItemGroup' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\RuleItemGroup',
      'SimilarUserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\SimilarUserList',
      'StringKey' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\StringKey',
      'StringRuleItem' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\StringRuleItem',
      'UserList' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserList',
      'UserListError' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserListError',
      'UserListLogicalRule' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserListLogicalRule',
      'UserListOperation' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserListOperation',
      'UserListPage' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserListPage',
      'UserListReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\UserListReturnValue',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\mutateResponse',
      'mutateMembersResponse' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\mutateMembersResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201702\\rm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/rm/v201702/AdwordsUserListService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the list of user lists that meet the selector criteria.
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201702\rm\UserListPage
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201702\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies a list of mutate operations (i.e. add, set):
     *
     * Add - creates a set of user lists
     * Set - updates a set of user lists
     * Remove - not supported
     *
     * @param \Google\AdsApi\AdWords\v201702\rm\UserListOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\rm\UserListReturnValue
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Mutate members of user lists by either adding or removing their lists of members.
     * The following {@link Operator}s are supported: ADD and REMOVE. The SET operator
     * is not supported.
     *
     * <p>Note that operations cannot have same user list id but different operators.
     *
     * @param \Google\AdsApi\AdWords\v201702\rm\MutateMembersOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\rm\MutateMembersReturnValue
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutateMembers(array $operations)
    {
      return $this->__soapCall('mutateMembers', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of user lists that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201702\rm\UserListPage
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}

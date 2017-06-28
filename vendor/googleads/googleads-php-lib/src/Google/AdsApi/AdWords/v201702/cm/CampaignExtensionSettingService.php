<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignExtensionSettingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiException',
      'AppFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AppFeedItem',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthorizationError',
      'CallConversionType' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CallConversionType',
      'CallFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CallFeedItem',
      'CalloutFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CalloutFeedItem',
      'CampaignExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignExtensionSetting',
      'CampaignExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignExtensionSettingOperation',
      'CampaignExtensionSettingPage' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignExtensionSettingPage',
      'CampaignExtensionSettingReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CampaignExtensionSettingReturnValue',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateRange',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityNotFound',
      'ExtensionFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExtensionFeedItem',
      'ExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExtensionSetting',
      'ExtensionSettingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExtensionSettingError',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemAttributeError',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemDevicePreference',
      'FeedItemGeoRestriction' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemGeoRestriction',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemPolicyData',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FeedItemScheduling',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LongValue',
      'MessageFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MessageFeedItem',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Money',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MoneyWithCurrency',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Placement',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PolicyData',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Predicate',
      'PriceFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PriceFeedItem',
      'PriceTableRow' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PriceTableRow',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequiredError',
      'ReviewFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ReviewFeedItem',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SelectorError',
      'SitelinkFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SitelinkFeedItem',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringLengthError',
      'StructuredSnippetFeedItem' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StructuredSnippetFeedItem',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Vertical',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201702/CampaignExtensionSettingService?wsdl')
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
     * Returns a list of CampaignExtensionSettings that meet the selector criteria.
     *
     * CampaignExtensionSettings are returned.
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201702\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Applies the list of mutate operations (add, remove, and set).
     *
     * <p> Beginning in v201509, add and set operations are treated identically. Performing an add
     * operation on a campaign with an existing ExtensionSetting will cause the operation to be
     * treated like a set operation. Performing a set operation on a campaign with no
     * ExtensionSetting will cause the operation to be treated like an add operation.
     *
     * specified in more than one operation.
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSettingOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSettingReturnValue
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns a list of CampaignExtensionSettings that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201702\cm\CampaignExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}

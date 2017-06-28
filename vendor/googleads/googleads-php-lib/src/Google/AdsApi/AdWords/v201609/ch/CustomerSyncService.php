<?php

namespace Google\AdsApi\AdWords\v201609\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerSyncService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateError',
      'DateTimeRange' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateTimeRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DistinctError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NotEmptyError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperatorError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApplicationException',
      'AdGroupChangeData' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\AdGroupChangeData',
      'CampaignChangeData' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\CampaignChangeData',
      'CustomerSyncError' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\CustomerSyncError',
      'FeedChangeData' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\FeedChangeData',
      'CustomerChangeData' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\CustomerChangeData',
      'CustomerSyncSelector' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\CustomerSyncSelector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201609\\ch\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/ch/v201609/CustomerSyncService?wsdl')
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
     * Returns information about changed entities inside a customer's account.
     *
     * changed at each level. All Campaigns that are requested in the selector will be returned,
     * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
     *
     * @param \Google\AdsApi\AdWords\v201609\ch\CustomerSyncSelector $selector
     * @return \Google\AdsApi\AdWords\v201609\ch\CustomerChangeData
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201609\ch\CustomerSyncSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

}

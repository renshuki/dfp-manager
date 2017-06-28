<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionTrackerService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdCallMetricsConversion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AdCallMetricsConversion',
      'AdWordsConversionTracker' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AdWordsConversionTracker',
      'AppConversion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AppConversion',
      'AppPostbackUrlError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AppPostbackUrlError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ClientTermsError',
      'ConversionTrackingError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ConversionTrackingError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DistinctError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NotEmptyError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringLengthError',
      'UploadCallConversion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\UploadCallConversion',
      'UploadConversion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\UploadConversion',
      'WebsiteCallMetricsConversion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\WebsiteCallMetricsConversion',
      'ConversionTracker' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ConversionTracker',
      'ConversionTrackerOperation' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ConversionTrackerOperation',
      'ConversionTrackerReturnValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ConversionTrackerReturnValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DatabaseError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Operation',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApplicationException',
      'ConversionTrackerPage' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ConversionTrackerPage',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NoStatsPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Page',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Selector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201609/ConversionTrackerService?wsdl')
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
     * Returns a list of the conversion trackers that match the selector. The
     * actual objects contained in the page's list of entries will be specific
     * subclasses of the abstract {@link ConversionTracker} class.
     *
     * {@link ConversionTracker}s to return.
     * occurred while retrieving results.
     *
     * @param \Google\AdsApi\AdWords\v201609\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201609\cm\ConversionTrackerPage
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201609\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies the list of mutate operations such as adding or updating conversion trackers.
     * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
     * <code>REMOVE</code> operator. In order to 'disable' a conversion type, send a
     * <code>SET</code> operation for the conversion tracker with the <code>status</code>
     * property set to <code>DISABLED</code></p>
     *
     * <p>You can mutate any ConversionTracker that belongs to your account. You may not
     * mutate a ConversionTracker that belongs to some other account. You may not directly
     * mutate a system-defined ConversionTracker, but you can create a mutable copy of it
     * in your account by sending a mutate request with an ADD operation specifying
     * an originalConversionTypeId matching a system-defined conversion tracker's ID. That new
     * ADDed ConversionTracker will inherit the statistics and properties
     * of the system-defined type, but will be editable as usual.</p>
     *
     * in the same order as they appeared in the list of operations.
     * occurred while updating the data.
     *
     * @param \Google\AdsApi\AdWords\v201609\cm\ConversionTrackerOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201609\cm\ConversionTrackerReturnValue
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns a list of conversion trackers that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201609\cm\ConversionTrackerPage
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}

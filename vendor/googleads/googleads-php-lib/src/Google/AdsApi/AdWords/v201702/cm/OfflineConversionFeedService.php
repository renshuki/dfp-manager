<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineConversionFeedService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CollectionSizeError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CurrencyCodeError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ListReturnValue',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NullError',
      'OfflineConversionError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OfflineConversionError',
      'OfflineConversionFeed' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OfflineConversionFeed',
      'OfflineConversionFeedOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OfflineConversionFeedOperation',
      'OfflineConversionFeedReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OfflineConversionFeedReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\OperatorError',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PagingError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringLengthError',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201702/OfflineConversionFeedService?wsdl')
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
     * Reports an offline conversion for each entry in {@code operations}.
     * <p>
     * This bulk operation does not have any transactional guarantees. Some operations can succeed
     * while others fail.
     *
     * <p><b>Note:</b> {@link OfflineConversionFeedOperation} supports only the
     * {@code ADD} operator. ({@code SET} and {@code REMOVE} are not supported.)
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\OfflineConversionFeedOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\cm\OfflineConversionFeedReturnValue
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}

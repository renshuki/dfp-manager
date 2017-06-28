<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupLabel',
      'AdGroupLabelOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupLabelOperation',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupServiceError',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdxError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddingErrors',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ClientTermsError',
      'ConversionOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ConversionOptimizerBiddingScheme',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomParameter',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DoubleValue',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EnhancedCpcBiddingScheme',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\EntityNotFound',
      'ExplorerAutoOptimizerSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ExplorerAutoOptimizerSetting',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ForwardCompatibilityError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\InternalApiError',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ManualCpmBiddingScheme',
      'Money' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Money',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\NumberValue',
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
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\String_StringMapEntry',
      'TargetingSettingDetail' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetingSettingDetail',
      'TargetingSetting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetingSetting',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\UrlError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ComparableValue',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CpmBid',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\DatabaseError',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\PageOnePromotedBiddingScheme',
      'Setting' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Setting',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetOutrankShareBiddingScheme',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\TargetSpendBiddingScheme',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\LabelAttribute',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Bids',
      'BudgetOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BudgetOptimizerBiddingScheme',
      'Label' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Label',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Selector',
      'AdGroupLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupLabelReturnValue',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\BiddingStrategyConfiguration',
      'AdGroup' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroup',
      'AdGroupOperation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupOperation',
      'AdGroupPage' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupPage',
      'AdGroupReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\AdGroupReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\Page',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\mutateLabelResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201702\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201702/AdGroupService?wsdl')
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
     * Returns a list of all the ad groups specified by the selector
     * from the target customer's account.
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupPage
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201702\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, updates, or removes ad groups.
     * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
     * {@code REMOVE} operator. To remove an ad group, set its
     * {@link AdGroup#status status} to {@code REMOVED}.</p>
     *
     * specified in more than one operation.
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\AdGroupOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupReturnValue
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Adds labels to the {@linkplain AdGroup ad group} or removes {@linkplain Label label}s from the
     * {@linkplain AdGroup ad group}.
     * <p>{@code ADD} -- Apply an existing label to an existing {@linkplain AdGroup ad group}.
     * The {@code adGroupId} must reference an existing {@linkplain AdGroup ad group}. The
     * {@code labelId} must reference an existing {@linkplain Label label}.
     * <p>{@code REMOVE} -- Removes the link between the specified {@linkplain AdGroup ad group}
     * and a {@linkplain Label label}.</p>
     *
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupLabel contains the AdGroupId and the LabelId.
     * In the case of a remove operation, the returned AdGroupLabel will only have AdGroupId.
     *
     * @param \Google\AdsApi\AdWords\v201702\cm\AdGroupLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of ad groups that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupPage
     * @throws \Google\AdsApi\AdWords\v201702\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}

<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterion',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionError',
      'AdGroupCriterionLabel' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionLabel',
      'AdGroupCriterionLabelOperation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionLabelOperation',
      'AdGroupCriterionLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionLabelReturnValue',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionLimitExceeded',
      'AdGroupCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionOperation',
      'AdGroupCriterionPage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionPage',
      'AdGroupCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionReturnValue',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiException',
      'AppPaymentModel' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AppPaymentModel',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AppUrl',
      'AppUrlList' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AppUrlList',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\LabelAttribute',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthorizationError',
      'Bid' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Bid',
      'BiddableAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\BiddableAdGroupCriterion',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Bids',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ComparableValue',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CpmBid',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionParameter',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionPolicyError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DoubleValue',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EnhancedCpcBiddingScheme',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ExemptionRequest',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ForwardCompatibilityError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Gender',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Keyword',
      'Label' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Label',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ManualCpmBiddingScheme',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Money',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MultiplierError',
      'NegativeAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NegativeAdGroupCriterion',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Page',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PageOnePromotedBiddingScheme',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Placement',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductOfferId',
      'ProductPartition' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductPartition',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ProductTypeFull',
      'QualityInfo' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QualityInfo',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TargetOutrankShareBiddingScheme',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TargetSpendBiddingScheme',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\UnknownProductDimension',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Vertical',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\WebpageParameter',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\YouTubeVideo',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\mutateLabelResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201705/AdGroupCriterionService?wsdl')
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
     * Gets adgroup criteria.
     *
     * @param \Google\AdsApi\AdWords\v201705\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterionPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201705\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, removes or updates adgroup criteria.
     *
     * during checks on keywords to be added.
     *
     * @param \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Adds labels to the AdGroupCriterion or removes labels from the AdGroupCriterion
     * <p>Add - Apply an existing label to an existing
     * {@linkplain AdGroupCriterion ad group criterion}. The {@code adGroupId} and
     * {@code criterionId}
     * must reference an existing {@linkplain AdGroupCriterion ad group criterion}. The
     * {@code labelId} must reference an existing {@linkplain Label label}.
     * <p>Remove - Removes the link between the specified
     * {@linkplain AdGroupCriterion ad group criterion} and {@linkplain Label label}.</p>
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupCriterionLabel contains the AdGroupId, CriterionId and the
     * LabelId. In the case of a remove operation, the returned AdGroupCriterionLabel will only have
     * AdGroupId and CriterionId.
     *
     * @param \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterionLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterionLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of AdGroupCriterion that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterionPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}

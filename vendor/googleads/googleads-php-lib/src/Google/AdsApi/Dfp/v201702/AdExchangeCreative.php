<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExchangeCreative extends \Google\AdsApi\Dfp\v201702\HasHtmlSnippetDynamicAllocationCreative
{

    /**
     * @var boolean $isNativeEligible
     */
    protected $isNativeEligible = null;

    /**
     * @var boolean $isInterstitial
     */
    protected $isInterstitial = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201702\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201702\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201702\BaseCustomFieldValue[] $customFieldValues
     * @param string $codeSnippet
     * @param boolean $isNativeEligible
     * @param boolean $isInterstitial
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $codeSnippet = null, $isNativeEligible = null, $isInterstitial = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $codeSnippet);
      $this->isNativeEligible = $isNativeEligible;
      $this->isInterstitial = $isInterstitial;
    }

    /**
     * @return boolean
     */
    public function getIsNativeEligible()
    {
      return $this->isNativeEligible;
    }

    /**
     * @param boolean $isNativeEligible
     * @return \Google\AdsApi\Dfp\v201702\AdExchangeCreative
     */
    public function setIsNativeEligible($isNativeEligible)
    {
      $this->isNativeEligible = $isNativeEligible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInterstitial()
    {
      return $this->isInterstitial;
    }

    /**
     * @param boolean $isInterstitial
     * @return \Google\AdsApi\Dfp\v201702\AdExchangeCreative
     */
    public function setIsInterstitial($isInterstitial)
    {
      $this->isInterstitial = $isInterstitial;
      return $this;
    }

}

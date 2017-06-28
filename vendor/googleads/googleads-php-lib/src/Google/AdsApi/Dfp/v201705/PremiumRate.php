<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRate
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $rateCardId
     */
    protected $rateCardId = null;

    /**
     * @var string $pricingMethod
     */
    protected $pricingMethod = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\PremiumFeature $premiumFeature
     */
    protected $premiumFeature = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\PremiumRateValue[] $premiumRateValues
     */
    protected $premiumRateValues = null;

    /**
     * @param int $id
     * @param int $rateCardId
     * @param string $pricingMethod
     * @param \Google\AdsApi\Dfp\v201705\PremiumFeature $premiumFeature
     * @param \Google\AdsApi\Dfp\v201705\PremiumRateValue[] $premiumRateValues
     */
    public function __construct($id = null, $rateCardId = null, $pricingMethod = null, $premiumFeature = null, array $premiumRateValues = null)
    {
      $this->id = $id;
      $this->rateCardId = $rateCardId;
      $this->pricingMethod = $pricingMethod;
      $this->premiumFeature = $premiumFeature;
      $this->premiumRateValues = $premiumRateValues;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201705\PremiumRate
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateCardId()
    {
      return $this->rateCardId;
    }

    /**
     * @param int $rateCardId
     * @return \Google\AdsApi\Dfp\v201705\PremiumRate
     */
    public function setRateCardId($rateCardId)
    {
      $this->rateCardId = $rateCardId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingMethod()
    {
      return $this->pricingMethod;
    }

    /**
     * @param string $pricingMethod
     * @return \Google\AdsApi\Dfp\v201705\PremiumRate
     */
    public function setPricingMethod($pricingMethod)
    {
      $this->pricingMethod = $pricingMethod;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\PremiumFeature
     */
    public function getPremiumFeature()
    {
      return $this->premiumFeature;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\PremiumFeature $premiumFeature
     * @return \Google\AdsApi\Dfp\v201705\PremiumRate
     */
    public function setPremiumFeature($premiumFeature)
    {
      $this->premiumFeature = $premiumFeature;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\PremiumRateValue[]
     */
    public function getPremiumRateValues()
    {
      return $this->premiumRateValues;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\PremiumRateValue[] $premiumRateValues
     * @return \Google\AdsApi\Dfp\v201705\PremiumRate
     */
    public function setPremiumRateValues(array $premiumRateValues)
    {
      $this->premiumRateValues = $premiumRateValues;
      return $this;
    }

}

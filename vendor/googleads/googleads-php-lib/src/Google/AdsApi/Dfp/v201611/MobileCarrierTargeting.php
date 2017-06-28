<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileCarrierTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Technology[] $mobileCarriers
     */
    protected $mobileCarriers = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\Dfp\v201611\Technology[] $mobileCarriers
     */
    public function __construct($isTargeted = null, array $mobileCarriers = null)
    {
      $this->isTargeted = $isTargeted;
      $this->mobileCarriers = $mobileCarriers;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\Dfp\v201611\MobileCarrierTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Technology[]
     */
    public function getMobileCarriers()
    {
      return $this->mobileCarriers;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Technology[] $mobileCarriers
     * @return \Google\AdsApi\Dfp\v201611\MobileCarrierTargeting
     */
    public function setMobileCarriers(array $mobileCarriers)
    {
      $this->mobileCarriers = $mobileCarriers;
      return $this;
    }

}

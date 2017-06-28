<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplicationTargeting
{

    /**
     * @var long[] $mobileApplicationIds
     */
    protected $mobileApplicationIds = null;

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @param long[] $mobileApplicationIds
     * @param boolean $isTargeted
     */
    public function __construct(array $mobileApplicationIds = null, $isTargeted = null)
    {
      $this->mobileApplicationIds = $mobileApplicationIds;
      $this->isTargeted = $isTargeted;
    }

    /**
     * @return long[]
     */
    public function getMobileApplicationIds()
    {
      return $this->mobileApplicationIds;
    }

    /**
     * @param long[] $mobileApplicationIds
     * @return \Google\AdsApi\Dfp\v201611\MobileApplicationTargeting
     */
    public function setMobileApplicationIds(array $mobileApplicationIds)
    {
      $this->mobileApplicationIds = $mobileApplicationIds;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201611\MobileApplicationTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

}

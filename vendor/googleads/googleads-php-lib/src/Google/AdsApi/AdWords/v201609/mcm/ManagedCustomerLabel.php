<?php

namespace Google\AdsApi\AdWords\v201609\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerLabel
{

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @param int $labelId
     * @param int $customerId
     */
    public function __construct($labelId = null, $customerId = null)
    {
      $this->labelId = $labelId;
      $this->customerId = $customerId;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Google\AdsApi\AdWords\v201609\mcm\ManagedCustomerLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = $labelId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \Google\AdsApi\AdWords\v201609\mcm\ManagedCustomerLabel
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = $customerId;
      return $this;
    }

}

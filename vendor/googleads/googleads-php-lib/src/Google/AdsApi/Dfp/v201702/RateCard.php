<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RateCard
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $forMarketplace
     */
    protected $forMarketplace = null;

    /**
     * @var string $pricingModel
     */
    protected $pricingModel = null;

    /**
     * @var long[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $currencyCode
     * @param string $status
     * @param boolean $forMarketplace
     * @param string $pricingModel
     * @param long[] $appliedTeamIds
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $name = null, $currencyCode = null, $status = null, $forMarketplace = null, $pricingModel = null, array $appliedTeamIds = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->currencyCode = $currencyCode;
      $this->status = $status;
      $this->forMarketplace = $forMarketplace;
      $this->pricingModel = $pricingModel;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForMarketplace()
    {
      return $this->forMarketplace;
    }

    /**
     * @param boolean $forMarketplace
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setForMarketplace($forMarketplace)
    {
      $this->forMarketplace = $forMarketplace;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingModel()
    {
      return $this->pricingModel;
    }

    /**
     * @param string $pricingModel
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setPricingModel($pricingModel)
    {
      $this->pricingModel = $pricingModel;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAppliedTeamIds()
    {
      return $this->appliedTeamIds;
    }

    /**
     * @param long[] $appliedTeamIds
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setAppliedTeamIds(array $appliedTeamIds)
    {
      $this->appliedTeamIds = $appliedTeamIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201702\RateCard
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityGroup
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
     * @var long[] $companyIds
     */
    protected $companyIds = null;

    /**
     * @var int $impressionsLookback
     */
    protected $impressionsLookback = null;

    /**
     * @var int $clicksLookback
     */
    protected $clicksLookback = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $id
     * @param string $name
     * @param long[] $companyIds
     * @param int $impressionsLookback
     * @param int $clicksLookback
     * @param string $status
     */
    public function __construct($id = null, $name = null, array $companyIds = null, $impressionsLookback = null, $clicksLookback = null, $status = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->companyIds = $companyIds;
      $this->impressionsLookback = $impressionsLookback;
      $this->clicksLookback = $clicksLookback;
      $this->status = $status;
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
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup
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
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCompanyIds()
    {
      return $this->companyIds;
    }

    /**
     * @param long[] $companyIds
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup
     */
    public function setCompanyIds(array $companyIds)
    {
      $this->companyIds = $companyIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressionsLookback()
    {
      return $this->impressionsLookback;
    }

    /**
     * @param int $impressionsLookback
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup
     */
    public function setImpressionsLookback($impressionsLookback)
    {
      $this->impressionsLookback = $impressionsLookback;
      return $this;
    }

    /**
     * @return int
     */
    public function getClicksLookback()
    {
      return $this->clicksLookback;
    }

    /**
     * @param int $clicksLookback
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup
     */
    public function setClicksLookback($clicksLookback)
    {
      $this->clicksLookback = $clicksLookback;
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
     * @return \Google\AdsApi\Dfp\v201611\ActivityGroup
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdExclusionRule
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
     * @var boolean $isActive
     */
    protected $isActive = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\InventoryTargeting $inventoryTargeting
     */
    protected $inventoryTargeting = null;

    /**
     * @var boolean $isBlockAll
     */
    protected $isBlockAll = null;

    /**
     * @var long[] $blockedLabelIds
     */
    protected $blockedLabelIds = null;

    /**
     * @var long[] $allowedLabelIds
     */
    protected $allowedLabelIds = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param string $name
     * @param boolean $isActive
     * @param \Google\AdsApi\Dfp\v201702\InventoryTargeting $inventoryTargeting
     * @param boolean $isBlockAll
     * @param long[] $blockedLabelIds
     * @param long[] $allowedLabelIds
     * @param string $type
     */
    public function __construct($id = null, $name = null, $isActive = null, $inventoryTargeting = null, $isBlockAll = null, array $blockedLabelIds = null, array $allowedLabelIds = null, $type = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->isActive = $isActive;
      $this->inventoryTargeting = $inventoryTargeting;
      $this->isBlockAll = $isBlockAll;
      $this->blockedLabelIds = $blockedLabelIds;
      $this->allowedLabelIds = $allowedLabelIds;
      $this->type = $type;
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
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
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
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\InventoryTargeting
     */
    public function getInventoryTargeting()
    {
      return $this->inventoryTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\InventoryTargeting $inventoryTargeting
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setInventoryTargeting($inventoryTargeting)
    {
      $this->inventoryTargeting = $inventoryTargeting;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBlockAll()
    {
      return $this->isBlockAll;
    }

    /**
     * @param boolean $isBlockAll
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setIsBlockAll($isBlockAll)
    {
      $this->isBlockAll = $isBlockAll;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getBlockedLabelIds()
    {
      return $this->blockedLabelIds;
    }

    /**
     * @param long[] $blockedLabelIds
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setBlockedLabelIds(array $blockedLabelIds)
    {
      $this->blockedLabelIds = $blockedLabelIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAllowedLabelIds()
    {
      return $this->allowedLabelIds;
    }

    /**
     * @param long[] $allowedLabelIds
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setAllowedLabelIds(array $allowedLabelIds)
    {
      $this->allowedLabelIds = $allowedLabelIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\Dfp\v201702\AdExclusionRule
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}

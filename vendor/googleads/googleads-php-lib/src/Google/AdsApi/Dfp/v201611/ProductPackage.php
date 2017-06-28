<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPackage
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
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var long[] $rateCardIds
     */
    protected $rateCardIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $notes
     * @param string $status
     * @param boolean $isArchived
     * @param long[] $rateCardIds
     * @param \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\Dfp\v201611\DateTime $lastModifiedDateTime
     */
    public function __construct($id = null, $name = null, $notes = null, $status = null, $isArchived = null, array $rateCardIds = null, array $customFieldValues = null, $lastModifiedDateTime = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->notes = $notes;
      $this->status = $status;
      $this->isArchived = $isArchived;
      $this->rateCardIds = $rateCardIds;
      $this->customFieldValues = $customFieldValues;
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
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
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
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
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
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsArchived()
    {
      return $this->isArchived;
    }

    /**
     * @param boolean $isArchived
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRateCardIds()
    {
      return $this->rateCardIds;
    }

    /**
     * @param long[] $rateCardIds
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setRateCardIds(array $rateCardIds)
    {
      $this->rateCardIds = $rateCardIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201611\ProductPackage
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

}

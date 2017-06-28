<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Order
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
     * @var \Google\AdsApi\Dfp\v201702\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var boolean $unlimitedEndDateTime
     */
    protected $unlimitedEndDateTime = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var int $externalOrderId
     */
    protected $externalOrderId = null;

    /**
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @var long[] $advertiserContactIds
     */
    protected $advertiserContactIds = null;

    /**
     * @var int $agencyId
     */
    protected $agencyId = null;

    /**
     * @var long[] $agencyContactIds
     */
    protected $agencyContactIds = null;

    /**
     * @var int $creatorId
     */
    protected $creatorId = null;

    /**
     * @var int $traffickerId
     */
    protected $traffickerId = null;

    /**
     * @var long[] $secondaryTraffickerIds
     */
    protected $secondaryTraffickerIds = null;

    /**
     * @var int $salespersonId
     */
    protected $salespersonId = null;

    /**
     * @var long[] $secondarySalespersonIds
     */
    protected $secondarySalespersonIds = null;

    /**
     * @var int $totalImpressionsDelivered
     */
    protected $totalImpressionsDelivered = null;

    /**
     * @var int $totalClicksDelivered
     */
    protected $totalClicksDelivered = null;

    /**
     * @var int $totalViewableImpressionsDelivered
     */
    protected $totalViewableImpressionsDelivered = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\Money $totalBudget
     */
    protected $totalBudget = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var string $lastModifiedByApp
     */
    protected $lastModifiedByApp = null;

    /**
     * @var boolean $isProgrammatic
     */
    protected $isProgrammatic = null;

    /**
     * @var long[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201702\DateTime $startDateTime
     * @param \Google\AdsApi\Dfp\v201702\DateTime $endDateTime
     * @param boolean $unlimitedEndDateTime
     * @param string $status
     * @param boolean $isArchived
     * @param string $notes
     * @param int $externalOrderId
     * @param string $poNumber
     * @param string $currencyCode
     * @param int $advertiserId
     * @param long[] $advertiserContactIds
     * @param int $agencyId
     * @param long[] $agencyContactIds
     * @param int $creatorId
     * @param int $traffickerId
     * @param long[] $secondaryTraffickerIds
     * @param int $salespersonId
     * @param long[] $secondarySalespersonIds
     * @param int $totalImpressionsDelivered
     * @param int $totalClicksDelivered
     * @param int $totalViewableImpressionsDelivered
     * @param \Google\AdsApi\Dfp\v201702\Money $totalBudget
     * @param \Google\AdsApi\Dfp\v201702\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201702\AppliedLabel[] $effectiveAppliedLabels
     * @param string $lastModifiedByApp
     * @param boolean $isProgrammatic
     * @param long[] $appliedTeamIds
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201702\BaseCustomFieldValue[] $customFieldValues
     */
    public function __construct($id = null, $name = null, $startDateTime = null, $endDateTime = null, $unlimitedEndDateTime = null, $status = null, $isArchived = null, $notes = null, $externalOrderId = null, $poNumber = null, $currencyCode = null, $advertiserId = null, array $advertiserContactIds = null, $agencyId = null, array $agencyContactIds = null, $creatorId = null, $traffickerId = null, array $secondaryTraffickerIds = null, $salespersonId = null, array $secondarySalespersonIds = null, $totalImpressionsDelivered = null, $totalClicksDelivered = null, $totalViewableImpressionsDelivered = null, $totalBudget = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $lastModifiedByApp = null, $isProgrammatic = null, array $appliedTeamIds = null, $lastModifiedDateTime = null, array $customFieldValues = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->status = $status;
      $this->isArchived = $isArchived;
      $this->notes = $notes;
      $this->externalOrderId = $externalOrderId;
      $this->poNumber = $poNumber;
      $this->currencyCode = $currencyCode;
      $this->advertiserId = $advertiserId;
      $this->advertiserContactIds = $advertiserContactIds;
      $this->agencyId = $agencyId;
      $this->agencyContactIds = $agencyContactIds;
      $this->creatorId = $creatorId;
      $this->traffickerId = $traffickerId;
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      $this->salespersonId = $salespersonId;
      $this->secondarySalespersonIds = $secondarySalespersonIds;
      $this->totalImpressionsDelivered = $totalImpressionsDelivered;
      $this->totalClicksDelivered = $totalClicksDelivered;
      $this->totalViewableImpressionsDelivered = $totalViewableImpressionsDelivered;
      $this->totalBudget = $totalBudget;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->lastModifiedByApp = $lastModifiedByApp;
      $this->isProgrammatic = $isProgrammatic;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->customFieldValues = $customFieldValues;
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
     * @return \Google\AdsApi\Dfp\v201702\Order
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
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $startDateTime
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $endDateTime
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedEndDateTime()
    {
      return $this->unlimitedEndDateTime;
    }

    /**
     * @param boolean $unlimitedEndDateTime
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setUnlimitedEndDateTime($unlimitedEndDateTime)
    {
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
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
     * @return \Google\AdsApi\Dfp\v201702\Order
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
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
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
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalOrderId()
    {
      return $this->externalOrderId;
    }

    /**
     * @param int $externalOrderId
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setExternalOrderId($externalOrderId)
    {
      $this->externalOrderId = $externalOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->poNumber;
    }

    /**
     * @param string $poNumber
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
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
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
      return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = $advertiserId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAdvertiserContactIds()
    {
      return $this->advertiserContactIds;
    }

    /**
     * @param long[] $advertiserContactIds
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setAdvertiserContactIds(array $advertiserContactIds)
    {
      $this->advertiserContactIds = $advertiserContactIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyId()
    {
      return $this->agencyId;
    }

    /**
     * @param int $agencyId
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setAgencyId($agencyId)
    {
      $this->agencyId = $agencyId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAgencyContactIds()
    {
      return $this->agencyContactIds;
    }

    /**
     * @param long[] $agencyContactIds
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setAgencyContactIds(array $agencyContactIds)
    {
      $this->agencyContactIds = $agencyContactIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
      return $this->creatorId;
    }

    /**
     * @param int $creatorId
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setCreatorId($creatorId)
    {
      $this->creatorId = $creatorId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTraffickerId()
    {
      return $this->traffickerId;
    }

    /**
     * @param int $traffickerId
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setTraffickerId($traffickerId)
    {
      $this->traffickerId = $traffickerId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getSecondaryTraffickerIds()
    {
      return $this->secondaryTraffickerIds;
    }

    /**
     * @param long[] $secondaryTraffickerIds
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setSecondaryTraffickerIds(array $secondaryTraffickerIds)
    {
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalespersonId()
    {
      return $this->salespersonId;
    }

    /**
     * @param int $salespersonId
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setSalespersonId($salespersonId)
    {
      $this->salespersonId = $salespersonId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getSecondarySalespersonIds()
    {
      return $this->secondarySalespersonIds;
    }

    /**
     * @param long[] $secondarySalespersonIds
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setSecondarySalespersonIds(array $secondarySalespersonIds)
    {
      $this->secondarySalespersonIds = $secondarySalespersonIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalImpressionsDelivered()
    {
      return $this->totalImpressionsDelivered;
    }

    /**
     * @param int $totalImpressionsDelivered
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setTotalImpressionsDelivered($totalImpressionsDelivered)
    {
      $this->totalImpressionsDelivered = $totalImpressionsDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalClicksDelivered()
    {
      return $this->totalClicksDelivered;
    }

    /**
     * @param int $totalClicksDelivered
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setTotalClicksDelivered($totalClicksDelivered)
    {
      $this->totalClicksDelivered = $totalClicksDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalViewableImpressionsDelivered()
    {
      return $this->totalViewableImpressionsDelivered;
    }

    /**
     * @param int $totalViewableImpressionsDelivered
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setTotalViewableImpressionsDelivered($totalViewableImpressionsDelivered)
    {
      $this->totalViewableImpressionsDelivered = $totalViewableImpressionsDelivered;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Money
     */
    public function getTotalBudget()
    {
      return $this->totalBudget;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Money $totalBudget
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setTotalBudget($totalBudget)
    {
      $this->totalBudget = $totalBudget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\AppliedLabel[] $effectiveAppliedLabels
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedByApp()
    {
      return $this->lastModifiedByApp;
    }

    /**
     * @param string $lastModifiedByApp
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setLastModifiedByApp($lastModifiedByApp)
    {
      $this->lastModifiedByApp = $lastModifiedByApp;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProgrammatic()
    {
      return $this->isProgrammatic;
    }

    /**
     * @param boolean $isProgrammatic
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setIsProgrammatic($isProgrammatic)
    {
      $this->isProgrammatic = $isProgrammatic;
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
     * @return \Google\AdsApi\Dfp\v201702\Order
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
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\Dfp\v201702\Order
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

}

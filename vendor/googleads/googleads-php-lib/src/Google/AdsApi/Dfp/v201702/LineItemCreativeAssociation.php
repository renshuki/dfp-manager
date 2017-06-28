<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociation
{

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $creativeId
     */
    protected $creativeId = null;

    /**
     * @var int $creativeSetId
     */
    protected $creativeSetId = null;

    /**
     * @var float $manualCreativeRotationWeight
     */
    protected $manualCreativeRotationWeight = null;

    /**
     * @var int $sequentialCreativeRotationIndex
     */
    protected $sequentialCreativeRotationIndex = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $startDateTimeType
     */
    protected $startDateTimeType = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var string $destinationUrl
     */
    protected $destinationUrl = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\Size[] $sizes
     */
    protected $sizes = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociationStats $stats
     */
    protected $stats = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var string $targetingName
     */
    protected $targetingName = null;

    /**
     * @param int $lineItemId
     * @param int $creativeId
     * @param int $creativeSetId
     * @param float $manualCreativeRotationWeight
     * @param int $sequentialCreativeRotationIndex
     * @param \Google\AdsApi\Dfp\v201702\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\Dfp\v201702\DateTime $endDateTime
     * @param string $destinationUrl
     * @param \Google\AdsApi\Dfp\v201702\Size[] $sizes
     * @param string $status
     * @param \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociationStats $stats
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     * @param string $targetingName
     */
    public function __construct($lineItemId = null, $creativeId = null, $creativeSetId = null, $manualCreativeRotationWeight = null, $sequentialCreativeRotationIndex = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $destinationUrl = null, array $sizes = null, $status = null, $stats = null, $lastModifiedDateTime = null, $targetingName = null)
    {
      $this->lineItemId = $lineItemId;
      $this->creativeId = $creativeId;
      $this->creativeSetId = $creativeSetId;
      $this->manualCreativeRotationWeight = $manualCreativeRotationWeight;
      $this->sequentialCreativeRotationIndex = $sequentialCreativeRotationIndex;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->destinationUrl = $destinationUrl;
      $this->sizes = $sizes;
      $this->status = $status;
      $this->stats = $stats;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->targetingName = $targetingName;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
      return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setLineItemId($lineItemId)
    {
      $this->lineItemId = $lineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId()
    {
      return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setCreativeId($creativeId)
    {
      $this->creativeId = $creativeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeSetId()
    {
      return $this->creativeSetId;
    }

    /**
     * @param int $creativeSetId
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setCreativeSetId($creativeSetId)
    {
      $this->creativeSetId = $creativeSetId;
      return $this;
    }

    /**
     * @return float
     */
    public function getManualCreativeRotationWeight()
    {
      return $this->manualCreativeRotationWeight;
    }

    /**
     * @param float $manualCreativeRotationWeight
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setManualCreativeRotationWeight($manualCreativeRotationWeight)
    {
      $this->manualCreativeRotationWeight = $manualCreativeRotationWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequentialCreativeRotationIndex()
    {
      return $this->sequentialCreativeRotationIndex;
    }

    /**
     * @param int $sequentialCreativeRotationIndex
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setSequentialCreativeRotationIndex($sequentialCreativeRotationIndex)
    {
      $this->sequentialCreativeRotationIndex = $sequentialCreativeRotationIndex;
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
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeType()
    {
      return $this->startDateTimeType;
    }

    /**
     * @param string $startDateTimeType
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setStartDateTimeType($startDateTimeType)
    {
      $this->startDateTimeType = $startDateTimeType;
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
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->destinationUrl;
    }

    /**
     * @param string $destinationUrl
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setDestinationUrl($destinationUrl)
    {
      $this->destinationUrl = $destinationUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Size[]
     */
    public function getSizes()
    {
      return $this->sizes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Size[] $sizes
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setSizes(array $sizes)
    {
      $this->sizes = $sizes;
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
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociationStats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociationStats $stats
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
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
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingName()
    {
      return $this->targetingName;
    }

    /**
     * @param string $targetingName
     * @return \Google\AdsApi\Dfp\v201702\LineItemCreativeAssociation
     */
    public function setTargetingName($targetingName)
    {
      $this->targetingName = $targetingName;
      return $this;
    }

}

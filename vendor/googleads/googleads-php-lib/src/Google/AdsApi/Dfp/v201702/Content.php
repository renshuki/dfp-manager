<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Content
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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $statusDefinedBy
     */
    protected $statusDefinedBy = null;

    /**
     * @var string $daiIngestStatus
     */
    protected $daiIngestStatus = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DaiIngestError[] $daiIngestErrors
     */
    protected $daiIngestErrors = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $lastDaiIngestDateTime
     */
    protected $lastDaiIngestDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $importDateTime
     */
    protected $importDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var long[] $userDefinedCustomTargetingValueIds
     */
    protected $userDefinedCustomTargetingValueIds = null;

    /**
     * @var long[] $mappingRuleDefinedCustomTargetingValueIds
     */
    protected $mappingRuleDefinedCustomTargetingValueIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\CmsContent[] $cmsSources
     */
    protected $cmsSources = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $status
     * @param string $statusDefinedBy
     * @param string $daiIngestStatus
     * @param \Google\AdsApi\Dfp\v201702\DaiIngestError[] $daiIngestErrors
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastDaiIngestDateTime
     * @param \Google\AdsApi\Dfp\v201702\DateTime $importDateTime
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastModifiedDateTime
     * @param long[] $userDefinedCustomTargetingValueIds
     * @param long[] $mappingRuleDefinedCustomTargetingValueIds
     * @param \Google\AdsApi\Dfp\v201702\CmsContent[] $cmsSources
     */
    public function __construct($id = null, $name = null, $status = null, $statusDefinedBy = null, $daiIngestStatus = null, array $daiIngestErrors = null, $lastDaiIngestDateTime = null, $importDateTime = null, $lastModifiedDateTime = null, array $userDefinedCustomTargetingValueIds = null, array $mappingRuleDefinedCustomTargetingValueIds = null, array $cmsSources = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->statusDefinedBy = $statusDefinedBy;
      $this->daiIngestStatus = $daiIngestStatus;
      $this->daiIngestErrors = $daiIngestErrors;
      $this->lastDaiIngestDateTime = $lastDaiIngestDateTime;
      $this->importDateTime = $importDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->userDefinedCustomTargetingValueIds = $userDefinedCustomTargetingValueIds;
      $this->mappingRuleDefinedCustomTargetingValueIds = $mappingRuleDefinedCustomTargetingValueIds;
      $this->cmsSources = $cmsSources;
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
     * @return \Google\AdsApi\Dfp\v201702\Content
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
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDefinedBy()
    {
      return $this->statusDefinedBy;
    }

    /**
     * @param string $statusDefinedBy
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setStatusDefinedBy($statusDefinedBy)
    {
      $this->statusDefinedBy = $statusDefinedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getDaiIngestStatus()
    {
      return $this->daiIngestStatus;
    }

    /**
     * @param string $daiIngestStatus
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setDaiIngestStatus($daiIngestStatus)
    {
      $this->daiIngestStatus = $daiIngestStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DaiIngestError[]
     */
    public function getDaiIngestErrors()
    {
      return $this->daiIngestErrors;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DaiIngestError[] $daiIngestErrors
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setDaiIngestErrors(array $daiIngestErrors)
    {
      $this->daiIngestErrors = $daiIngestErrors;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DateTime
     */
    public function getLastDaiIngestDateTime()
    {
      return $this->lastDaiIngestDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $lastDaiIngestDateTime
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setLastDaiIngestDateTime($lastDaiIngestDateTime)
    {
      $this->lastDaiIngestDateTime = $lastDaiIngestDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DateTime
     */
    public function getImportDateTime()
    {
      return $this->importDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $importDateTime
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setImportDateTime($importDateTime)
    {
      $this->importDateTime = $importDateTime;
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
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getUserDefinedCustomTargetingValueIds()
    {
      return $this->userDefinedCustomTargetingValueIds;
    }

    /**
     * @param long[] $userDefinedCustomTargetingValueIds
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setUserDefinedCustomTargetingValueIds(array $userDefinedCustomTargetingValueIds)
    {
      $this->userDefinedCustomTargetingValueIds = $userDefinedCustomTargetingValueIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getMappingRuleDefinedCustomTargetingValueIds()
    {
      return $this->mappingRuleDefinedCustomTargetingValueIds;
    }

    /**
     * @param long[] $mappingRuleDefinedCustomTargetingValueIds
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setMappingRuleDefinedCustomTargetingValueIds(array $mappingRuleDefinedCustomTargetingValueIds)
    {
      $this->mappingRuleDefinedCustomTargetingValueIds = $mappingRuleDefinedCustomTargetingValueIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\CmsContent[]
     */
    public function getCmsSources()
    {
      return $this->cmsSources;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\CmsContent[] $cmsSources
     * @return \Google\AdsApi\Dfp\v201702\Content
     */
    public function setCmsSources(array $cmsSources)
    {
      $this->cmsSources = $cmsSources;
      return $this;
    }

}

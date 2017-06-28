<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Creative
{

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Size $size
     */
    protected $size = null;

    /**
     * @var string $previewUrl
     */
    protected $previewUrl = null;

    /**
     * @var string $policyViolations
     */
    protected $policyViolations = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201611\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201611\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201611\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue[] $customFieldValues
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null)
    {
      $this->advertiserId = $advertiserId;
      $this->id = $id;
      $this->name = $name;
      $this->size = $size;
      $this->previewUrl = $previewUrl;
      $this->policyViolations = $policyViolations;
      $this->appliedLabels = $appliedLabels;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->customFieldValues = $customFieldValues;
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
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = $advertiserId;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201611\Creative
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
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Size $size
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
      return $this->previewUrl;
    }

    /**
     * @param string $previewUrl
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setPreviewUrl($previewUrl)
    {
      $this->previewUrl = $previewUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyViolations()
    {
      return $this->policyViolations;
    }

    /**
     * @param string $policyViolations
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setPolicyViolations($policyViolations)
    {
      $this->policyViolations = $policyViolations;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
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
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
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
     * @return \Google\AdsApi\Dfp\v201611\Creative
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

}

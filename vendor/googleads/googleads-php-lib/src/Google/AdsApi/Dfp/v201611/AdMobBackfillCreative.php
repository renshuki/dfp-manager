<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdMobBackfillCreative extends \Google\AdsApi\Dfp\v201611\BaseDynamicAllocationCreative
{

    /**
     * @var string $additionalParameters
     */
    protected $additionalParameters = null;

    /**
     * @var string $publisherId
     */
    protected $publisherId = null;

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

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
     * @param string $additionalParameters
     * @param string $publisherId
     * @param string $lockedOrientation
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $additionalParameters = null, $publisherId = null, $lockedOrientation = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->additionalParameters = $additionalParameters;
      $this->publisherId = $publisherId;
      $this->lockedOrientation = $lockedOrientation;
    }

    /**
     * @return string
     */
    public function getAdditionalParameters()
    {
      return $this->additionalParameters;
    }

    /**
     * @param string $additionalParameters
     * @return \Google\AdsApi\Dfp\v201611\AdMobBackfillCreative
     */
    public function setAdditionalParameters($additionalParameters)
    {
      $this->additionalParameters = $additionalParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherId()
    {
      return $this->publisherId;
    }

    /**
     * @param string $publisherId
     * @return \Google\AdsApi\Dfp\v201611\AdMobBackfillCreative
     */
    public function setPublisherId($publisherId)
    {
      $this->publisherId = $publisherId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLockedOrientation()
    {
      return $this->lockedOrientation;
    }

    /**
     * @param string $lockedOrientation
     * @return \Google\AdsApi\Dfp\v201611\AdMobBackfillCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

}

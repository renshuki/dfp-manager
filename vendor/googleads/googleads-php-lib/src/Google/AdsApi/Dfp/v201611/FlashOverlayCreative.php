<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FlashOverlayCreative extends \Google\AdsApi\Dfp\v201611\BaseFlashCreative
{

    /**
     * @var long[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     */
    protected $trackingUrls = null;

    /**
     * @var string $customParameters
     */
    protected $customParameters = null;

    /**
     * @var string $apiFramework
     */
    protected $apiFramework = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var string $vastPreviewUrl
     */
    protected $vastPreviewUrl = null;

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
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param boolean $overrideSize
     * @param boolean $clickTagRequired
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param \Google\AdsApi\Dfp\v201611\CreativeAsset $flashAsset
     * @param \Google\AdsApi\Dfp\v201611\CreativeAsset $fallbackImageAsset
     * @param long[] $companionCreativeIds
     * @param \Google\AdsApi\Dfp\v201611\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param string $customParameters
     * @param string $apiFramework
     * @param int $duration
     * @param string $vastPreviewUrl
     * @param string $lockedOrientation
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $clickTagRequired = null, $sslScanResult = null, $sslManualOverride = null, $flashAsset = null, $fallbackImageAsset = null, array $companionCreativeIds = null, array $trackingUrls = null, $customParameters = null, $apiFramework = null, $duration = null, $vastPreviewUrl = null, $lockedOrientation = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $overrideSize, $clickTagRequired, $sslScanResult, $sslManualOverride, $flashAsset, $fallbackImageAsset);
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->customParameters = $customParameters;
      $this->apiFramework = $apiFramework;
      $this->duration = $duration;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->lockedOrientation = $lockedOrientation;
    }

    /**
     * @return long[]
     */
    public function getCompanionCreativeIds()
    {
      return $this->companionCreativeIds;
    }

    /**
     * @param long[] $companionCreativeIds
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setCompanionCreativeIds(array $companionCreativeIds)
    {
      $this->companionCreativeIds = $companionCreativeIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\ConversionEvent_TrackingUrlsMapEntry[]
     */
    public function getTrackingUrls()
    {
      return $this->trackingUrls;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setTrackingUrls(array $trackingUrls)
    {
      $this->trackingUrls = $trackingUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomParameters()
    {
      return $this->customParameters;
    }

    /**
     * @param string $customParameters
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setCustomParameters($customParameters)
    {
      $this->customParameters = $customParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getApiFramework()
    {
      return $this->apiFramework;
    }

    /**
     * @param string $apiFramework
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setApiFramework($apiFramework)
    {
      $this->apiFramework = $apiFramework;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param int $duration
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return string
     */
    public function getVastPreviewUrl()
    {
      return $this->vastPreviewUrl;
    }

    /**
     * @param string $vastPreviewUrl
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setVastPreviewUrl($vastPreviewUrl)
    {
      $this->vastPreviewUrl = $vastPreviewUrl;
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
     * @return \Google\AdsApi\Dfp\v201611\FlashOverlayCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

}

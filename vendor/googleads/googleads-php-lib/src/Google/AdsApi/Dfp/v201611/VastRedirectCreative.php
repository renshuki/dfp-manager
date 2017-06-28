<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VastRedirectCreative extends \Google\AdsApi\Dfp\v201611\Creative
{

    /**
     * @var string $vastXmlUrl
     */
    protected $vastXmlUrl = null;

    /**
     * @var string $vastRedirectType
     */
    protected $vastRedirectType = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

    /**
     * @var long[] $companionCreativeIds
     */
    protected $companionCreativeIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     */
    protected $trackingUrls = null;

    /**
     * @var string $vastPreviewUrl
     */
    protected $vastPreviewUrl = null;

    /**
     * @var string $sslScanResult
     */
    protected $sslScanResult = null;

    /**
     * @var string $sslManualOverride
     */
    protected $sslManualOverride = null;

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
     * @param string $vastXmlUrl
     * @param string $vastRedirectType
     * @param int $duration
     * @param long[] $companionCreativeIds
     * @param \Google\AdsApi\Dfp\v201611\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $vastXmlUrl = null, $vastRedirectType = null, $duration = null, array $companionCreativeIds = null, array $trackingUrls = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->vastXmlUrl = $vastXmlUrl;
      $this->vastRedirectType = $vastRedirectType;
      $this->duration = $duration;
      $this->companionCreativeIds = $companionCreativeIds;
      $this->trackingUrls = $trackingUrls;
      $this->vastPreviewUrl = $vastPreviewUrl;
      $this->sslScanResult = $sslScanResult;
      $this->sslManualOverride = $sslManualOverride;
    }

    /**
     * @return string
     */
    public function getVastXmlUrl()
    {
      return $this->vastXmlUrl;
    }

    /**
     * @param string $vastXmlUrl
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setVastXmlUrl($vastXmlUrl)
    {
      $this->vastXmlUrl = $vastXmlUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getVastRedirectType()
    {
      return $this->vastRedirectType;
    }

    /**
     * @param string $vastRedirectType
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setVastRedirectType($vastRedirectType)
    {
      $this->vastRedirectType = $vastRedirectType;
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
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
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
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setTrackingUrls(array $trackingUrls)
    {
      $this->trackingUrls = $trackingUrls;
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
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setVastPreviewUrl($vastPreviewUrl)
    {
      $this->vastPreviewUrl = $vastPreviewUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getSslScanResult()
    {
      return $this->sslScanResult;
    }

    /**
     * @param string $sslScanResult
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setSslScanResult($sslScanResult)
    {
      $this->sslScanResult = $sslScanResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getSslManualOverride()
    {
      return $this->sslManualOverride;
    }

    /**
     * @param string $sslManualOverride
     * @return \Google\AdsApi\Dfp\v201611\VastRedirectCreative
     */
    public function setSslManualOverride($sslManualOverride)
    {
      $this->sslManualOverride = $sslManualOverride;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FlashCreative extends \Google\AdsApi\Dfp\v201611\BaseFlashCreative
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\SwiffyFallbackAsset $swiffyAsset
     */
    protected $swiffyAsset = null;

    /**
     * @var boolean $createSwiffyAsset
     */
    protected $createSwiffyAsset = null;

    /**
     * @var string $lockedOrientation
     */
    protected $lockedOrientation = null;

    /**
     * @var boolean $clickTagOverlayEnabled
     */
    protected $clickTagOverlayEnabled = null;

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
     * @param \Google\AdsApi\Dfp\v201611\SwiffyFallbackAsset $swiffyAsset
     * @param boolean $createSwiffyAsset
     * @param string $lockedOrientation
     * @param boolean $clickTagOverlayEnabled
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $destinationUrl = null, $destinationUrlType = null, $overrideSize = null, $clickTagRequired = null, $sslScanResult = null, $sslManualOverride = null, $flashAsset = null, $fallbackImageAsset = null, $swiffyAsset = null, $createSwiffyAsset = null, $lockedOrientation = null, $clickTagOverlayEnabled = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $destinationUrl, $destinationUrlType, $overrideSize, $clickTagRequired, $sslScanResult, $sslManualOverride, $flashAsset, $fallbackImageAsset);
      $this->swiffyAsset = $swiffyAsset;
      $this->createSwiffyAsset = $createSwiffyAsset;
      $this->lockedOrientation = $lockedOrientation;
      $this->clickTagOverlayEnabled = $clickTagOverlayEnabled;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\SwiffyFallbackAsset
     */
    public function getSwiffyAsset()
    {
      return $this->swiffyAsset;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\SwiffyFallbackAsset $swiffyAsset
     * @return \Google\AdsApi\Dfp\v201611\FlashCreative
     */
    public function setSwiffyAsset($swiffyAsset)
    {
      $this->swiffyAsset = $swiffyAsset;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreateSwiffyAsset()
    {
      return $this->createSwiffyAsset;
    }

    /**
     * @param boolean $createSwiffyAsset
     * @return \Google\AdsApi\Dfp\v201611\FlashCreative
     */
    public function setCreateSwiffyAsset($createSwiffyAsset)
    {
      $this->createSwiffyAsset = $createSwiffyAsset;
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
     * @return \Google\AdsApi\Dfp\v201611\FlashCreative
     */
    public function setLockedOrientation($lockedOrientation)
    {
      $this->lockedOrientation = $lockedOrientation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getClickTagOverlayEnabled()
    {
      return $this->clickTagOverlayEnabled;
    }

    /**
     * @param boolean $clickTagOverlayEnabled
     * @return \Google\AdsApi\Dfp\v201611\FlashCreative
     */
    public function setClickTagOverlayEnabled($clickTagOverlayEnabled)
    {
      $this->clickTagOverlayEnabled = $clickTagOverlayEnabled;
      return $this;
    }

}

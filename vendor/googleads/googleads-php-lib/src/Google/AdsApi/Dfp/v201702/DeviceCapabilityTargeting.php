<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeviceCapabilityTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\Technology[] $targetedDeviceCapabilities
     */
    protected $targetedDeviceCapabilities = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\Technology[] $excludedDeviceCapabilities
     */
    protected $excludedDeviceCapabilities = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\Technology[] $targetedDeviceCapabilities
     * @param \Google\AdsApi\Dfp\v201702\Technology[] $excludedDeviceCapabilities
     */
    public function __construct(array $targetedDeviceCapabilities = null, array $excludedDeviceCapabilities = null)
    {
      $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
      $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Technology[]
     */
    public function getTargetedDeviceCapabilities()
    {
      return $this->targetedDeviceCapabilities;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Technology[] $targetedDeviceCapabilities
     * @return \Google\AdsApi\Dfp\v201702\DeviceCapabilityTargeting
     */
    public function setTargetedDeviceCapabilities(array $targetedDeviceCapabilities)
    {
      $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Technology[]
     */
    public function getExcludedDeviceCapabilities()
    {
      return $this->excludedDeviceCapabilities;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Technology[] $excludedDeviceCapabilities
     * @return \Google\AdsApi\Dfp\v201702\DeviceCapabilityTargeting
     */
    public function setExcludedDeviceCapabilities(array $excludedDeviceCapabilities)
    {
      $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductSegmentation
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\GeoTargeting $geoSegment
     */
    protected $geoSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\AdUnitTargeting[] $adUnitSegments
     */
    protected $adUnitSegments = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\PlacementTargeting $placementSegment
     */
    protected $placementSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\CustomCriteria[] $customTargetingSegment
     */
    protected $customTargetingSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\UserDomainTargeting $userDomainSegment
     */
    protected $userDomainSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\BandwidthGroupTargeting $bandwidthSegment
     */
    protected $bandwidthSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\BrowserTargeting $browserSegment
     */
    protected $browserSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\BrowserLanguageTargeting $browserLanguageSegment
     */
    protected $browserLanguageSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\OperatingSystemTargeting $operatingSystemSegment
     */
    protected $operatingSystemSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\MobileCarrierTargeting $mobileCarrierSegment
     */
    protected $mobileCarrierSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DeviceCapabilityTargeting $deviceCapabilitySegment
     */
    protected $deviceCapabilitySegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DeviceCategoryTargeting $deviceCategorySegment
     */
    protected $deviceCategorySegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\DeviceManufacturerTargeting $deviceManufacturerSegment
     */
    protected $deviceManufacturerSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\MobileDeviceTargeting $mobileDeviceSegment
     */
    protected $mobileDeviceSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     */
    protected $mobileDeviceSubmodelSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\VideoPositionTargeting $videoPositionSegment
     */
    protected $videoPositionSegment = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\GeoTargeting $geoSegment
     * @param \Google\AdsApi\Dfp\v201702\AdUnitTargeting[] $adUnitSegments
     * @param \Google\AdsApi\Dfp\v201702\PlacementTargeting $placementSegment
     * @param \Google\AdsApi\Dfp\v201702\CustomCriteria[] $customTargetingSegment
     * @param \Google\AdsApi\Dfp\v201702\UserDomainTargeting $userDomainSegment
     * @param \Google\AdsApi\Dfp\v201702\BandwidthGroupTargeting $bandwidthSegment
     * @param \Google\AdsApi\Dfp\v201702\BrowserTargeting $browserSegment
     * @param \Google\AdsApi\Dfp\v201702\BrowserLanguageTargeting $browserLanguageSegment
     * @param \Google\AdsApi\Dfp\v201702\OperatingSystemTargeting $operatingSystemSegment
     * @param \Google\AdsApi\Dfp\v201702\MobileCarrierTargeting $mobileCarrierSegment
     * @param \Google\AdsApi\Dfp\v201702\DeviceCapabilityTargeting $deviceCapabilitySegment
     * @param \Google\AdsApi\Dfp\v201702\DeviceCategoryTargeting $deviceCategorySegment
     * @param \Google\AdsApi\Dfp\v201702\DeviceManufacturerTargeting $deviceManufacturerSegment
     * @param \Google\AdsApi\Dfp\v201702\MobileDeviceTargeting $mobileDeviceSegment
     * @param \Google\AdsApi\Dfp\v201702\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     * @param \Google\AdsApi\Dfp\v201702\VideoPositionTargeting $videoPositionSegment
     */
    public function __construct($geoSegment = null, array $adUnitSegments = null, $placementSegment = null, array $customTargetingSegment = null, $userDomainSegment = null, $bandwidthSegment = null, $browserSegment = null, $browserLanguageSegment = null, $operatingSystemSegment = null, $mobileCarrierSegment = null, $deviceCapabilitySegment = null, $deviceCategorySegment = null, $deviceManufacturerSegment = null, $mobileDeviceSegment = null, $mobileDeviceSubmodelSegment = null, $videoPositionSegment = null)
    {
      $this->geoSegment = $geoSegment;
      $this->adUnitSegments = $adUnitSegments;
      $this->placementSegment = $placementSegment;
      $this->customTargetingSegment = $customTargetingSegment;
      $this->userDomainSegment = $userDomainSegment;
      $this->bandwidthSegment = $bandwidthSegment;
      $this->browserSegment = $browserSegment;
      $this->browserLanguageSegment = $browserLanguageSegment;
      $this->operatingSystemSegment = $operatingSystemSegment;
      $this->mobileCarrierSegment = $mobileCarrierSegment;
      $this->deviceCapabilitySegment = $deviceCapabilitySegment;
      $this->deviceCategorySegment = $deviceCategorySegment;
      $this->deviceManufacturerSegment = $deviceManufacturerSegment;
      $this->mobileDeviceSegment = $mobileDeviceSegment;
      $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      $this->videoPositionSegment = $videoPositionSegment;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\GeoTargeting
     */
    public function getGeoSegment()
    {
      return $this->geoSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\GeoTargeting $geoSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setGeoSegment($geoSegment)
    {
      $this->geoSegment = $geoSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\AdUnitTargeting[]
     */
    public function getAdUnitSegments()
    {
      return $this->adUnitSegments;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\AdUnitTargeting[] $adUnitSegments
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setAdUnitSegments(array $adUnitSegments)
    {
      $this->adUnitSegments = $adUnitSegments;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\PlacementTargeting
     */
    public function getPlacementSegment()
    {
      return $this->placementSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\PlacementTargeting $placementSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setPlacementSegment($placementSegment)
    {
      $this->placementSegment = $placementSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\CustomCriteria[]
     */
    public function getCustomTargetingSegment()
    {
      return $this->customTargetingSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\CustomCriteria[] $customTargetingSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setCustomTargetingSegment(array $customTargetingSegment)
    {
      $this->customTargetingSegment = $customTargetingSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\UserDomainTargeting
     */
    public function getUserDomainSegment()
    {
      return $this->userDomainSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\UserDomainTargeting $userDomainSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setUserDomainSegment($userDomainSegment)
    {
      $this->userDomainSegment = $userDomainSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\BandwidthGroupTargeting
     */
    public function getBandwidthSegment()
    {
      return $this->bandwidthSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\BandwidthGroupTargeting $bandwidthSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setBandwidthSegment($bandwidthSegment)
    {
      $this->bandwidthSegment = $bandwidthSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\BrowserTargeting
     */
    public function getBrowserSegment()
    {
      return $this->browserSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\BrowserTargeting $browserSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setBrowserSegment($browserSegment)
    {
      $this->browserSegment = $browserSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\BrowserLanguageTargeting
     */
    public function getBrowserLanguageSegment()
    {
      return $this->browserLanguageSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\BrowserLanguageTargeting $browserLanguageSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setBrowserLanguageSegment($browserLanguageSegment)
    {
      $this->browserLanguageSegment = $browserLanguageSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\OperatingSystemTargeting
     */
    public function getOperatingSystemSegment()
    {
      return $this->operatingSystemSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\OperatingSystemTargeting $operatingSystemSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setOperatingSystemSegment($operatingSystemSegment)
    {
      $this->operatingSystemSegment = $operatingSystemSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\MobileCarrierTargeting
     */
    public function getMobileCarrierSegment()
    {
      return $this->mobileCarrierSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\MobileCarrierTargeting $mobileCarrierSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setMobileCarrierSegment($mobileCarrierSegment)
    {
      $this->mobileCarrierSegment = $mobileCarrierSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DeviceCapabilityTargeting
     */
    public function getDeviceCapabilitySegment()
    {
      return $this->deviceCapabilitySegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DeviceCapabilityTargeting $deviceCapabilitySegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setDeviceCapabilitySegment($deviceCapabilitySegment)
    {
      $this->deviceCapabilitySegment = $deviceCapabilitySegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DeviceCategoryTargeting
     */
    public function getDeviceCategorySegment()
    {
      return $this->deviceCategorySegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DeviceCategoryTargeting $deviceCategorySegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setDeviceCategorySegment($deviceCategorySegment)
    {
      $this->deviceCategorySegment = $deviceCategorySegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DeviceManufacturerTargeting
     */
    public function getDeviceManufacturerSegment()
    {
      return $this->deviceManufacturerSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DeviceManufacturerTargeting $deviceManufacturerSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setDeviceManufacturerSegment($deviceManufacturerSegment)
    {
      $this->deviceManufacturerSegment = $deviceManufacturerSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\MobileDeviceTargeting
     */
    public function getMobileDeviceSegment()
    {
      return $this->mobileDeviceSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\MobileDeviceTargeting $mobileDeviceSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setMobileDeviceSegment($mobileDeviceSegment)
    {
      $this->mobileDeviceSegment = $mobileDeviceSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\MobileDeviceSubmodelTargeting
     */
    public function getMobileDeviceSubmodelSegment()
    {
      return $this->mobileDeviceSubmodelSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setMobileDeviceSubmodelSegment($mobileDeviceSubmodelSegment)
    {
      $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\VideoPositionTargeting
     */
    public function getVideoPositionSegment()
    {
      return $this->videoPositionSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\VideoPositionTargeting $videoPositionSegment
     * @return \Google\AdsApi\Dfp\v201702\ProductSegmentation
     */
    public function setVideoPositionSegment($videoPositionSegment)
    {
      $this->videoPositionSegment = $videoPositionSegment;
      return $this;
    }

}

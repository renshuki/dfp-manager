<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ThirdPartyRedirectAd extends \Google\AdsApi\AdWords\v201609\cm\RichMediaAd
{

    /**
     * @var boolean $isCookieTargeted
     */
    protected $isCookieTargeted = null;

    /**
     * @var boolean $isUserInterestTargeted
     */
    protected $isUserInterestTargeted = null;

    /**
     * @var boolean $isTagged
     */
    protected $isTagged = null;

    /**
     * @var string $videoTypes
     */
    protected $videoTypes = null;

    /**
     * @var string $expandingDirections
     */
    protected $expandingDirections = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201609\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201609\cm\CustomParameters $urlCustomParameters
     * @param string $type
     * @param int $devicePreference
     * @param string $AdType
     * @param string $name
     * @param \Google\AdsApi\AdWords\v201609\cm\Dimensions $dimensions
     * @param string $snippet
     * @param string $impressionBeaconUrl
     * @param int $adDuration
     * @param int $certifiedVendorFormatId
     * @param string $sourceUrl
     * @param string $richMediaAdType
     * @param string $adAttributes
     * @param boolean $isCookieTargeted
     * @param boolean $isUserInterestTargeted
     * @param boolean $isTagged
     * @param string $videoTypes
     * @param string $expandingDirections
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $type = null, $devicePreference = null, $AdType = null, $name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, $adAttributes = null, $isCookieTargeted = null, $isUserInterestTargeted = null, $isTagged = null, $videoTypes = null, $expandingDirections = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $type, $devicePreference, $AdType, $name, $dimensions, $snippet, $impressionBeaconUrl, $adDuration, $certifiedVendorFormatId, $sourceUrl, $richMediaAdType, $adAttributes);
      $this->isCookieTargeted = $isCookieTargeted;
      $this->isUserInterestTargeted = $isUserInterestTargeted;
      $this->isTagged = $isTagged;
      $this->videoTypes = $videoTypes;
      $this->expandingDirections = $expandingDirections;
    }

    /**
     * @return boolean
     */
    public function getIsCookieTargeted()
    {
      return $this->isCookieTargeted;
    }

    /**
     * @param boolean $isCookieTargeted
     * @return \Google\AdsApi\AdWords\v201609\cm\ThirdPartyRedirectAd
     */
    public function setIsCookieTargeted($isCookieTargeted)
    {
      $this->isCookieTargeted = $isCookieTargeted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUserInterestTargeted()
    {
      return $this->isUserInterestTargeted;
    }

    /**
     * @param boolean $isUserInterestTargeted
     * @return \Google\AdsApi\AdWords\v201609\cm\ThirdPartyRedirectAd
     */
    public function setIsUserInterestTargeted($isUserInterestTargeted)
    {
      $this->isUserInterestTargeted = $isUserInterestTargeted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTagged()
    {
      return $this->isTagged;
    }

    /**
     * @param boolean $isTagged
     * @return \Google\AdsApi\AdWords\v201609\cm\ThirdPartyRedirectAd
     */
    public function setIsTagged($isTagged)
    {
      $this->isTagged = $isTagged;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoTypes()
    {
      return $this->videoTypes;
    }

    /**
     * @param string $videoTypes
     * @return \Google\AdsApi\AdWords\v201609\cm\ThirdPartyRedirectAd
     */
    public function setVideoTypes($videoTypes)
    {
      $this->videoTypes = $videoTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpandingDirections()
    {
      return $this->expandingDirections;
    }

    /**
     * @param string $expandingDirections
     * @return \Google\AdsApi\AdWords\v201609\cm\ThirdPartyRedirectAd
     */
    public function setExpandingDirections($expandingDirections)
    {
      $this->expandingDirections = $expandingDirections;
      return $this;
    }

}

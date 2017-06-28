<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ImageAd extends \Google\AdsApi\AdWords\v201609\cm\Ad
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\Image $image
     */
    protected $image = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $adToCopyImageFrom
     */
    protected $adToCopyImageFrom = null;

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
     * @param \Google\AdsApi\AdWords\v201609\cm\Image $image
     * @param string $name
     * @param int $adToCopyImageFrom
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $type = null, $devicePreference = null, $AdType = null, $image = null, $name = null, $adToCopyImageFrom = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $urlCustomParameters, $type, $devicePreference, $AdType);
      $this->image = $image;
      $this->name = $name;
      $this->adToCopyImageFrom = $adToCopyImageFrom;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\Image
     */
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\Image $image
     * @return \Google\AdsApi\AdWords\v201609\cm\ImageAd
     */
    public function setImage($image)
    {
      $this->image = $image;
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
     * @return \Google\AdsApi\AdWords\v201609\cm\ImageAd
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdToCopyImageFrom()
    {
      return $this->adToCopyImageFrom;
    }

    /**
     * @param int $adToCopyImageFrom
     * @return \Google\AdsApi\AdWords\v201609\cm\ImageAd
     */
    public function setAdToCopyImageFrom($adToCopyImageFrom)
    {
      $this->adToCopyImageFrom = $adToCopyImageFrom;
      return $this;
    }

}

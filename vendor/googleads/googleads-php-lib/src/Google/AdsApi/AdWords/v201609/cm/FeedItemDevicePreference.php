<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemDevicePreference
{

    /**
     * @var int $devicePreference
     */
    protected $devicePreference = null;

    /**
     * @param int $devicePreference
     */
    public function __construct($devicePreference = null)
    {
      $this->devicePreference = $devicePreference;
    }

    /**
     * @return int
     */
    public function getDevicePreference()
    {
      return $this->devicePreference;
    }

    /**
     * @param int $devicePreference
     * @return \Google\AdsApi\AdWords\v201609\cm\FeedItemDevicePreference
     */
    public function setDevicePreference($devicePreference)
    {
      $this->devicePreference = $devicePreference;
      return $this;
    }

}

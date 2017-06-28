<?php

namespace Google\AdsApi\AdWords\v201702\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NetworkSearchParameter extends \Google\AdsApi\AdWords\v201702\o\SearchParameter
{

    /**
     * @var \Google\AdsApi\AdWords\v201702\cm\NetworkSetting $networkSetting
     */
    protected $networkSetting = null;

    /**
     * @param string $SearchParameterType
     * @param \Google\AdsApi\AdWords\v201702\cm\NetworkSetting $networkSetting
     */
    public function __construct($SearchParameterType = null, $networkSetting = null)
    {
      parent::__construct($SearchParameterType);
      $this->networkSetting = $networkSetting;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201702\cm\NetworkSetting
     */
    public function getNetworkSetting()
    {
      return $this->networkSetting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\cm\NetworkSetting $networkSetting
     * @return \Google\AdsApi\AdWords\v201702\o\NetworkSearchParameter
     */
    public function setNetworkSetting($networkSetting)
    {
      $this->networkSetting = $networkSetting;
      return $this;
    }

}

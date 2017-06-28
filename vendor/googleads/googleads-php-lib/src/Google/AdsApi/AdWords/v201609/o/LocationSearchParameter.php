<?php

namespace Google\AdsApi\AdWords\v201609\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LocationSearchParameter extends \Google\AdsApi\AdWords\v201609\o\SearchParameter
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\Location[] $locations
     */
    protected $locations = null;

    /**
     * @param string $SearchParameterType
     * @param \Google\AdsApi\AdWords\v201609\cm\Location[] $locations
     */
    public function __construct($SearchParameterType = null, array $locations = null)
    {
      parent::__construct($SearchParameterType);
      $this->locations = $locations;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\Location[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\Location[] $locations
     * @return \Google\AdsApi\AdWords\v201609\o\LocationSearchParameter
     */
    public function setLocations(array $locations)
    {
      $this->locations = $locations;
      return $this;
    }

}

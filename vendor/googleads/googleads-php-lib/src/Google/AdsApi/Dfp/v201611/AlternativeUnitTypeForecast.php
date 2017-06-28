<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AlternativeUnitTypeForecast
{

    /**
     * @var string $unitType
     */
    protected $unitType = null;

    /**
     * @var int $matchedUnits
     */
    protected $matchedUnits = null;

    /**
     * @var int $availableUnits
     */
    protected $availableUnits = null;

    /**
     * @var int $possibleUnits
     */
    protected $possibleUnits = null;

    /**
     * @param string $unitType
     * @param int $matchedUnits
     * @param int $availableUnits
     * @param int $possibleUnits
     */
    public function __construct($unitType = null, $matchedUnits = null, $availableUnits = null, $possibleUnits = null)
    {
      $this->unitType = $unitType;
      $this->matchedUnits = $matchedUnits;
      $this->availableUnits = $availableUnits;
      $this->possibleUnits = $possibleUnits;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
      return $this->unitType;
    }

    /**
     * @param string $unitType
     * @return \Google\AdsApi\Dfp\v201611\AlternativeUnitTypeForecast
     */
    public function setUnitType($unitType)
    {
      $this->unitType = $unitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMatchedUnits()
    {
      return $this->matchedUnits;
    }

    /**
     * @param int $matchedUnits
     * @return \Google\AdsApi\Dfp\v201611\AlternativeUnitTypeForecast
     */
    public function setMatchedUnits($matchedUnits)
    {
      $this->matchedUnits = $matchedUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailableUnits()
    {
      return $this->availableUnits;
    }

    /**
     * @param int $availableUnits
     * @return \Google\AdsApi\Dfp\v201611\AlternativeUnitTypeForecast
     */
    public function setAvailableUnits($availableUnits)
    {
      $this->availableUnits = $availableUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getPossibleUnits()
    {
      return $this->possibleUnits;
    }

    /**
     * @param int $possibleUnits
     * @return \Google\AdsApi\Dfp\v201611\AlternativeUnitTypeForecast
     */
    public function setPossibleUnits($possibleUnits)
    {
      $this->possibleUnits = $possibleUnits;
      return $this;
    }

}

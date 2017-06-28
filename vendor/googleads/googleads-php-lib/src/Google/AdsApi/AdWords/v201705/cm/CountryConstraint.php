<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CountryConstraint extends \Google\AdsApi\AdWords\v201705\cm\PolicyTopicConstraint
{

    /**
     * @var long[] $constrainedCountries
     */
    protected $constrainedCountries = null;

    /**
     * @var int $totalTargetedCountries
     */
    protected $totalTargetedCountries = null;

    /**
     * @param string $constraintType
     * @param string $PolicyTopicConstraintType
     * @param long[] $constrainedCountries
     * @param int $totalTargetedCountries
     */
    public function __construct($constraintType = null, $PolicyTopicConstraintType = null, array $constrainedCountries = null, $totalTargetedCountries = null)
    {
      parent::__construct($constraintType, $PolicyTopicConstraintType);
      $this->constrainedCountries = $constrainedCountries;
      $this->totalTargetedCountries = $totalTargetedCountries;
    }

    /**
     * @return long[]
     */
    public function getConstrainedCountries()
    {
      return $this->constrainedCountries;
    }

    /**
     * @param long[] $constrainedCountries
     * @return \Google\AdsApi\AdWords\v201705\cm\CountryConstraint
     */
    public function setConstrainedCountries(array $constrainedCountries)
    {
      $this->constrainedCountries = $constrainedCountries;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalTargetedCountries()
    {
      return $this->totalTargetedCountries;
    }

    /**
     * @param int $totalTargetedCountries
     * @return \Google\AdsApi\AdWords\v201705\cm\CountryConstraint
     */
    public function setTotalTargetedCountries($totalTargetedCountries)
    {
      $this->totalTargetedCountries = $totalTargetedCountries;
      return $this;
    }

}

<?php

namespace Google\AdsApi\AdWords\v201609\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LongComparisonOperation
{

    /**
     * @var int $minimum
     */
    protected $minimum = null;

    /**
     * @var int $maximum
     */
    protected $maximum = null;

    /**
     * @param int $minimum
     * @param int $maximum
     */
    public function __construct($minimum = null, $maximum = null)
    {
      $this->minimum = $minimum;
      $this->maximum = $maximum;
    }

    /**
     * @return int
     */
    public function getMinimum()
    {
      return $this->minimum;
    }

    /**
     * @param int $minimum
     * @return \Google\AdsApi\AdWords\v201609\o\LongComparisonOperation
     */
    public function setMinimum($minimum)
    {
      $this->minimum = $minimum;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
      return $this->maximum;
    }

    /**
     * @param int $maximum
     * @return \Google\AdsApi\AdWords\v201609\o\LongComparisonOperation
     */
    public function setMaximum($maximum)
    {
      $this->maximum = $maximum;
      return $this;
    }

}

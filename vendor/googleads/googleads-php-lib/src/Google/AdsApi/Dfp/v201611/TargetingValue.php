<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingValue extends \Google\AdsApi\Dfp\v201611\ObjectValue
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\Targeting $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\Targeting $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Targeting
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Targeting $value
     * @return \Google\AdsApi\Dfp\v201611\TargetingValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}

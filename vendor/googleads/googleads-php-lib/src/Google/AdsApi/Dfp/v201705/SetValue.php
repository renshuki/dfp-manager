<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SetValue extends \Google\AdsApi\Dfp\v201705\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\Value[] $values
     */
    protected $values = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\Value[] $values
     */
    public function __construct(array $values = null)
    {
      $this->values = $values;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\Value[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\Value[] $values
     * @return \Google\AdsApi\Dfp\v201705\SetValue
     */
    public function setValues(array $values)
    {
      $this->values = $values;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateRateCardsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\RateCard[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\RateCard[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\RateCard[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\RateCard[] $rval
     * @return \Google\AdsApi\Dfp\v201705\updateRateCardsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

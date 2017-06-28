<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createRateCardsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\RateCard[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\RateCard[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\RateCard[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\RateCard[] $rval
     * @return \Google\AdsApi\Dfp\v201611\createRateCardsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

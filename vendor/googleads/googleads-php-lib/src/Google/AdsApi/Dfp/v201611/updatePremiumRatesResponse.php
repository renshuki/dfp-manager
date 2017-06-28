<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updatePremiumRatesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\PremiumRate[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\PremiumRate[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\PremiumRate[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\PremiumRate[] $rval
     * @return \Google\AdsApi\Dfp\v201611\updatePremiumRatesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

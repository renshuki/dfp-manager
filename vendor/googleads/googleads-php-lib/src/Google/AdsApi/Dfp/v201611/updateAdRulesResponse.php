<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdRulesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\AdRule[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\AdRule[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\AdRule[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\AdRule[] $rval
     * @return \Google\AdsApi\Dfp\v201611\updateAdRulesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCreativesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\Creative[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\Creative[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\Creative[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\Creative[] $rval
     * @return \Google\AdsApi\Dfp\v201705\createCreativesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

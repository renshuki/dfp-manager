<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCurrentNetworkResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\Network $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\Network $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Network
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Network $rval
     * @return \Google\AdsApi\Dfp\v201702\getCurrentNetworkResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

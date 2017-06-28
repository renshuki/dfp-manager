<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCreativeSetResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\CreativeSet $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\CreativeSet $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\CreativeSet
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\CreativeSet $rval
     * @return \Google\AdsApi\Dfp\v201705\createCreativeSetResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

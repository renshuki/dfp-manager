<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class performSuggestedAdUnitActionResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\SuggestedAdUnitUpdateResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\SuggestedAdUnitUpdateResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\SuggestedAdUnitUpdateResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\SuggestedAdUnitUpdateResult $rval
     * @return \Google\AdsApi\Dfp\v201702\performSuggestedAdUnitActionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

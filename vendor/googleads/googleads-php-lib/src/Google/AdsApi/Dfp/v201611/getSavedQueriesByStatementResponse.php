<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSavedQueriesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\SavedQueryPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\SavedQueryPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\SavedQueryPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\SavedQueryPage $rval
     * @return \Google\AdsApi\Dfp\v201611\getSavedQueriesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

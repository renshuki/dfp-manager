<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentByStatementAndCustomTargetingValueResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\ContentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\ContentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ContentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ContentPage $rval
     * @return \Google\AdsApi\Dfp\v201702\getContentByStatementAndCustomTargetingValueResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

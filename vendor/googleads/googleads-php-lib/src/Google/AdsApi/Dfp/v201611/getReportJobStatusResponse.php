<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReportJobStatusResponse
{

    /**
     * @var string $rval
     */
    protected $rval = null;

    /**
     * @param string $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return string
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param string $rval
     * @return \Google\AdsApi\Dfp\v201611\getReportJobStatusResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

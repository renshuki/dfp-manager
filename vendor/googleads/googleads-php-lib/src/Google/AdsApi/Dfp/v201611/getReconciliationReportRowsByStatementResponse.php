<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationReportRowsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\ReconciliationReportRowPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\ReconciliationReportRowPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\ReconciliationReportRowPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\ReconciliationReportRowPage $rval
     * @return \Google\AdsApi\Dfp\v201611\getReconciliationReportRowsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

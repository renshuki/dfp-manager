<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateReconciliationReportRowsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\ReconciliationReportRow[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\ReconciliationReportRow[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ReconciliationReportRow[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ReconciliationReportRow[] $rval
     * @return \Google\AdsApi\Dfp\v201702\updateReconciliationReportRowsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

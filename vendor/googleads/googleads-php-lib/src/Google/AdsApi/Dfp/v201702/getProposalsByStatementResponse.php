<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getProposalsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\ProposalPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\ProposalPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ProposalPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ProposalPage $rval
     * @return \Google\AdsApi\Dfp\v201702\getProposalsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

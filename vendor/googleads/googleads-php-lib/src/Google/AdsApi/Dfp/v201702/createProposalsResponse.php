<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createProposalsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\Proposal[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\Proposal[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Proposal[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Proposal[] $rval
     * @return \Google\AdsApi\Dfp\v201702\createProposalsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

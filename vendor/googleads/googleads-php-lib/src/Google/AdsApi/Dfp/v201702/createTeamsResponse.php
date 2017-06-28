<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createTeamsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\Team[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\Team[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Team[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Team[] $rval
     * @return \Google\AdsApi\Dfp\v201702\createTeamsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createUsersResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\User[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\User[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\User[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\User[] $rval
     * @return \Google\AdsApi\Dfp\v201705\createUsersResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCustomTargetingKeysResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\CustomTargetingKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\CustomTargetingKey[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\CustomTargetingKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\CustomTargetingKey[] $rval
     * @return \Google\AdsApi\Dfp\v201611\createCustomTargetingKeysResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

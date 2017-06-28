<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\NativeStyle[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\NativeStyle[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\NativeStyle[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\NativeStyle[] $rval
     * @return \Google\AdsApi\Dfp\v201702\updateNativeStylesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

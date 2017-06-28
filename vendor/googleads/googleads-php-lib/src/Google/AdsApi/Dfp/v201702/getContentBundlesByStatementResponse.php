<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getContentBundlesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\ContentBundlePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\ContentBundlePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ContentBundlePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ContentBundlePage $rval
     * @return \Google\AdsApi\Dfp\v201702\getContentBundlesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

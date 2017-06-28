<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContendingLineItem
{

    /**
     * @var int $lineItemId
     */
    protected $lineItemId = null;

    /**
     * @var int $contendingImpressions
     */
    protected $contendingImpressions = null;

    /**
     * @param int $lineItemId
     * @param int $contendingImpressions
     */
    public function __construct($lineItemId = null, $contendingImpressions = null)
    {
      $this->lineItemId = $lineItemId;
      $this->contendingImpressions = $contendingImpressions;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
      return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     * @return \Google\AdsApi\Dfp\v201611\ContendingLineItem
     */
    public function setLineItemId($lineItemId)
    {
      $this->lineItemId = $lineItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getContendingImpressions()
    {
      return $this->contendingImpressions;
    }

    /**
     * @param int $contendingImpressions
     * @return \Google\AdsApi\Dfp\v201611\ContendingLineItem
     */
    public function setContendingImpressions($contendingImpressions)
    {
      $this->contendingImpressions = $contendingImpressions;
      return $this;
    }

}

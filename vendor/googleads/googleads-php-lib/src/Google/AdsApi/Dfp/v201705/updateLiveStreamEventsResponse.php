<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateLiveStreamEventsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\LiveStreamEvent[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\LiveStreamEvent[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\LiveStreamEvent[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\LiveStreamEvent[] $rval
     * @return \Google\AdsApi\Dfp\v201705\updateLiveStreamEventsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

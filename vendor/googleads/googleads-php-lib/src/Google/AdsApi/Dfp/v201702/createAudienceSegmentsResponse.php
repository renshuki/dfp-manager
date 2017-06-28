<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createAudienceSegmentsResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\FirstPartyAudienceSegment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\FirstPartyAudienceSegment[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\FirstPartyAudienceSegment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\FirstPartyAudienceSegment[] $rval
     * @return \Google\AdsApi\Dfp\v201702\createAudienceSegmentsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}

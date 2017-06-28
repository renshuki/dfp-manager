<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VideoPositionTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\VideoPositionTarget[] $targetedPositions
     */
    protected $targetedPositions = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\VideoPositionTarget[] $targetedPositions
     */
    public function __construct(array $targetedPositions = null)
    {
      $this->targetedPositions = $targetedPositions;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\VideoPositionTarget[]
     */
    public function getTargetedPositions()
    {
      return $this->targetedPositions;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\VideoPositionTarget[] $targetedPositions
     * @return \Google\AdsApi\Dfp\v201611\VideoPositionTargeting
     */
    public function setTargetedPositions(array $targetedPositions)
    {
      $this->targetedPositions = $targetedPositions;
      return $this;
    }

}

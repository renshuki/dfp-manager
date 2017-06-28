<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentCriteria extends \Google\AdsApi\Dfp\v201702\CustomCriteriaLeaf
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var long[] $audienceSegmentIds
     */
    protected $audienceSegmentIds = null;

    /**
     * @param string $operator
     * @param long[] $audienceSegmentIds
     */
    public function __construct($operator = null, array $audienceSegmentIds = null)
    {
      $this->operator = $operator;
      $this->audienceSegmentIds = $audienceSegmentIds;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Google\AdsApi\Dfp\v201702\AudienceSegmentCriteria
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAudienceSegmentIds()
    {
      return $this->audienceSegmentIds;
    }

    /**
     * @param long[] $audienceSegmentIds
     * @return \Google\AdsApi\Dfp\v201702\AudienceSegmentCriteria
     */
    public function setAudienceSegmentIds(array $audienceSegmentIds)
    {
      $this->audienceSegmentIds = $audienceSegmentIds;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplatePage
{

    /**
     * @var int $totalResultSetSize
     */
    protected $totalResultSetSize = null;

    /**
     * @var int $startIndex
     */
    protected $startIndex = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\LineItemTemplate[] $results
     */
    protected $results = null;

    /**
     * @param int $totalResultSetSize
     * @param int $startIndex
     * @param \Google\AdsApi\Dfp\v201611\LineItemTemplate[] $results
     */
    public function __construct($totalResultSetSize = null, $startIndex = null, array $results = null)
    {
      $this->totalResultSetSize = $totalResultSetSize;
      $this->startIndex = $startIndex;
      $this->results = $results;
    }

    /**
     * @return int
     */
    public function getTotalResultSetSize()
    {
      return $this->totalResultSetSize;
    }

    /**
     * @param int $totalResultSetSize
     * @return \Google\AdsApi\Dfp\v201611\LineItemTemplatePage
     */
    public function setTotalResultSetSize($totalResultSetSize)
    {
      $this->totalResultSetSize = $totalResultSetSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartIndex()
    {
      return $this->startIndex;
    }

    /**
     * @param int $startIndex
     * @return \Google\AdsApi\Dfp\v201611\LineItemTemplatePage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\LineItemTemplate[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\LineItemTemplate[] $results
     * @return \Google\AdsApi\Dfp\v201611\LineItemTemplatePage
     */
    public function setResults(array $results)
    {
      $this->results = $results;
      return $this;
    }

}

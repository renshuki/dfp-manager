<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExchangeRatePage
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\ExchangeRate[] $results
     */
    protected $results = null;

    /**
     * @var int $startIndex
     */
    protected $startIndex = null;

    /**
     * @var int $totalResultSetSize
     */
    protected $totalResultSetSize = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\ExchangeRate[] $results
     * @param int $startIndex
     * @param int $totalResultSetSize
     */
    public function __construct(array $results = null, $startIndex = null, $totalResultSetSize = null)
    {
      $this->results = $results;
      $this->startIndex = $startIndex;
      $this->totalResultSetSize = $totalResultSetSize;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRate[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\ExchangeRate[] $results
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRatePage
     */
    public function setResults(array $results)
    {
      $this->results = $results;
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
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRatePage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201611\ExchangeRatePage
     */
    public function setTotalResultSetSize($totalResultSetSize)
    {
      $this->totalResultSetSize = $totalResultSetSize;
      return $this;
    }

}

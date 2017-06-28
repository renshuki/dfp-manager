<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportJob
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\ReportQuery $reportQuery
     */
    protected $reportQuery = null;

    /**
     * @param int $id
     * @param \Google\AdsApi\Dfp\v201702\ReportQuery $reportQuery
     */
    public function __construct($id = null, $reportQuery = null)
    {
      $this->id = $id;
      $this->reportQuery = $reportQuery;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201702\ReportJob
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ReportQuery
     */
    public function getReportQuery()
    {
      return $this->reportQuery;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ReportQuery $reportQuery
     * @return \Google\AdsApi\Dfp\v201702\ReportJob
     */
    public function setReportQuery($reportQuery)
    {
      $this->reportQuery = $reportQuery;
      return $this;
    }

}

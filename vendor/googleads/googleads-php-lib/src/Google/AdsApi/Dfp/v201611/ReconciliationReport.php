<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationReport
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Date $startDate
     */
    protected $startDate = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @param int $id
     * @param string $status
     * @param \Google\AdsApi\Dfp\v201611\Date $startDate
     * @param string $notes
     */
    public function __construct($id = null, $status = null, $startDate = null, $notes = null)
    {
      $this->id = $id;
      $this->status = $status;
      $this->startDate = $startDate;
      $this->notes = $notes;
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
     * @return \Google\AdsApi\Dfp\v201611\ReconciliationReport
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\Dfp\v201611\ReconciliationReport
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Date $startDate
     * @return \Google\AdsApi\Dfp\v201611\ReconciliationReport
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Google\AdsApi\Dfp\v201611\ReconciliationReport
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

}

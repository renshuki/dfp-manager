<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LabelFrequencyCap
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\FrequencyCap $frequencyCap
     */
    protected $frequencyCap = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\FrequencyCap $frequencyCap
     * @param int $labelId
     */
    public function __construct($frequencyCap = null, $labelId = null)
    {
      $this->frequencyCap = $frequencyCap;
      $this->labelId = $labelId;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\FrequencyCap
     */
    public function getFrequencyCap()
    {
      return $this->frequencyCap;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\FrequencyCap $frequencyCap
     * @return \Google\AdsApi\Dfp\v201611\LabelFrequencyCap
     */
    public function setFrequencyCap($frequencyCap)
    {
      $this->frequencyCap = $frequencyCap;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->labelId;
    }

    /**
     * @param int $labelId
     * @return \Google\AdsApi\Dfp\v201611\LabelFrequencyCap
     */
    public function setLabelId($labelId)
    {
      $this->labelId = $labelId;
      return $this;
    }

}

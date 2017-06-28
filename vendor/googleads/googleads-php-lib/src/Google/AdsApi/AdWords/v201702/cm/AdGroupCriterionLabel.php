<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterionLabel
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var int $criterionId
     */
    protected $criterionId = null;

    /**
     * @var int $labelId
     */
    protected $labelId = null;

    /**
     * @param int $adGroupId
     * @param int $criterionId
     * @param int $labelId
     */
    public function __construct($adGroupId = null, $criterionId = null, $labelId = null)
    {
      $this->adGroupId = $adGroupId;
      $this->criterionId = $criterionId;
      $this->labelId = $labelId;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupCriterionLabel
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCriterionId()
    {
      return $this->criterionId;
    }

    /**
     * @param int $criterionId
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupCriterionLabel
     */
    public function setCriterionId($criterionId)
    {
      $this->criterionId = $criterionId;
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
     * @return \Google\AdsApi\AdWords\v201702\cm\AdGroupCriterionLabel
     */
    public function setLabelId($labelId)
    {
      $this->labelId = $labelId;
      return $this;
    }

}

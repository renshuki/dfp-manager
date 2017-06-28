<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterion
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $criterionUse
     */
    protected $criterionUse = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\Label[] $labels
     */
    protected $labels = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\cm\String_StringMapEntry[] $forwardCompatibilityMap
     */
    protected $forwardCompatibilityMap = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @var string $AdGroupCriterionType
     */
    protected $AdGroupCriterionType = null;

    /**
     * @param int $adGroupId
     * @param string $criterionUse
     * @param \Google\AdsApi\AdWords\v201705\cm\Criterion $criterion
     * @param \Google\AdsApi\AdWords\v201705\cm\Label[] $labels
     * @param \Google\AdsApi\AdWords\v201705\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     * @param string $AdGroupCriterionType
     */
    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, array $labels = null, array $forwardCompatibilityMap = null, $baseCampaignId = null, $baseAdGroupId = null, $AdGroupCriterionType = null)
    {
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->baseCampaignId = $baseCampaignId;
      $this->baseAdGroupId = $baseAdGroupId;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
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
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCriterionUse()
    {
      return $this->criterionUse;
    }

    /**
     * @param string $criterionUse
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setCriterionUse($criterionUse)
    {
      $this->criterionUse = $criterionUse;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\Label[]
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\Label[] $labels
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setLabels(array $labels)
    {
      $this->labels = $labels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\cm\String_StringMapEntry[]
     */
    public function getForwardCompatibilityMap()
    {
      return $this->forwardCompatibilityMap;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setForwardCompatibilityMap(array $forwardCompatibilityMap)
    {
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseCampaignId()
    {
      return $this->baseCampaignId;
    }

    /**
     * @param int $baseCampaignId
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = $baseCampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseAdGroupId()
    {
      return $this->baseAdGroupId;
    }

    /**
     * @param int $baseAdGroupId
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = $baseAdGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupCriterionType()
    {
      return $this->AdGroupCriterionType;
    }

    /**
     * @param string $AdGroupCriterionType
     * @return \Google\AdsApi\AdWords\v201705\cm\AdGroupCriterion
     */
    public function setAdGroupCriterionType($AdGroupCriterionType)
    {
      $this->AdGroupCriterionType = $AdGroupCriterionType;
      return $this;
    }

}

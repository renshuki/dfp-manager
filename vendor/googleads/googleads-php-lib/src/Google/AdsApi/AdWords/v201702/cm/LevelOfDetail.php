<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LevelOfDetail
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @param int $campaignId
     */
    public function __construct($campaignId = null)
    {
      $this->campaignId = $campaignId;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201702\cm\LevelOfDetail
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

}

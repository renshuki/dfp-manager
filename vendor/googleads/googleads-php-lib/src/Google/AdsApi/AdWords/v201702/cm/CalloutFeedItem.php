<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CalloutFeedItem extends \Google\AdsApi\AdWords\v201702\cm\ExtensionFeedItem
{

    /**
     * @var string $calloutText
     */
    protected $calloutText = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201702\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201702\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201702\cm\FeedItemCampaignTargeting $campaignTargeting
     * @param \Google\AdsApi\AdWords\v201702\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @param \Google\AdsApi\AdWords\v201702\cm\Keyword $keywordTargeting
     * @param \Google\AdsApi\AdWords\v201702\cm\Location $geoTargeting
     * @param \Google\AdsApi\AdWords\v201702\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201702\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     * @param string $calloutText
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policyData = null, $ExtensionFeedItemType = null, $calloutText = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policyData, $ExtensionFeedItemType);
      $this->calloutText = $calloutText;
    }

    /**
     * @return string
     */
    public function getCalloutText()
    {
      return $this->calloutText;
    }

    /**
     * @param string $calloutText
     * @return \Google\AdsApi\AdWords\v201702\cm\CalloutFeedItem
     */
    public function setCalloutText($calloutText)
    {
      $this->calloutText = $calloutText;
      return $this;
    }

}

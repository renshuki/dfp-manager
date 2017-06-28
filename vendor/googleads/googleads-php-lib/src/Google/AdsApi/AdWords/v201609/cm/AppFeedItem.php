<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AppFeedItem extends \Google\AdsApi\AdWords\v201609\cm\ExtensionFeedItem
{

    /**
     * @var string $appStore
     */
    protected $appStore = null;

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var string $appLinkText
     */
    protected $appLinkText = null;

    /**
     * @var string $appUrl
     */
    protected $appUrl = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\UrlList $appFinalUrls
     */
    protected $appFinalUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\UrlList $appFinalMobileUrls
     */
    protected $appFinalMobileUrls = null;

    /**
     * @var string $appTrackingUrlTemplate
     */
    protected $appTrackingUrlTemplate = null;

    /**
     * @var \Google\AdsApi\AdWords\v201609\cm\CustomParameters $appUrlCustomParameters
     */
    protected $appUrlCustomParameters = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedItemCampaignTargeting $campaignTargeting
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @param \Google\AdsApi\AdWords\v201609\cm\Keyword $keywordTargeting
     * @param \Google\AdsApi\AdWords\v201609\cm\Location $geoTargeting
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     * @param string $appStore
     * @param string $appId
     * @param string $appLinkText
     * @param string $appUrl
     * @param \Google\AdsApi\AdWords\v201609\cm\UrlList $appFinalUrls
     * @param \Google\AdsApi\AdWords\v201609\cm\UrlList $appFinalMobileUrls
     * @param string $appTrackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201609\cm\CustomParameters $appUrlCustomParameters
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policyData = null, $ExtensionFeedItemType = null, $appStore = null, $appId = null, $appLinkText = null, $appUrl = null, $appFinalUrls = null, $appFinalMobileUrls = null, $appTrackingUrlTemplate = null, $appUrlCustomParameters = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policyData, $ExtensionFeedItemType);
      $this->appStore = $appStore;
      $this->appId = $appId;
      $this->appLinkText = $appLinkText;
      $this->appUrl = $appUrl;
      $this->appFinalUrls = $appFinalUrls;
      $this->appFinalMobileUrls = $appFinalMobileUrls;
      $this->appTrackingUrlTemplate = $appTrackingUrlTemplate;
      $this->appUrlCustomParameters = $appUrlCustomParameters;
    }

    /**
     * @return string
     */
    public function getAppStore()
    {
      return $this->appStore;
    }

    /**
     * @param string $appStore
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppStore($appStore)
    {
      $this->appStore = $appStore;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppLinkText()
    {
      return $this->appLinkText;
    }

    /**
     * @param string $appLinkText
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppLinkText($appLinkText)
    {
      $this->appLinkText = $appLinkText;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppUrl()
    {
      return $this->appUrl;
    }

    /**
     * @param string $appUrl
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppUrl($appUrl)
    {
      $this->appUrl = $appUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\UrlList
     */
    public function getAppFinalUrls()
    {
      return $this->appFinalUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\UrlList $appFinalUrls
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppFinalUrls($appFinalUrls)
    {
      $this->appFinalUrls = $appFinalUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\UrlList
     */
    public function getAppFinalMobileUrls()
    {
      return $this->appFinalMobileUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\UrlList $appFinalMobileUrls
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppFinalMobileUrls($appFinalMobileUrls)
    {
      $this->appFinalMobileUrls = $appFinalMobileUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppTrackingUrlTemplate()
    {
      return $this->appTrackingUrlTemplate;
    }

    /**
     * @param string $appTrackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppTrackingUrlTemplate($appTrackingUrlTemplate)
    {
      $this->appTrackingUrlTemplate = $appTrackingUrlTemplate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\cm\CustomParameters
     */
    public function getAppUrlCustomParameters()
    {
      return $this->appUrlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\cm\CustomParameters $appUrlCustomParameters
     * @return \Google\AdsApi\AdWords\v201609\cm\AppFeedItem
     */
    public function setAppUrlCustomParameters($appUrlCustomParameters)
    {
      $this->appUrlCustomParameters = $appUrlCustomParameters;
      return $this;
    }

}

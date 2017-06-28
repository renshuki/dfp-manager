<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdUnit
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $parentId
     */
    protected $parentId = null;

    /**
     * @var boolean $hasChildren
     */
    protected $hasChildren = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\AdUnitParent[] $parentPath
     */
    protected $parentPath = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $targetWindow
     */
    protected $targetWindow = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $adUnitCode
     */
    protected $adUnitCode = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\AdUnitSize[] $adUnitSizes
     */
    protected $adUnitSizes = null;

    /**
     * @var boolean $explicitlyTargeted
     */
    protected $explicitlyTargeted = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\AdSenseSettings $adSenseSettings
     */
    protected $adSenseSettings = null;

    /**
     * @var string $adSenseSettingsSource
     */
    protected $adSenseSettingsSource = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[] $appliedLabelFrequencyCaps
     */
    protected $appliedLabelFrequencyCaps = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[] $effectiveLabelFrequencyCaps
     */
    protected $effectiveLabelFrequencyCaps = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var long[] $effectiveTeamIds
     */
    protected $effectiveTeamIds = null;

    /**
     * @var long[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var string $smartSizeMode
     */
    protected $smartSizeMode = null;

    /**
     * @var int $refreshRate
     */
    protected $refreshRate = null;

    /**
     * @var string $externalSetTopBoxChannelId
     */
    protected $externalSetTopBoxChannelId = null;

    /**
     * @var boolean $isSetTopBoxEnabled
     */
    protected $isSetTopBoxEnabled = null;

    /**
     * @param string $id
     * @param string $parentId
     * @param boolean $hasChildren
     * @param \Google\AdsApi\Dfp\v201705\AdUnitParent[] $parentPath
     * @param string $name
     * @param string $description
     * @param string $targetWindow
     * @param string $status
     * @param string $adUnitCode
     * @param \Google\AdsApi\Dfp\v201705\AdUnitSize[] $adUnitSizes
     * @param boolean $explicitlyTargeted
     * @param \Google\AdsApi\Dfp\v201705\AdSenseSettings $adSenseSettings
     * @param string $adSenseSettingsSource
     * @param \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[] $appliedLabelFrequencyCaps
     * @param \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[] $effectiveLabelFrequencyCaps
     * @param \Google\AdsApi\Dfp\v201705\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201705\AppliedLabel[] $effectiveAppliedLabels
     * @param long[] $effectiveTeamIds
     * @param long[] $appliedTeamIds
     * @param \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     * @param string $smartSizeMode
     * @param int $refreshRate
     * @param string $externalSetTopBoxChannelId
     * @param boolean $isSetTopBoxEnabled
     */
    public function __construct($id = null, $parentId = null, $hasChildren = null, array $parentPath = null, $name = null, $description = null, $targetWindow = null, $status = null, $adUnitCode = null, array $adUnitSizes = null, $explicitlyTargeted = null, $adSenseSettings = null, $adSenseSettingsSource = null, array $appliedLabelFrequencyCaps = null, array $effectiveLabelFrequencyCaps = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, array $effectiveTeamIds = null, array $appliedTeamIds = null, $lastModifiedDateTime = null, $smartSizeMode = null, $refreshRate = null, $externalSetTopBoxChannelId = null, $isSetTopBoxEnabled = null)
    {
      $this->id = $id;
      $this->parentId = $parentId;
      $this->hasChildren = $hasChildren;
      $this->parentPath = $parentPath;
      $this->name = $name;
      $this->description = $description;
      $this->targetWindow = $targetWindow;
      $this->status = $status;
      $this->adUnitCode = $adUnitCode;
      $this->adUnitSizes = $adUnitSizes;
      $this->explicitlyTargeted = $explicitlyTargeted;
      $this->adSenseSettings = $adSenseSettings;
      $this->adSenseSettingsSource = $adSenseSettingsSource;
      $this->appliedLabelFrequencyCaps = $appliedLabelFrequencyCaps;
      $this->effectiveLabelFrequencyCaps = $effectiveLabelFrequencyCaps;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->effectiveTeamIds = $effectiveTeamIds;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->smartSizeMode = $smartSizeMode;
      $this->refreshRate = $refreshRate;
      $this->externalSetTopBoxChannelId = $externalSetTopBoxChannelId;
      $this->isSetTopBoxEnabled = $isSetTopBoxEnabled;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param string $parentId
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setParentId($parentId)
    {
      $this->parentId = $parentId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasChildren()
    {
      return $this->hasChildren;
    }

    /**
     * @param boolean $hasChildren
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setHasChildren($hasChildren)
    {
      $this->hasChildren = $hasChildren;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\AdUnitParent[]
     */
    public function getParentPath()
    {
      return $this->parentPath;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\AdUnitParent[] $parentPath
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setParentPath(array $parentPath)
    {
      $this->parentPath = $parentPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetWindow()
    {
      return $this->targetWindow;
    }

    /**
     * @param string $targetWindow
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setTargetWindow($targetWindow)
    {
      $this->targetWindow = $targetWindow;
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
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdUnitCode()
    {
      return $this->adUnitCode;
    }

    /**
     * @param string $adUnitCode
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAdUnitCode($adUnitCode)
    {
      $this->adUnitCode = $adUnitCode;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\AdUnitSize[]
     */
    public function getAdUnitSizes()
    {
      return $this->adUnitSizes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\AdUnitSize[] $adUnitSizes
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAdUnitSizes(array $adUnitSizes)
    {
      $this->adUnitSizes = $adUnitSizes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExplicitlyTargeted()
    {
      return $this->explicitlyTargeted;
    }

    /**
     * @param boolean $explicitlyTargeted
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setExplicitlyTargeted($explicitlyTargeted)
    {
      $this->explicitlyTargeted = $explicitlyTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\AdSenseSettings
     */
    public function getAdSenseSettings()
    {
      return $this->adSenseSettings;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\AdSenseSettings $adSenseSettings
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAdSenseSettings($adSenseSettings)
    {
      $this->adSenseSettings = $adSenseSettings;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdSenseSettingsSource()
    {
      return $this->adSenseSettingsSource;
    }

    /**
     * @param string $adSenseSettingsSource
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAdSenseSettingsSource($adSenseSettingsSource)
    {
      $this->adSenseSettingsSource = $adSenseSettingsSource;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[]
     */
    public function getAppliedLabelFrequencyCaps()
    {
      return $this->appliedLabelFrequencyCaps;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[] $appliedLabelFrequencyCaps
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAppliedLabelFrequencyCaps(array $appliedLabelFrequencyCaps)
    {
      $this->appliedLabelFrequencyCaps = $appliedLabelFrequencyCaps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[]
     */
    public function getEffectiveLabelFrequencyCaps()
    {
      return $this->effectiveLabelFrequencyCaps;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\LabelFrequencyCap[] $effectiveLabelFrequencyCaps
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setEffectiveLabelFrequencyCaps(array $effectiveLabelFrequencyCaps)
    {
      $this->effectiveLabelFrequencyCaps = $effectiveLabelFrequencyCaps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\AppliedLabel[] $effectiveAppliedLabels
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getEffectiveTeamIds()
    {
      return $this->effectiveTeamIds;
    }

    /**
     * @param long[] $effectiveTeamIds
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setEffectiveTeamIds(array $effectiveTeamIds)
    {
      $this->effectiveTeamIds = $effectiveTeamIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAppliedTeamIds()
    {
      return $this->appliedTeamIds;
    }

    /**
     * @param long[] $appliedTeamIds
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setAppliedTeamIds(array $appliedTeamIds)
    {
      $this->appliedTeamIds = $appliedTeamIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmartSizeMode()
    {
      return $this->smartSizeMode;
    }

    /**
     * @param string $smartSizeMode
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setSmartSizeMode($smartSizeMode)
    {
      $this->smartSizeMode = $smartSizeMode;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefreshRate()
    {
      return $this->refreshRate;
    }

    /**
     * @param int $refreshRate
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setRefreshRate($refreshRate)
    {
      $this->refreshRate = $refreshRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalSetTopBoxChannelId()
    {
      return $this->externalSetTopBoxChannelId;
    }

    /**
     * @param string $externalSetTopBoxChannelId
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setExternalSetTopBoxChannelId($externalSetTopBoxChannelId)
    {
      $this->externalSetTopBoxChannelId = $externalSetTopBoxChannelId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSetTopBoxEnabled()
    {
      return $this->isSetTopBoxEnabled;
    }

    /**
     * @param boolean $isSetTopBoxEnabled
     * @return \Google\AdsApi\Dfp\v201705\AdUnit
     */
    public function setIsSetTopBoxEnabled($isSetTopBoxEnabled)
    {
      $this->isSetTopBoxEnabled = $isSetTopBoxEnabled;
      return $this;
    }

}

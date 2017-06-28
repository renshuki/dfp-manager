<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemConstraints
{

    /**
     * @var boolean $allowCreativePlaceholdersCustomization
     */
    protected $allowCreativePlaceholdersCustomization = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\CreativePlaceholder[] $builtInCreativePlaceholders
     */
    protected $builtInCreativePlaceholders = null;

    /**
     * @var string $builtInRoadblockingType
     */
    protected $builtInRoadblockingType = null;

    /**
     * @var string $builtInDeliveryRateType
     */
    protected $builtInDeliveryRateType = null;

    /**
     * @var string $builtInCreativeRotationType
     */
    protected $builtInCreativeRotationType = null;

    /**
     * @var string $builtInCompanionDeliveryOption
     */
    protected $builtInCompanionDeliveryOption = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\FrequencyCap[] $builtInFrequencyCaps
     */
    protected $builtInFrequencyCaps = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Targeting $productBuiltInTargeting
     */
    protected $productBuiltInTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\CustomizableAttributes $customizableAttributes
     */
    protected $customizableAttributes = null;

    /**
     * @param boolean $allowCreativePlaceholdersCustomization
     * @param \Google\AdsApi\Dfp\v201611\CreativePlaceholder[] $builtInCreativePlaceholders
     * @param string $builtInRoadblockingType
     * @param string $builtInDeliveryRateType
     * @param string $builtInCreativeRotationType
     * @param string $builtInCompanionDeliveryOption
     * @param \Google\AdsApi\Dfp\v201611\FrequencyCap[] $builtInFrequencyCaps
     * @param \Google\AdsApi\Dfp\v201611\Targeting $productBuiltInTargeting
     * @param \Google\AdsApi\Dfp\v201611\CustomizableAttributes $customizableAttributes
     */
    public function __construct($allowCreativePlaceholdersCustomization = null, array $builtInCreativePlaceholders = null, $builtInRoadblockingType = null, $builtInDeliveryRateType = null, $builtInCreativeRotationType = null, $builtInCompanionDeliveryOption = null, array $builtInFrequencyCaps = null, $productBuiltInTargeting = null, $customizableAttributes = null)
    {
      $this->allowCreativePlaceholdersCustomization = $allowCreativePlaceholdersCustomization;
      $this->builtInCreativePlaceholders = $builtInCreativePlaceholders;
      $this->builtInRoadblockingType = $builtInRoadblockingType;
      $this->builtInDeliveryRateType = $builtInDeliveryRateType;
      $this->builtInCreativeRotationType = $builtInCreativeRotationType;
      $this->builtInCompanionDeliveryOption = $builtInCompanionDeliveryOption;
      $this->builtInFrequencyCaps = $builtInFrequencyCaps;
      $this->productBuiltInTargeting = $productBuiltInTargeting;
      $this->customizableAttributes = $customizableAttributes;
    }

    /**
     * @return boolean
     */
    public function getAllowCreativePlaceholdersCustomization()
    {
      return $this->allowCreativePlaceholdersCustomization;
    }

    /**
     * @param boolean $allowCreativePlaceholdersCustomization
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setAllowCreativePlaceholdersCustomization($allowCreativePlaceholdersCustomization)
    {
      $this->allowCreativePlaceholdersCustomization = $allowCreativePlaceholdersCustomization;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\CreativePlaceholder[]
     */
    public function getBuiltInCreativePlaceholders()
    {
      return $this->builtInCreativePlaceholders;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\CreativePlaceholder[] $builtInCreativePlaceholders
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setBuiltInCreativePlaceholders(array $builtInCreativePlaceholders)
    {
      $this->builtInCreativePlaceholders = $builtInCreativePlaceholders;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuiltInRoadblockingType()
    {
      return $this->builtInRoadblockingType;
    }

    /**
     * @param string $builtInRoadblockingType
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setBuiltInRoadblockingType($builtInRoadblockingType)
    {
      $this->builtInRoadblockingType = $builtInRoadblockingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuiltInDeliveryRateType()
    {
      return $this->builtInDeliveryRateType;
    }

    /**
     * @param string $builtInDeliveryRateType
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setBuiltInDeliveryRateType($builtInDeliveryRateType)
    {
      $this->builtInDeliveryRateType = $builtInDeliveryRateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuiltInCreativeRotationType()
    {
      return $this->builtInCreativeRotationType;
    }

    /**
     * @param string $builtInCreativeRotationType
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setBuiltInCreativeRotationType($builtInCreativeRotationType)
    {
      $this->builtInCreativeRotationType = $builtInCreativeRotationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuiltInCompanionDeliveryOption()
    {
      return $this->builtInCompanionDeliveryOption;
    }

    /**
     * @param string $builtInCompanionDeliveryOption
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setBuiltInCompanionDeliveryOption($builtInCompanionDeliveryOption)
    {
      $this->builtInCompanionDeliveryOption = $builtInCompanionDeliveryOption;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\FrequencyCap[]
     */
    public function getBuiltInFrequencyCaps()
    {
      return $this->builtInFrequencyCaps;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\FrequencyCap[] $builtInFrequencyCaps
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setBuiltInFrequencyCaps(array $builtInFrequencyCaps)
    {
      $this->builtInFrequencyCaps = $builtInFrequencyCaps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Targeting
     */
    public function getProductBuiltInTargeting()
    {
      return $this->productBuiltInTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Targeting $productBuiltInTargeting
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setProductBuiltInTargeting($productBuiltInTargeting)
    {
      $this->productBuiltInTargeting = $productBuiltInTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\CustomizableAttributes
     */
    public function getCustomizableAttributes()
    {
      return $this->customizableAttributes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\CustomizableAttributes $customizableAttributes
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemConstraints
     */
    public function setCustomizableAttributes($customizableAttributes)
    {
      $this->customizableAttributes = $customizableAttributes;
      return $this;
    }

}

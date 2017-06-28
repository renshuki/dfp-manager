<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportQuery
{

    /**
     * @var string $dimensions
     */
    protected $dimensions = null;

    /**
     * @var string $adUnitView
     */
    protected $adUnitView = null;

    /**
     * @var string $columns
     */
    protected $columns = null;

    /**
     * @var string $dimensionAttributes
     */
    protected $dimensionAttributes = null;

    /**
     * @var long[] $customFieldIds
     */
    protected $customFieldIds = null;

    /**
     * @var long[] $contentMetadataKeyHierarchyCustomTargetingKeyIds
     */
    protected $contentMetadataKeyHierarchyCustomTargetingKeyIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Date $startDate
     */
    protected $startDate = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Date $endDate
     */
    protected $endDate = null;

    /**
     * @var string $dateRangeType
     */
    protected $dateRangeType = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\Statement $statement
     */
    protected $statement = null;

    /**
     * @var boolean $useSalesLocalTimeZone
     */
    protected $useSalesLocalTimeZone = null;

    /**
     * @var boolean $includeZeroSalesRows
     */
    protected $includeZeroSalesRows = null;

    /**
     * @param string $dimensions
     * @param string $adUnitView
     * @param string $columns
     * @param string $dimensionAttributes
     * @param long[] $customFieldIds
     * @param long[] $contentMetadataKeyHierarchyCustomTargetingKeyIds
     * @param \Google\AdsApi\Dfp\v201611\Date $startDate
     * @param \Google\AdsApi\Dfp\v201611\Date $endDate
     * @param string $dateRangeType
     * @param \Google\AdsApi\Dfp\v201611\Statement $statement
     * @param boolean $useSalesLocalTimeZone
     * @param boolean $includeZeroSalesRows
     */
    public function __construct($dimensions = null, $adUnitView = null, $columns = null, $dimensionAttributes = null, array $customFieldIds = null, array $contentMetadataKeyHierarchyCustomTargetingKeyIds = null, $startDate = null, $endDate = null, $dateRangeType = null, $statement = null, $useSalesLocalTimeZone = null, $includeZeroSalesRows = null)
    {
      $this->dimensions = $dimensions;
      $this->adUnitView = $adUnitView;
      $this->columns = $columns;
      $this->dimensionAttributes = $dimensionAttributes;
      $this->customFieldIds = $customFieldIds;
      $this->contentMetadataKeyHierarchyCustomTargetingKeyIds = $contentMetadataKeyHierarchyCustomTargetingKeyIds;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->dateRangeType = $dateRangeType;
      $this->statement = $statement;
      $this->useSalesLocalTimeZone = $useSalesLocalTimeZone;
      $this->includeZeroSalesRows = $includeZeroSalesRows;
    }

    /**
     * @return string
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param string $dimensions
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setDimensions($dimensions)
    {
      $this->dimensions = $dimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdUnitView()
    {
      return $this->adUnitView;
    }

    /**
     * @param string $adUnitView
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setAdUnitView($adUnitView)
    {
      $this->adUnitView = $adUnitView;
      return $this;
    }

    /**
     * @return string
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param string $columns
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
      return $this;
    }

    /**
     * @return string
     */
    public function getDimensionAttributes()
    {
      return $this->dimensionAttributes;
    }

    /**
     * @param string $dimensionAttributes
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setDimensionAttributes($dimensionAttributes)
    {
      $this->dimensionAttributes = $dimensionAttributes;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCustomFieldIds()
    {
      return $this->customFieldIds;
    }

    /**
     * @param long[] $customFieldIds
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setCustomFieldIds(array $customFieldIds)
    {
      $this->customFieldIds = $customFieldIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getContentMetadataKeyHierarchyCustomTargetingKeyIds()
    {
      return $this->contentMetadataKeyHierarchyCustomTargetingKeyIds;
    }

    /**
     * @param long[] $contentMetadataKeyHierarchyCustomTargetingKeyIds
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setContentMetadataKeyHierarchyCustomTargetingKeyIds(array $contentMetadataKeyHierarchyCustomTargetingKeyIds)
    {
      $this->contentMetadataKeyHierarchyCustomTargetingKeyIds = $contentMetadataKeyHierarchyCustomTargetingKeyIds;
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
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Date $endDate
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateRangeType()
    {
      return $this->dateRangeType;
    }

    /**
     * @param string $dateRangeType
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setDateRangeType($dateRangeType)
    {
      $this->dateRangeType = $dateRangeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Statement
     */
    public function getStatement()
    {
      return $this->statement;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Statement $statement
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setStatement($statement)
    {
      $this->statement = $statement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseSalesLocalTimeZone()
    {
      return $this->useSalesLocalTimeZone;
    }

    /**
     * @param boolean $useSalesLocalTimeZone
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setUseSalesLocalTimeZone($useSalesLocalTimeZone)
    {
      $this->useSalesLocalTimeZone = $useSalesLocalTimeZone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeZeroSalesRows()
    {
      return $this->includeZeroSalesRows;
    }

    /**
     * @param boolean $includeZeroSalesRows
     * @return \Google\AdsApi\Dfp\v201611\ReportQuery
     */
    public function setIncludeZeroSalesRows($includeZeroSalesRows)
    {
      $this->includeZeroSalesRows = $includeZeroSalesRows;
      return $this;
    }

}

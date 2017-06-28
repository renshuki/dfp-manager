<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201702\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201702\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201702\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201702\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201702\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201702\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201702\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201702\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201702\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201702\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201702\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201702\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201702\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201702\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201702\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201702\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201702\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemCreativeAssociationError',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201702\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201702\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201702\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201702\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201702\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201702\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201702\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201702\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ReleaseLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201702\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201702\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201702\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201702\\Stats',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201702\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201702\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201702\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201702\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201702\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201702\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201702\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201702\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201702\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201702\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/LineItemService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201702\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function createLineItems(array $lineItems)
    {
      return $this->__soapCall('createLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

    /**
     * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table><tr><th>PQL property</th><th>Entity property</th></tr><tr><td><code>CostType</code></td><td>{@link LineItem#costType}</td></tr><tr><td><code>CreationDateTime</code></td><td>{@link LineItem#creationDateTime}</td></tr><tr><td><code>DeliveryRateType</code></td><td>{@link LineItem#deliveryRateType}</td></tr><tr><td><code>EndDateTime</code></td><td>{@link LineItem#endDateTime}</td></tr><tr><td><code>ExternalId</code></td><td>{@link LineItem#externalId}</td></tr><tr><td><code>Id</code></td><td>{@link LineItem#id}</td></tr><tr><td><code>IsMissingCreatives</code></td><td>{@link LineItem#isMissingCreatives}</td></tr><tr><td><code>IsSetTopBoxEnabled</code></td><td>{@link LineItem#isSetTopBoxEnabled}</td></tr><tr><td><code>LastModifiedDateTime</code></td><td>{@link LineItem#lastModifiedDateTime}</td></tr><tr><td><code>LineItemType</code></td><td>{@link LineItem#lineItemType}</td></tr><tr><td><code>Name</code></td><td>{@link LineItem#name}</td></tr><tr><td><code>OrderId</code></td><td>{@link LineItem#orderId}</td></tr><tr><td><code>StartDateTime</code></td><td>{@link LineItem#startDateTime}</td></tr><tr><td><code>Status</code></td><td>{@link LineItem#status}</td></tr><tr><td><code>Targeting</code></td><td>{@link LineItem#targeting}</td></tr><tr><td><code>UnitsBought</code></td><td>{@link LineItem#unitsBought}</td></tr></table>
     * a set of line items.
     *
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\LineItemPage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\Dfp\v201702\LineItemAction $lineItemAction
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\Dfp\v201702\LineItemAction $lineItemAction, \Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201702\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}

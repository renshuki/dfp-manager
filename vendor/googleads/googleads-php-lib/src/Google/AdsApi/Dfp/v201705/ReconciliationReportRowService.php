<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationReportRowService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201705\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'ReconciliationError' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationError',
      'ReconciliationImportError' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationImportError',
      'ReconciliationReportRow' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationReportRow',
      'ReconciliationReportRowPage' => 'Google\\AdsApi\\Dfp\\v201705\\ReconciliationReportRowPage',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'getReconciliationReportRowsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getReconciliationReportRowsByStatementResponse',
      'updateReconciliationReportRowsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateReconciliationReportRowsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/ReconciliationReportRowService?wsdl')
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
     * Gets a {@link ReconciliationReportRowPage} of {@link ReconciliationReportRow} objects that
     * satisfy the given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationReportRow#reconciliationReportId}</td>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link ReconciliationReportRow#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationReportRow#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemId}</td>
     * <td>{@link ReconciliationReportRow#lineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalLineItemId}</td>
     * <td>{@link ReconciliationReportRow#proposalLineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code creativeId}</td>
     * <td>{@link ReconciliationReportRow#creativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemCostType}</td>
     * <td>{@link ReconciliationReportRow#lineItemCostType}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpClicks}</td>
     * <td>{@link ReconciliationReportRow#dfpClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpImpressions}</td>
     * <td>{@link ReconciliationReportRow#dfpImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#dfpLineItemDays}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyClicks}</td>
     * <td>{@link ReconciliationReportRow#thirdPartyClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyImpressions}</td>
     * <td>{@link ReconciliationReportRow#thirdPartyImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#thirdPartyLineItemDays}</td>
     * </tr>
     * <tr>
     * <td>{@code manualClicks}</td>
     * <td>{@link ReconciliationReportRow#manualClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code manualImpressions}</td>
     * <td>{@link ReconciliationReportRow#manualImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code manualLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#manualLineItemDays}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciledClicks}</td>
     * <td>{@link ReconciliationReportRow#reconciledClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciledImpressions}</td>
     * <td>{@link ReconciliationReportRow#reconciledImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciledLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#reconciledLineItemDays}</td>
     * </tr>
     * </table>
     *
     * The {@code reconciliationReportId} field is required and can only be combined with an
     * {@code AND} to other conditions. Furthermore, the results may only belong to
     * one {@link ReconciliationReport}.
     *
     * filter a set of reconciliation report rows
     *
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\ReconciliationReportRowPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getReconciliationReportRowsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationReportRowsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationReportRow} which belong to same
     * {@link ReconciliationReport}.
     *
     * @param \Google\AdsApi\Dfp\v201705\ReconciliationReportRow[] $reconciliationReportRows
     * @return \Google\AdsApi\Dfp\v201705\ReconciliationReportRow[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateReconciliationReportRows(array $reconciliationReportRows)
    {
      return $this->__soapCall('updateReconciliationReportRows', array(array('reconciliationReportRows' => $reconciliationReportRows)))->getRval();
    }

}

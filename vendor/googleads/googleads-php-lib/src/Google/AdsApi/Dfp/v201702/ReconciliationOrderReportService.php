<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationOrderReportService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'Money' => 'Google\\AdsApi\\Dfp\\v201702\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'ReconciliationOrderReportAction' => 'Google\\AdsApi\\Dfp\\v201702\\ReconciliationOrderReportAction',
      'ReconciliationOrderReport' => 'Google\\AdsApi\\Dfp\\v201702\\ReconciliationOrderReport',
      'ReconciliationOrderReportPage' => 'Google\\AdsApi\\Dfp\\v201702\\ReconciliationOrderReportPage',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'SubmitReconciliationOrderReports' => 'Google\\AdsApi\\Dfp\\v201702\\SubmitReconciliationOrderReports',
      'ReconciliationError' => 'Google\\AdsApi\\Dfp\\v201702\\ReconciliationError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RevertReconciliationOrderReports' => 'Google\\AdsApi\\Dfp\\v201702\\RevertReconciliationOrderReports',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201702\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'getReconciliationOrderReportsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getReconciliationOrderReportsByStatementResponse',
      'performReconciliationOrderReportActionResponse' => 'Google\\AdsApi\\Dfp\\v201702\\performReconciliationOrderReportActionResponse',
      'updateReconciliationOrderReportsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\updateReconciliationOrderReportsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/ReconciliationOrderReportService?wsdl')
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
     * Gets an {@link ReconciliationOrderReportPage} of {@link ReconciliationOrderReport} objects
     * that satisfy the given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationOrderReport#reconciliationReportId}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ReconciliationOrderReport#id}</td>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationOrderReport#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ReconciliationOrderReport#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ReconciliationOrderReport#status}</td>
     * </tr>
     * <tr>
     * <td>{@code submissionDateTime}</td>
     * <td>{@link ReconciliationOrderReport#submissionDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code submitterId}</td>
     * <td>{@link ReconciliationOrderReport#submitterId}</td>
     * </tr>
     * </table>
     *
     * The {@code reconciliationReportId} field is required and can only be combined with an
     * {@code AND} to other conditions. Furthermore, the results may only belong to
     * one {@link ReconciliationReport}.
     *
     * a set of reconciliation order reports.
     *
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\ReconciliationOrderReportPage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getReconciliationOrderReportsByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationOrderReportsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on the {@link ReconciliationOrderReport} objects that match the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationOrderReport#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ReconciliationOrderReport#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationOrderReport#reconciliationReportId}</td>
     * </tr>
     * </table>
     * The following statement patterns are supported:
     * <ul>
     * <li>reconciliationReportId = :reconciliationReportId AND orderId = :orderId</li>
     * <li>reconciliationReportId = :reconciliationReportId AND proposalId = :proposalId</li>
     * <li>reconciliationReportId = :reconciliationReportId
     * AND (orderId IN (...) OR proposalId IN (...))</li>
     * </ul>
     * The IN clause could be expanded to multiple OR expressions like
     * (orderId = :orderId OR orderId = :orderId OR ...)
     * Only orders to which the API user has access will be included.
     *
     * one reconciliation report.
     *
     * @param \Google\AdsApi\Dfp\v201702\ReconciliationOrderReportAction $reconciliationOrderReportAction
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function performReconciliationOrderReportAction(\Google\AdsApi\Dfp\v201702\ReconciliationOrderReportAction $reconciliationOrderReportAction, \Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('performReconciliationOrderReportAction', array(array('reconciliationOrderReportAction' => $reconciliationOrderReportAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationOrderReport reconciliation order reports}
     * which belong to a {@link ReconciliationReport}.
     *
     * {@link ReconciliationOrderReport reconciliation order reports} to update
     *
     * @param \Google\AdsApi\Dfp\v201702\ReconciliationOrderReport[] $reconciliationOrderReports
     * @return \Google\AdsApi\Dfp\v201702\ReconciliationOrderReport[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function updateReconciliationOrderReports(array $reconciliationOrderReports)
    {
      return $this->__soapCall('updateReconciliationOrderReports', array(array('reconciliationOrderReports' => $reconciliationOrderReports)))->getRval();
    }

}

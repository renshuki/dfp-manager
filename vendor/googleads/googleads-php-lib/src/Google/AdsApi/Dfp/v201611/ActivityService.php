<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ActivityService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'Activity' => 'Google\\AdsApi\\Dfp\\v201611\\Activity',
      'ActivityError' => 'Google\\AdsApi\\Dfp\\v201611\\ActivityError',
      'ActivityPage' => 'Google\\AdsApi\\Dfp\\v201611\\ActivityPage',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'createActivitiesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createActivitiesResponse',
      'getActivitiesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getActivitiesByStatementResponse',
      'updateActivitiesResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateActivitiesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/ActivityService?wsdl')
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
     * Creates a new {@link Activity} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\Activity[] $activities
     * @return \Google\AdsApi\Dfp\v201611\Activity[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function createActivities(array $activities)
    {
      return $this->__soapCall('createActivities', array(array('activities' => $activities)))->getRval();
    }

    /**
     * Gets an {@link ActivityPage} of {@link Activity} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Activity#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Activity#name}</td>
     * </tr>
     * <tr>
     * <td>{@code expectedURL}</td>
     * <td>{@link Activity#expectedURL}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Activity#status}</td>
     * </tr>
     * <tr>
     * <td>{@code activityGroupId}</td>
     * <td>{@link Activity#activityGroupId}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\ActivityPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getActivitiesByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getActivitiesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Activity} objects.
     *
     * @param \Google\AdsApi\Dfp\v201611\Activity[] $activities
     * @return \Google\AdsApi\Dfp\v201611\Activity[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateActivities(array $activities)
    {
      return $this->__soapCall('updateActivities', array(array('activities' => $activities)))->getRval();
    }

}

<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldValue extends \Google\AdsApi\Dfp\v201611\BaseCustomFieldValue
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\Value $value
     */
    protected $value = null;

    /**
     * @param int $customFieldId
     * @param \Google\AdsApi\Dfp\v201611\Value $value
     */
    public function __construct($customFieldId = null, $value = null)
    {
      parent::__construct($customFieldId);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Value
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Value $value
     * @return \Google\AdsApi\Dfp\v201611\CustomFieldValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LongCreativeTemplateVariable extends \Google\AdsApi\Dfp\v201702\CreativeTemplateVariable
{

    /**
     * @var int $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     * @param int $defaultValue
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, $defaultValue = null)
    {
      parent::__construct($label, $uniqueName, $description, $isRequired);
      $this->defaultValue = $defaultValue;
    }

    /**
     * @return int
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param int $defaultValue
     * @return \Google\AdsApi\Dfp\v201702\LongCreativeTemplateVariable
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

}

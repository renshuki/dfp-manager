<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldOption
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $customFieldId
     */
    protected $customFieldId = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @param int $id
     * @param int $customFieldId
     * @param string $displayName
     */
    public function __construct($id = null, $customFieldId = null, $displayName = null)
    {
      $this->id = $id;
      $this->customFieldId = $customFieldId;
      $this->displayName = $displayName;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201611\CustomFieldOption
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomFieldId()
    {
      return $this->customFieldId;
    }

    /**
     * @param int $customFieldId
     * @return \Google\AdsApi\Dfp\v201611\CustomFieldOption
     */
    public function setCustomFieldId($customFieldId)
    {
      $this->customFieldId = $customFieldId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\Dfp\v201611\CustomFieldOption
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

}

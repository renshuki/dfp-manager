<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Location
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $canonicalParentId
     */
    protected $canonicalParentId = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @param int $id
     * @param string $type
     * @param int $canonicalParentId
     * @param string $displayName
     */
    public function __construct($id = null, $type = null, $canonicalParentId = null, $displayName = null)
    {
      $this->id = $id;
      $this->type = $type;
      $this->canonicalParentId = $canonicalParentId;
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
     * @return \Google\AdsApi\Dfp\v201611\Location
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\Dfp\v201611\Location
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getCanonicalParentId()
    {
      return $this->canonicalParentId;
    }

    /**
     * @param int $canonicalParentId
     * @return \Google\AdsApi\Dfp\v201611\Location
     */
    public function setCanonicalParentId($canonicalParentId)
    {
      $this->canonicalParentId = $canonicalParentId;
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
     * @return \Google\AdsApi\Dfp\v201611\Location
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

}

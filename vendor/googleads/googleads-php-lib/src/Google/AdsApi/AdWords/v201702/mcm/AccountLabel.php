<?php

namespace Google\AdsApi\AdWords\v201702\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AccountLabel
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct($id = null, $name = null)
    {
      $this->id = $id;
      $this->name = $name;
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
     * @return \Google\AdsApi\AdWords\v201702\mcm\AccountLabel
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201702\mcm\AccountLabel
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}

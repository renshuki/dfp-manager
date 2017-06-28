<?php

namespace Google\AdsApi\AdWords\v201609\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MoveOperation extends \Google\AdsApi\AdWords\v201609\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\mcm\ManagedCustomerLink $operand
     */
    protected $operand = null;

    /**
     * @var int $oldManagerCustomerId
     */
    protected $oldManagerCustomerId = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201609\mcm\ManagedCustomerLink $operand
     * @param int $oldManagerCustomerId
     */
    public function __construct($operator = null, $OperationType = null, $operand = null, $oldManagerCustomerId = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
      $this->oldManagerCustomerId = $oldManagerCustomerId;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\mcm\ManagedCustomerLink
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\mcm\ManagedCustomerLink $operand
     * @return \Google\AdsApi\AdWords\v201609\mcm\MoveOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return int
     */
    public function getOldManagerCustomerId()
    {
      return $this->oldManagerCustomerId;
    }

    /**
     * @param int $oldManagerCustomerId
     * @return \Google\AdsApi\AdWords\v201609\mcm\MoveOperation
     */
    public function setOldManagerCustomerId($oldManagerCustomerId)
    {
      $this->oldManagerCustomerId = $oldManagerCustomerId;
      return $this;
    }

}

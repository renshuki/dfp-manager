<?php

namespace Google\AdsApi\AdWords\v201702\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MutateMembersOperation extends \Google\AdsApi\AdWords\v201702\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201702\rm\MutateMembersOperand $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201702\rm\MutateMembersOperand $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201702\rm\MutateMembersOperand
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\rm\MutateMembersOperand $operand
     * @return \Google\AdsApi\AdWords\v201702\rm\MutateMembersOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}

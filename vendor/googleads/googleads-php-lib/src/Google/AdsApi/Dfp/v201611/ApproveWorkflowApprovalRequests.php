<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ApproveWorkflowApprovalRequests extends \Google\AdsApi\Dfp\v201611\WorkflowRequestAction
{

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @param string $comment
     */
    public function __construct($comment = null)
    {
      $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Google\AdsApi\Dfp\v201611\ApproveWorkflowApprovalRequests
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

}

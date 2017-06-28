<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RequestApprovalProgressAction extends \Google\AdsApi\Dfp\v201611\ProgressAction
{

    /**
     * @var int $approverId
     */
    protected $approverId = null;

    /**
     * @var long[] $eligibleApproverUserIds
     */
    protected $eligibleApproverUserIds = null;

    /**
     * @var long[] $eligibleApproverTeamIds
     */
    protected $eligibleApproverTeamIds = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\DateTime $evaluationTime
     * @param string $evaluationStatus
     * @param int $approverId
     * @param long[] $eligibleApproverUserIds
     * @param long[] $eligibleApproverTeamIds
     * @param string $comment
     * @param string $approvalStatus
     */
    public function __construct($evaluationTime = null, $evaluationStatus = null, $approverId = null, array $eligibleApproverUserIds = null, array $eligibleApproverTeamIds = null, $comment = null, $approvalStatus = null)
    {
      parent::__construct($evaluationTime, $evaluationStatus);
      $this->approverId = $approverId;
      $this->eligibleApproverUserIds = $eligibleApproverUserIds;
      $this->eligibleApproverTeamIds = $eligibleApproverTeamIds;
      $this->comment = $comment;
      $this->approvalStatus = $approvalStatus;
    }

    /**
     * @return int
     */
    public function getApproverId()
    {
      return $this->approverId;
    }

    /**
     * @param int $approverId
     * @return \Google\AdsApi\Dfp\v201611\RequestApprovalProgressAction
     */
    public function setApproverId($approverId)
    {
      $this->approverId = $approverId;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getEligibleApproverUserIds()
    {
      return $this->eligibleApproverUserIds;
    }

    /**
     * @param long[] $eligibleApproverUserIds
     * @return \Google\AdsApi\Dfp\v201611\RequestApprovalProgressAction
     */
    public function setEligibleApproverUserIds(array $eligibleApproverUserIds)
    {
      $this->eligibleApproverUserIds = $eligibleApproverUserIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getEligibleApproverTeamIds()
    {
      return $this->eligibleApproverTeamIds;
    }

    /**
     * @param long[] $eligibleApproverTeamIds
     * @return \Google\AdsApi\Dfp\v201611\RequestApprovalProgressAction
     */
    public function setEligibleApproverTeamIds(array $eligibleApproverTeamIds)
    {
      $this->eligibleApproverTeamIds = $eligibleApproverTeamIds;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201611\RequestApprovalProgressAction
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\Dfp\v201611\RequestApprovalProgressAction
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserTeamAssociation extends \Google\AdsApi\Dfp\v201702\UserRecordTeamAssociation
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @param int $teamId
     * @param string $overriddenTeamAccessType
     * @param string $defaultTeamAccessType
     * @param int $userId
     */
    public function __construct($teamId = null, $overriddenTeamAccessType = null, $defaultTeamAccessType = null, $userId = null)
    {
      parent::__construct($teamId, $overriddenTeamAccessType, $defaultTeamAccessType);
      $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Google\AdsApi\Dfp\v201702\UserTeamAssociation
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}

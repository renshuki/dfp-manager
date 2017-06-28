<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProgrammaticCreative extends \Google\AdsApi\Dfp\v201705\Creative
{

    /**
     * @var boolean $isSafeFrameCompatible
     */
    protected $isSafeFrameCompatible = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201705\Size $size
     * @param string $previewUrl
     * @param string $policyViolations
     * @param \Google\AdsApi\Dfp\v201705\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201705\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201705\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $isSafeFrameCompatible
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $isSafeFrameCompatible = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
    }

    /**
     * @return boolean
     */
    public function getIsSafeFrameCompatible()
    {
      return $this->isSafeFrameCompatible;
    }

    /**
     * @param boolean $isSafeFrameCompatible
     * @return \Google\AdsApi\Dfp\v201705\ProgrammaticCreative
     */
    public function setIsSafeFrameCompatible($isSafeFrameCompatible)
    {
      $this->isSafeFrameCompatible = $isSafeFrameCompatible;
      return $this;
    }

}

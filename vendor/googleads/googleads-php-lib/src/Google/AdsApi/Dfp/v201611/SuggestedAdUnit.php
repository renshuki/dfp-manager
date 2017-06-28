<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SuggestedAdUnit
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var int $numRequests
     */
    protected $numRequests = null;

    /**
     * @var string[] $path
     */
    protected $path = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\AdUnitParent[] $parentPath
     */
    protected $parentPath = null;

    /**
     * @var string $targetWindow
     */
    protected $targetWindow = null;

    /**
     * @var string $targetPlatform
     */
    protected $targetPlatform = null;

    /**
     * @var \Google\AdsApi\Dfp\v201611\AdUnitSize[] $suggestedAdUnitSizes
     */
    protected $suggestedAdUnitSizes = null;

    /**
     * @param string $id
     * @param int $numRequests
     * @param string[] $path
     * @param \Google\AdsApi\Dfp\v201611\AdUnitParent[] $parentPath
     * @param string $targetWindow
     * @param string $targetPlatform
     * @param \Google\AdsApi\Dfp\v201611\AdUnitSize[] $suggestedAdUnitSizes
     */
    public function __construct($id = null, $numRequests = null, array $path = null, array $parentPath = null, $targetWindow = null, $targetPlatform = null, array $suggestedAdUnitSizes = null)
    {
      $this->id = $id;
      $this->numRequests = $numRequests;
      $this->path = $path;
      $this->parentPath = $parentPath;
      $this->targetWindow = $targetWindow;
      $this->targetPlatform = $targetPlatform;
      $this->suggestedAdUnitSizes = $suggestedAdUnitSizes;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumRequests()
    {
      return $this->numRequests;
    }

    /**
     * @param int $numRequests
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setNumRequests($numRequests)
    {
      $this->numRequests = $numRequests;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPath()
    {
      return $this->path;
    }

    /**
     * @param string[] $path
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setPath(array $path)
    {
      $this->path = $path;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\AdUnitParent[]
     */
    public function getParentPath()
    {
      return $this->parentPath;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\AdUnitParent[] $parentPath
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setParentPath(array $parentPath)
    {
      $this->parentPath = $parentPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetWindow()
    {
      return $this->targetWindow;
    }

    /**
     * @param string $targetWindow
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setTargetWindow($targetWindow)
    {
      $this->targetWindow = $targetWindow;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetPlatform()
    {
      return $this->targetPlatform;
    }

    /**
     * @param string $targetPlatform
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setTargetPlatform($targetPlatform)
    {
      $this->targetPlatform = $targetPlatform;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\AdUnitSize[]
     */
    public function getSuggestedAdUnitSizes()
    {
      return $this->suggestedAdUnitSizes;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\AdUnitSize[] $suggestedAdUnitSizes
     * @return \Google\AdsApi\Dfp\v201611\SuggestedAdUnit
     */
    public function setSuggestedAdUnitSizes(array $suggestedAdUnitSizes)
    {
      $this->suggestedAdUnitSizes = $suggestedAdUnitSizes;
      return $this;
    }

}

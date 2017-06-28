<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomCreativeAsset
{

    /**
     * @var string $macroName
     */
    protected $macroName = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\CreativeAsset $asset
     */
    protected $asset = null;

    /**
     * @param string $macroName
     * @param \Google\AdsApi\Dfp\v201702\CreativeAsset $asset
     */
    public function __construct($macroName = null, $asset = null)
    {
      $this->macroName = $macroName;
      $this->asset = $asset;
    }

    /**
     * @return string
     */
    public function getMacroName()
    {
      return $this->macroName;
    }

    /**
     * @param string $macroName
     * @return \Google\AdsApi\Dfp\v201702\CustomCreativeAsset
     */
    public function setMacroName($macroName)
    {
      $this->macroName = $macroName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function getAsset()
    {
      return $this->asset;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\CreativeAsset $asset
     * @return \Google\AdsApi\Dfp\v201702\CustomCreativeAsset
     */
    public function setAsset($asset)
    {
      $this->asset = $asset;
      return $this;
    }

}

<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeAsset
{

    /**
     * @var int $assetId
     */
    protected $assetId = null;

    /**
     * @var base64Binary $assetByteArray
     */
    protected $assetByteArray = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var int $fileSize
     */
    protected $fileSize = null;

    /**
     * @var string $assetUrl
     */
    protected $assetUrl = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\Size $size
     */
    protected $size = null;

    /**
     * @var \Google\AdsApi\Dfp\v201702\ClickTag[] $clickTags
     */
    protected $clickTags = null;

    /**
     * @var string $imageDensity
     */
    protected $imageDensity = null;

    /**
     * @param int $assetId
     * @param base64Binary $assetByteArray
     * @param string $fileName
     * @param int $fileSize
     * @param string $assetUrl
     * @param \Google\AdsApi\Dfp\v201702\Size $size
     * @param \Google\AdsApi\Dfp\v201702\ClickTag[] $clickTags
     * @param string $imageDensity
     */
    public function __construct($assetId = null, $assetByteArray = null, $fileName = null, $fileSize = null, $assetUrl = null, $size = null, array $clickTags = null, $imageDensity = null)
    {
      $this->assetId = $assetId;
      $this->assetByteArray = $assetByteArray;
      $this->fileName = $fileName;
      $this->fileSize = $fileSize;
      $this->assetUrl = $assetUrl;
      $this->size = $size;
      $this->clickTags = $clickTags;
      $this->imageDensity = $imageDensity;
    }

    /**
     * @return int
     */
    public function getAssetId()
    {
      return $this->assetId;
    }

    /**
     * @param int $assetId
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setAssetId($assetId)
    {
      $this->assetId = $assetId;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getAssetByteArray()
    {
      return $this->assetByteArray;
    }

    /**
     * @param base64Binary $assetByteArray
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setAssetByteArray($assetByteArray)
    {
      $this->assetByteArray = $assetByteArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setFileSize($fileSize)
    {
      $this->fileSize = $fileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetUrl()
    {
      return $this->assetUrl;
    }

    /**
     * @param string $assetUrl
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setAssetUrl($assetUrl)
    {
      $this->assetUrl = $assetUrl;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\Size
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\Size $size
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\ClickTag[]
     */
    public function getClickTags()
    {
      return $this->clickTags;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\ClickTag[] $clickTags
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setClickTags(array $clickTags)
    {
      $this->clickTags = $clickTags;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageDensity()
    {
      return $this->imageDensity;
    }

    /**
     * @param string $imageDensity
     * @return \Google\AdsApi\Dfp\v201702\CreativeAsset
     */
    public function setImageDensity($imageDensity)
    {
      $this->imageDensity = $imageDensity;
      return $this;
    }

}

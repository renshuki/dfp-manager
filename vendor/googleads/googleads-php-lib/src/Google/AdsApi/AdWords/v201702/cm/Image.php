<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Image extends \Google\AdsApi\AdWords\v201702\cm\Media
{

    /**
     * @var base64Binary $data
     */
    protected $data = null;

    /**
     * @param int $mediaId
     * @param string $type
     * @param int $referenceId
     * @param \Google\AdsApi\AdWords\v201702\cm\Media_Size_DimensionsMapEntry[] $dimensions
     * @param \Google\AdsApi\AdWords\v201702\cm\Media_Size_StringMapEntry[] $urls
     * @param string $mimeType
     * @param string $sourceUrl
     * @param string $name
     * @param int $fileSize
     * @param string $creationTime
     * @param string $MediaType
     * @param base64Binary $data
     */
    public function __construct($mediaId = null, $type = null, $referenceId = null, array $dimensions = null, array $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null, $data = null)
    {
      parent::__construct($mediaId, $type, $referenceId, $dimensions, $urls, $mimeType, $sourceUrl, $name, $fileSize, $creationTime, $MediaType);
      $this->data = $data;
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param base64Binary $data
     * @return \Google\AdsApi\AdWords\v201702\cm\Image
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}

<?php

namespace Google\AdsApi\AdWords\v201609\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CompetitionSearchParameter extends \Google\AdsApi\AdWords\v201609\o\SearchParameter
{

    /**
     * @var string $levels
     */
    protected $levels = null;

    /**
     * @param string $SearchParameterType
     * @param string $levels
     */
    public function __construct($SearchParameterType = null, $levels = null)
    {
      parent::__construct($SearchParameterType);
      $this->levels = $levels;
    }

    /**
     * @return string
     */
    public function getLevels()
    {
      return $this->levels;
    }

    /**
     * @param string $levels
     * @return \Google\AdsApi\AdWords\v201609\o\CompetitionSearchParameter
     */
    public function setLevels($levels)
    {
      $this->levels = $levels;
      return $this;
    }

}

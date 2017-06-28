<?php

namespace Google\AdsApi\AdWords\v201609\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RuleItemGroup
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\rm\RuleItem[] $items
     */
    protected $items = null;

    /**
     * @param \Google\AdsApi\AdWords\v201609\rm\RuleItem[] $items
     */
    public function __construct(array $items = null)
    {
      $this->items = $items;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\rm\RuleItem[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\rm\RuleItem[] $items
     * @return \Google\AdsApi\AdWords\v201609\rm\RuleItemGroup
     */
    public function setItems(array $items)
    {
      $this->items = $items;
      return $this;
    }

}

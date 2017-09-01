<?php 

class Dfp_Manager_AdUnit {

  private $code;
  private $name;
  private $description;
  private $sizes;
  private $target_window;
  private $placements;
  private $adsense;
  private $frequency_cap;
  private $refresh_rate;

  public function __construct() {
  }

  public function get_code() {
    return $this->code;
  }

  public function get_name() {
    return $this->name;
  }

  public function get_description() {
    return $this->description;
  }

}
<?php

require_once __DIR__ . "/Product.php";

class PetHouse extends Product {
  use Material;
  
  private $location;

  public function setLocation(string $location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
}
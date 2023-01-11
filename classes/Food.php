<?php

require_once __DIR__ . "/Product.php";
class Food extends Product {
  private $expiration_date;

  public function setExpiration(string $_expiration_date) {
    $this->expiration_date = $_expiration_date;
  }
  public function getExpiration() {
    return $this->expiration_date;
  }
}

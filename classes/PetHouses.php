<?php

require_once __DIR__ . "/CatsDogs.php";

class Habitat {
  public $name;
  public $description;
  public $type;
  private $price;

  public function __generator(string $_name, string $_description, string $_type) {
    $this->name = $_name;
    $this->description = $_description;
    $this->type = $_type;
  }
  public function setPrice(float $price) {
    $this->price = $price . "€";
  }
  public function getPrice(){
    return $this->price;
  }
}

$habitat = [
  new Habitat("cuccia", "cuccia per cani", "cani"),
  new Habitat("gabbia da viaggio", "gabbia da viaggio per gattino", "gatti"),
  new Habitat("gabbia", "gabbia per cani", "cani"),
  new Habitat("torre", "habitat a parete per gatti", "gatti")
];

$habitat[0]->setPrice(149.99);
$habitat[1]->setPrice(49.99);
$habitat[2]->setPrice(49.99);
$habitat[3]->setPrice(199.99);

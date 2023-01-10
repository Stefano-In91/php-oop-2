<?php

class Game {
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

$game = 
[
  new Game("palla", "palla per cani", "cani"),
  new Game("topolino", "ottimo topolino per gattino", "gatti"),
  new Game("corda annodate", "corda annodata da mordere per cani", "cani"),
  new Game("puppolo", "puppolo per gatti", "gatti")
];

$game[0]->setPrice(5.99);
$game[1]->setPrice(9.99);
$game[2]->setPrice(2.99);
$game[3]->setPrice(99.99);
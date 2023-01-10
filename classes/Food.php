<?php

require_once __DIR__ . "/CatsDogs.php";

class Food {
  public $name;
  public $description;
  public $expiration_date;
  public $type;
  private $price;

  public function __generator(string $_name, string $_description, string $_expiration_date, string $_type) {
    $this->name = $_name;
    $this->description = $_description;
    $this->expiration_date = $_expiration_date;
    $this->type = $_type;
  }
  public function setPrice(float $price) {
    $this->price = $price . "€";
  }
  public function getPrice(){
    return $this->price;
  }
}

$food = [
  new Food("crocchette", "crocchette per cani", "17/06/2023", "cani"),
  new Food("pesciolini", "ottimi pesciolini per gattini", "23/02/2023", "gatti"),
  new Food("carne di pollo", "pollo per cani", "24/02/2023", "cani"),
  new Food("crocchette", "crocchette per gatti", "17/05/2023", "gatti")
];

$food[0]->setPrice(9.99);
$food[1]->setPrice(14.99);
$food[2]->setPrice(4.99);
$food[3]->setPrice(9.99);

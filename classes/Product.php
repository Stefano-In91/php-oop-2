<?php

require_once __DIR__ . "/Category.php";

class Product extends Category{
  private $name;
  private $description;
  private $type;
  private $price;
  private $category;

  public function __construct(string $name, string $description, string $type, float $price, $category){
    $this->name = $name;
    $this->description = $description;
    $this->type = $type;
    $this->price = $price . "€";
    $this->category = $category;
  }

  public function getName() {
    return $this->name;
  }
  public function getDescription() {
    return $this->description;
  }
  public function getType() {
    return $this->type;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getCategory(){
    return $this->category;
  }

}

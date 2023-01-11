<?php

require_once __DIR__ . "/Category.php";

class Product extends Category{
  private $name;
  private $description;
  private $price;
  private $category;

  public function __construct(string $name, string $description, float $price, $category){
    $this->name = $name;
    $this->description = $description;
    $this->price = $price . "€";
    $this->category = $category;
  }

  public function getName() {
    return $this->name;
  }
  public function getDescription() {
    return $this->description;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getCategory(){
    return $this->category;
  }

}
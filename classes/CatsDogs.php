<?php

class Category {
  public $type;

  public function __generator(string $_animal){
    $this->type = $_animal;
  }
}

$category = [
  new Category("gatti"),
  new Category("cani")
];
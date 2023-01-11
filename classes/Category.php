<?php

class Category {
  private $name;
  private $icon;

  public function __construct(string $animal, string $icon){
    $this->name = $animal;
    $this->icon = $icon;
  }

  public function getName() {
    return $this->name;
  }
  public function getIcon() {
    return $this->icon;
  }
}
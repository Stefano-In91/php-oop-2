<?php

trait Material {
  private $material;

  public function setMaterial(string $material) {
    $this->material = $material;
  }
  public function getMaterial() {
    if(!isset($this->material)) {
      throw new Exception("probabilmente... plastica?");
    }
    return $this->material;
  }
}
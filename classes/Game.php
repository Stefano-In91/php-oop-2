<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../traits/Material.php";

class Game extends Product {
  use Material;
}
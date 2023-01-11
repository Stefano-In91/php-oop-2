<?php

require_once __DIR__ . "/../classes/Category.php";
require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Food.php";
require_once __DIR__ . "/../classes/Game.php";
require_once __DIR__ . "/../classes/PetHouse.php";


// Categories
$dog = new Category("cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("gatto", "<i class=\"fa-solid fa-cat\"></i>");

// Products
$product = [
  new Product("collare", "collare per gatti", 1.5, $cat),
  new Product("collare", "collare per cani", 1.5, $dog)
];

// Foods
$food = [
  new Food("crocchette", "buone", 2.4, $cat)
];
$food[0]->setExpiration("22/12/2025");


// Games
$game = [
  new Game("corda", "corda da mordere per cani", 14.99, $dog),
  new Game("topolino", "topolino da gioco per gatti", 29.99, $cat)
];
$game[0]->setMaterial("corda");

// Pet Houses
$pet_house = [
  new PetHouse("cuccia", "cuccia per cani", 199.99, $dog)
];
$pet_house[0]->setLocation("da esterno");
$pet_house[0]->setMaterial("legno");

// Initialized Product Arrays
$products = [
  $product,
  $food,
  $game,
  $pet_house,
];
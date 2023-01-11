<?php

require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";

$dog = new Category("cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("gatto", "<i class=\"fa-solid fa-cat\"></i>");

$product = new Product("collare", "collare per gatti", "gatti", 1.5, $cat);

$food = new Food("crocchette", "buone", "gatti", 2.4, $cat);
$food->setExpiration("22/12/2025");

$products = [
  $product,
  $food
];

var_dump($dog);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <?php foreach($products as $item) { ?>
      <h2> <?php echo $item->getName() ?> </h2>
      <?php echo $item->getCategory()->getIcon() ?>
      <p> <?php echo $item->getDescription() ?> </p>
      <p> <?php echo $item->getPrice() ?> </p>
      <?php if(method_exists($item, "getExpiration")) { ?>
        <p> Scadenza: <?php echo $item->getExpiration() ?> </p>
      <?php } ?>

    <?php } ?>
  </body>
</html>
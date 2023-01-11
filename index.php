<?php

require_once __DIR__ . "/data/DatabaseInit.php";

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
    <?php foreach($products as $item_array) {
      foreach($item_array as $item) {?>
      <h2> <?php echo ucfirst($item->getName()) ?> </h2>
      <?php echo $item->getCategory()->getIcon() ?>
      <p> <?php echo ucfirst($item->getDescription()) ?> </p>
      <?php if(method_exists($item, "getLocation")) { ?>
        <p> Posizionamento: <?php echo $item->getLocation() ?> </p>
      <?php } ?>
      <?php if(method_exists($item, "getMaterial")) { ?>
        <p> Materiale: <?php try {
          echo ucfirst($item->getMaterial()); 
          } catch (Exception $e) {
          echo "Attenzione, " . $e->getMessage();
          }?> </p>
      <?php } ?>
      <?php if(method_exists($item, "getExpiration")) { ?>
        <p> Scadenza: <?php echo $item->getExpiration() ?> </p>
      <?php } ?>
      <p> <?php echo $item->getPrice() ?> </p>

    <?php }} ?>
  </body>
</html>
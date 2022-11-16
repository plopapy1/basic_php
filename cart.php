<?php

$products = array(
    ["Iphone 6", 5, 80000],
    ["Samsung s8", 3, 128000],
    ["Binatone Blender", 7, 22000]
);

function format_money(float $money)
{
    return "&#x20A6;" . number_format($money);
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>cart</h1>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th >Product name</th>
      <th >Quantity</th>
      <th >Price</th>
      <th >Total</th>

    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product[0]; ?> </td>
            <td><?php echo $product[1]; ?></td>
            <td><?php echo format_money($product[2]); ?></td>
            <td><?php echo format_money($product[1] * $product[2]); ?></td>

         </tr>
    <?php } ?>

    
   
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

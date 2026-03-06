<?php 
$status = "student";
$unit_price = 20;
$quantity = 6;
$product = "Expresso";
$price = $unit_price * $quantity;

if ($quantity > 5) { 
    $price -= $quantity;
}

if ($status == "student") {
    $price *= 0.80;
}
?>

<style>
table, th, td {
border: 1px solid black;
}
th , td {
  width: 200px;
}
</style>

<table >
 <thead>
   <tr>
   <th>Quantity</th>
   <th>Product</th>
   <th>Unit price</th>
   </tr>
 </thead>
 <tbody>
   <tr>
   <td><?= $quantity ?></td>
   <td><?= $product ?></td>
   <td><?= $unit_price?></td>
   </tr>
 </tbody>
 <tfoot>
   <tr >
     <td colspan="2">Totale Price :  <?= $price?> DH</td> 
   </tr>
 </tfoot>
</table>
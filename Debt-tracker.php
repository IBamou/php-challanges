<?php
$Debtors = ["Ahmed" => 1088,
"Mahmoud"=> 150,
"Ilyas"=> 30,
"Brahim"=> 50,
"Soufian"=> 100,
];

$total = 0;
foreach( $Debtors as $name => $money) {
    $total += $money;
}
?>

<style>
table {
            width: 70%;
    margin:auto;
 }
table, th, td {
border: 1px solid black;
}
th , td {
  width: 200px;
  text-align: center;
  vertical-align: middle;
}
h1 {
    width: 30%;
    margin:auto;
    margin-bottom: 20px;
}
</style>
<h1>Debt Tracker</h1>
<table >
 <thead>
   <tr>
   <th>Friends</th>
   <th>Owed Money</th>
   </tr>
 </thead>
 <tbody>
    <?php foreach($Debtors as $name=>$money){ ?>
    <tr>
        <?php if($money > 100){ ?>
        <td> <mark><?=$name?></mark> </td>
        <td><?= $money?> DH</td>
        <?php } else {?>
        <td> <?=$name?> </td>
        <td><?= $money?> DH</td>
        <?php }?>
    </tr>
    <?php } ?>
 </tbody>
 <tfoot>
   <tr >
     <td colspan="2">Totale Money Owed : <?= $total ?> DH</td> 
   </tr>
 </tfoot>
</table>
<h6 style="text-align: center">note : The highlighted names refer to whos Owes more than 100 DH </h6>
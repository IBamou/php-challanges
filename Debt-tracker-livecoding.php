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

echo "Friends : Owed Money<br>";
echo "---------------------------<br>";
foreach( $Debtors as $name => $money) {
    if ($money > 100) {
        echo"<mark> $name </mark> : $money  DH <br>";
    }
    else {
        echo" $name :  $money  DH <br>";
    }
}
echo "---------------------------<br>";
echo "Totale owed money : $total DH <br>";
echo "---------------------------<br>";
echo "note : The highlighted names refer to whos Owes more than 100 DH ";
?>

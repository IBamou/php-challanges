<?php

$age = 200;

if ($age > 0) {
    if ($age < 12) {
        $price = 20; 
    } 
    else if ($age <= 18){ 
        $price = 40;
    } 
    else if ($age > 60){ 
        $price = 30;
    } 
    else {
        $price = 60;
    }
    echo "<h2>Your ticket price is $price. </h2>";
    echo $age < 12 ? "Special: Children's Menu included!" : "";
}
else { echo "Invalid age"; }

?> 
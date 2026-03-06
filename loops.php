<?php 
echo "------------------------------- The Linear Counter ------------------------------<br>";
$i = 1;
while ($i <= 10) {
    echo "$i </br>";
    $i++;
}
echo "------------------------------- Reverse Countdown ------------------------------<br>";
$i = 10;
while ($i >= 1) {
    echo "$i </br>";
    $i--;
}
echo "------------------------------- Even Number Detector ------------------------------<br>";
$i = 1;
while ($i <= 20) {
    if ($i % 2 == 0) {
       echo "$i </br>";
    }
    $i++; 
}
echo "-------------------------------  Even Number Counter ------------------------------<br>";
$i = 1;
$counter = 0;
while ($i <= 50) {
    if ($i % 2 == 0) {
        $counter++;
    }
    $i++;
}
echo "Even Number count between  1 - 50 is $counter number<br>";
echo "-------------------------------  Star Printer --------------------------------------------<br>";
$i = 1;
while ($i <= 10) {
    echo "*";
    $i++;
}
echo "<br>";
echo "-------------------------------   Growing Triangle --------------------------------------------<br>";

for ($i=0; $i <= 5 ;$i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}
?>
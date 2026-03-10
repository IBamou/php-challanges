<?php 
// challange 1
function  greetUser($name) {
    echo "Hello $name, ready to code!";
}

$name = "Ilyas\n";
greetUser($name);

// challange 2
function calculateArea($width, $height) {
    return $width * $height;
}

$width = 20;
$height = 10;
$totalArea = calculateArea($width, $height);
echo "The total area is $totalArea square units\n";

// challange 3
function IsAdult($age) {

    if ($age > 0) {
        if ($age < 18) {
        return false; 

        } else {
            return true;
        }
    } 
    return null; 

}

$age = 20;
if (IsAdult($age)) {
    echo "Access Granted.\n";
} else { 
    echo "Access Denied\n";
}

// challange 4
function  multiplyNumbers($a, $b)  {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b ;
}
    return "\nError: Invalid Input\n";
}
echo multiplyNumbers(5, 10);
echo multiplyNumbers(5, "apple");

// challange 5
function manualReverse($text) {
    $reversed_text = "";
    for ($i=0; $i < strlen($text); $i++) { 
        $reversed_text .= $text[strlen($text) - 1 - $i];
    }
    return $reversed_text;
}
$text = "Ilyas";
echo manualReverse($text);
?>
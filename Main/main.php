<?php
session_start();
$products = [
"computer" => 100,
"smartphone"=> 200,
"tablet"=> 300,
];
$_SESSION['cart'] = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["products"])) {
    $input_products = $_POST["products"];
    foreach ($input_products as $product) {
        if (!in_array( $product,$_SESSION['cart'])) {
            array_push($_SESSION['cart'],$product);

    } } }
    foreach ($_SESSION['cart'] as $product) {
        echo $product;

    } 
}
$_SESSION["counter"] = count( $_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <main>
    <form action='<?= $_SERVER['PHP_SELF']?>' method="POST">
        <?php foreach ($products as $product => $price):?>
            <input type="checkbox" name="products[]" id="product" value="<?= $product ?>">
            <label for="product"><?= $product ?></label>
        <?php endforeach;?>
        <button type="submit">submit</button>
    </form>
   </main> 
</body>
</html>
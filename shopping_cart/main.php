<?php
session_start();
$products = [
'Apple iPhone 15'=> 100,
'Dell Latitude 7420'=> 200,
'Intel Wireless Adapter' => 300,
];
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"] ?? null;
    if (isset($products[$product])) {
        if(!in_array($product, haystack: $_SESSION["cart"])) {
            $_SESSION["cart"][] = $product;
        }
    } 
}
$counter = count($_SESSION["cart"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <div class="cart-counter">Cart items: <?= $counter ?> item<?= $counter > 1 ? 's' : '' ?></div>
        <?php foreach ($products as $name => $price) : ?>
            <form class="product" action='<?= $_SERVER['PHP_SELF'] ?>' method="POST">
                <br>
                <label for='<?= $name ?>'>
                        <span><?= htmlspecialchars(string: $name) ?></span>
                        <span><?= $price ?>$</span>
                </label>
                <input type="hidden" id='<?= $name ?>' name="product" value='<?= $name ?>'>
                <button type="submit" <?= in_array($name, haystack: $_SESSION["cart"]) ? 'disabled' : ''  ?>>add to cart</button>
                <br>
            </form>
        <?php endforeach?>
        <a class="go-to-cart" href="cart.php">Go to cart</a>
    </main>
</body>
</html>
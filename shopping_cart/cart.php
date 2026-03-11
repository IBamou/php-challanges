<?php 
session_start();
$show_cart = true;
$products = [
'Apple iPhone 15'=> 100,
'Dell Latitude 7420'=> 200,
'Intel Wireless Adapter' => 300,
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["deleteCart"])) {
        session_destroy();
        $show_cart = false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
<body>
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <a href="main.php">← Go Back</a>
        <div class="cart-items">
            <?php if ($show_cart && isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
                <?php foreach ($_SESSION['cart'] as $product_name): 
                    $price = $products[$product_name];
                ?>
                    <div class="cart-item">
                        <span><?= htmlspecialchars($product_name) ?></span>
                        <span><?= $price ?>$</span>
                    </div>
                <?php endforeach; ?>
                <form action='<?= $_SERVER['PHP_SELF'] ?>' method="POST">
                    <input type="hidden" name="deleteCart" value="deleteCart">
                    <button type="submit" class="button">Delete Cart</button>
                </form>
            <?php else: ?>
                <p class="empty-cart">Your cart is empty.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link"  href="/php-challanges/IT_products.php/?category=computer">Computers</a>
    <a class="nav-link"  href="/php-challanges/IT_products.php/?category=smartphone">Smartphones</a>
    <a class="nav-link"  href="/php-challanges/IT_products.php/?category=gaming">Gaming</a>
    <a class="nav-link"  href="/php-challanges/IT_products.php/?category=tablet">Tablet</a>
    <a class="nav-link"  href="/php-challanges/IT_products.php/?category=peripheral">Peripheral</a>
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sort</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/php-challanges/IT_products.php/?category=<?= isset($_GET['category']) ? $_GET['category'] : ''?>&sort=asc">A to Z</a></li>
      <li><a class="dropdown-item" href="/php-challanges/IT_products.php/?category=<?= isset($_GET['category']) ? $_GET['category'] : ''?>&sort=desc">Z to A</a></li>
    </ul>
  </div>
</nav>
<!-- ------------------------------------------------------------------------------------------------------------- -->
<?php 
$computer = [
    "Acer Aspire 5",
    "Asus ZenBook 14",
    "Apple MacBook Air",
    "Dell Latitude 7420",
    "Dynabook Tecra A40",
    "ECS Liva Mini PC",
    "Fujitsu LifeBook U7412",
    "Framework Laptop 13",
    "Gigabyte Aero 16",
    "HP EliteBook 840",
    "Huawei MateBook D15",
    "Intel NUC 13",
    "IBall CompBook M500",
    "Jumper EZbook X3",
    "LG Gram 16",
    "Lenovo ThinkPad X1 Carbon",
    "Microsoft Surface Laptop 5",
    "MSI Prestige 14",
    "Nokia PureBook X14",
    "Origin PC EVO15"
];
$smartphone = [
    "Apple iPhone 15",
    "Asus ROG Phone 8",
    "BlackBerry Key2",
    "Google Pixel 8",
    "Honor Magic 6",
    "Huawei P60",
    "Infinix Zero 30",
    "IQOO 12",
    "Lenovo Legion Phone Duel",
    "Motorola Edge 40",
    "Nokia X30",
    "Nothing Phone 2",
    "OnePlus 12",
    "Oppo Find X7",
    "Poco F5",
    "Realme GT 6",
    "Samsung Galaxy S24",
    "Sony Xperia 1 V",
    "Tecno Phantom X2",
    "Vivo X100"
];
$gaming = [
    "AMD Ryzen 9 Processor",
    "Bluetooth Gaming Headset",
    "Corsair Mechanical Keyboard",
    "Dell Ultrasharp Monitor",
    "EVGA GeForce RTX 4070",
    "Fractal Design PC Case",
    "Gigabyte Motherboard",
    "HyperX Cloud II Headset",
    "Intel Core i7 CPU",
    "Joystick Controller",
    "Kingston RAM 16GB",
    "Logitech G502 Mouse",
    "MSI Gaming Laptop",
    "Nintendo Switch",
    "OLED Gaming Monitor",
    "PlayStation 5",
    "Quad-Core CPU Cooler",
    "Razer BlackWidow Keyboard",
    "Seagate SSD 1TB",
    "TP-Link Gaming Router"
];
$tablet = [
    "Apple iPad Pro",
    "Blackview Tab 12",
    "Chuwi HiPad X",
    "Dell Latitude Tablet",
    "Amazon Fire HD 10",
    "Fujitsu Stylistic Q",
    "Google Pixel Tablet",
    "Huawei MatePad Pro",
    "ILife Tab 11",
    "Jumper EZpad 6",
    "Lenovo Tab P11",
    "Microsoft Surface Go",
    "Nokia T20 Tablet",
    "Onda V10 Pro",
    "Panasonic Toughpad",
    "Realme Pad Mini",
    "Samsung Galaxy Tab S8",
    "Teclast T40 Plus",
    "Vankyo MatrixPad S20",
    "XP-Pen Artist Pro Tablet"
];
$peripheral = [
    "Apple Magic Mouse",
    "Brother Printer",
    "Canon Scanner",
    "Dell Monitor Stand",
    "Epson Ink Cartridge",
    "Fujitsu Document Scanner",
    "HP USB Hub",
    "Intel Wireless Adapter",
    "Jabra Speakerphone",
    "Kingston USB Flash Drive",
    "Logitech Webcam",
    "Microsoft Ergonomic Keyboard",
    "Netgear Ethernet Switch",
    "Oki LED Printer",
    "Panasonic External Hard Drive",
    "Seagate External SSD",
    "TP-Link Network Adapter",
    "Ugreen Docking Station",
    "VTech Conference Phone",
    "Wacom Drawing Tablet"
];

function show_products_category($category){
    echo "<br>";
    echo "<ul>";
    foreach ($category as $product) {
        echo "<li>$product</li>";
    }
    echo "</ul>";
}
if (isset($_GET["category"])) {
    $category = $_GET["category"];
    if (isset($_GET["sort"])){
        $sort_type = $_GET["sort"];
        if ($sort_type == "asc"){
            sort($$category);
        }elseif ($sort_type == "desc"){
            rsort($$category);
        }
    }
    show_products_category($$category) ;
}

?>
<!-- ----------------------------------------------------------------------------------------------------------------------- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'db.php';
$min_price = 100;
try {
    $sql = "SELECT * FROM library_books WHERE price > :price";
    $stmt = $db ->prepare($sql);
    $stmt -> execute([':price' => $min_price]);
    $books = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>All books where the price is greater than 100$</h3>';

    foreach ($books as $book) {
        echo  '<ul id="book_' . $book['id'] . '">';
        echo "<li>";
            echo '<label for="book_' . $book['id'] . '">' . htmlspecialchars($book['title']) . '</label>';
        echo "</li>";
        echo "<li>".$book["author"]."</li>";
        echo "<li>".$book["status"]."</li>";
        echo "<li>".$book["price"]." $</li>";
        echo "<li>".$book["published_year"]."</li>"; 
        echo "</ul>";  
    }
} catch (Exception $e) {
    echo ''. $e->getMessage() .'';
}
?>
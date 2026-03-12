<?php
include 'main.php';
try {
    $sql = "SELECT title, price FROM library_books WHERE price >= 100 AND price <= 300";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
}  catch (PDOException $e) {
    echo "". $e->getMessage();
}
?>
<br>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td>
                <?= $book['price'] !== null ? number_format($book['price'], 2) : 'Donated' ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
include 'main.php';
try {
    $sql = "SELECT title, author, published_year, status, price FROM library_books WHERE status <> 'lost' ORDER BY published_year DESC";
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
            <th>Author</th>
            <th>published_year</th>
            <th>Status</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['author']) ?></td>
            <td><?= htmlspecialchars($book['published_year']) ?></td>
            <td><?= htmlspecialchars($book['status']) ?></td>
            <td>
                <?= $book['price'] !== null ? number_format($book['price'], 2) : 'Donated' ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
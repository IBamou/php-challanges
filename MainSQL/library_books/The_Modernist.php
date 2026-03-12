<?php
include 'main.php';
try {
    $sql = "SELECT title, published_year FROM library_books WHERE published_year >= 2020";
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
            <th>Published Year</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['published_year']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
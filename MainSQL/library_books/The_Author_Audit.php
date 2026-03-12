<?php
include 'main.php';
try {
    $sql = "SELECT DISTINCT author FROM library_books;";
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
            <th>Authors</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['author']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
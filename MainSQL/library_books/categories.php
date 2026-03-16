<!--  -->
<?php
include 'main.php';

// Define Categories
$categories = [
    ['id' => 1,'name'=> 'PHP & MySQL'],
    ['id' => 2,'name'=> 'PHP Core'],
    ['id' => 3,'name'=> 'PHP Beginner Guide'],
];
function columnExists($db, $table, $column) {
    $stmt = $db->query("SHOW COLUMNS FROM $table LIKE '$column'");
    return $stmt->fetch() !== false;
}



try {
    $sql = "CREATE TABLE IF NOT EXISTS categories (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(150) NOT NULL
    )";
    $db->exec($sql);
} catch (PDOException $e) {
    echo "Categories table error: " . $e->getMessage();
}

// // 2️⃣ Use the correct table name (library_books)
$tableName = "library_books";

// // 3️⃣ Add category_id column if not exists
try {
    if (!columnExists($db, $tableName, 'category_id')) {
        $sql = "ALTER TABLE $tableName ADD COLUMN category_id INT";
        $db->exec($sql);
}
} catch (PDOException $e) {
    echo "Add column error: " . $e->getMessage();
}

// 4️⃣ Add foreign key constraint
try {
    $sql = "ALTER TABLE $tableName
            ADD CONSTRAINT fk_category
            FOREIGN KEY (category_id) REFERENCES categories(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE";
    $db->exec($sql);
} catch (PDOException $e) {
    // This might throw error if the FK already exists; you can ignore or check manually
}


// inserting data in categories
try {
    $count = $db->query("SELECT COUNT(*) FROM categories")->fetchColumn();
    if ($count ==  0) {
    $sql = "INSERT INTO categories (id, name)
    VALUES(:id, :name) ";
    foreach ($categories as $category) {
        $stmt = $db->prepare($sql);
        $stmt->execute([
        ':id' => $category['id'],
        ':name' => $category['name'],
    ]); 
    } }

}  catch (PDOException $e) {
    echo "". $e->getMessage();
}

try {
    // Prepare insert statement once
    $insertSql = "UPDATE library_books SET category_id = :category_id WHERE id = :id";
    $insertStmt = $db->prepare($insertSql);

    foreach ($books as $book) {
        $category = $book["category"];

        // Safely select category ID
        $selectSql = "SELECT id FROM categories WHERE name LIKE :category LIMIT 1";
        $selectStmt = $db->prepare($selectSql);
        $selectStmt->execute([':category' => "%$category%"]);
        $category_row = $selectStmt->fetch(PDO::FETCH_ASSOC);

        if ($category_row) {
            $category_id = $category_row['id'];
            $id = $book['id'];

            // Insert category_id
            $insertStmt->execute([':category_id' => $category_id, ':id'=> $id]);
        } else {
            echo "Category not found for book: " . $book['title'] . "<br>";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



try {
    $sql = 'SELECT l.title, c.name FROM library_books l INNER JOIN categories c ON l.category_id = c.id;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $info = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo ''. $e->getMessage() .'';
}
?>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Books</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($info as $in): ?>
        <tr>
            <td><?= htmlspecialchars($in['title']) ?></td>
            <td><?= htmlspecialchars($in['name']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

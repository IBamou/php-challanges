<?php
include 'db.php';
$title = 'PHP: The Complete Reference';
$author = 'Steven Holzner';
$price = 30;

try {
    $sql = "INSERT INTO library_books (title, author, price) VALUES (:title, :author, :price)";
    $stmt = $db ->prepare($sql);
    $stmt -> execute([':title' => $title,
                      ':author'=> $author,
                      ':price'=> $price,
                      
    ]);
    $lastId = $db->lastInsertId();

    // Echo success message
    echo "Success! Book added with ID: $lastId";
} catch (Exception $e) {

    echo ''. $e->getMessage() .'';
    
}
?>
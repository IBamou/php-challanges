<?php
$host = "localhost";
$dbname="mydb";
$user = "root";
$password = "";
$books = [
    [
        "id" => 1,
        "title" => "PHP & MySQL: Novice to Ninja",
        "author" => "Kevin Yank",
        "published_year" => 2021,
        "status" => "Available",
        "price" => 250.00,
        "category" => 'PHP & MySQL',
    ],
    [
        "id" => 2,
        "title" => "Modern PHP: New Features and Good Practices",
        "author" => "Josh Lockhart",
        "published_year" => 2022,
        "status" => "Available",
        "price" => 30.50,
        "category"=> "PHP Core",
    ],
    [
        "id" => 3,
        "title" => "The PHP Cookbook",
        "author" => "David Sklar",
        "published_year" => 2019,
        "status" => "Borrowed",
        "price" => 50.75,
        "category"=> "PHP Core",
    ],
    [
        "id" => 4,
        "title" => "Learning PHP, MySQL & JavaScript",
        "author" => "Robin Nixon",
        "published_year" => 2020,
        "status" => "Available",
        "price" => 200.00,
        "category" => 'PHP & MySQL',
    ],
    [
        "id" => 5,
        "title" => "Donated PHP Beginner's Guide",
        "author" => "Unknown",
        "published_year" => 2023,
        "status" => "Available",
        "price" => NULL,  // donated book
        "category" => "PHP Beginner Guide",
    ],
    [
        "id" => 6,
        "title" => "PHP Objects, Patterns, and Practice",
        "author" => "MATT ZANDSTRA",
        "published_year" => 2021,
        "status" => "Lost",
        "price" => 275.00,
        "category"=> "PHP Core",
    ],
    [
        "id" => 7,
        "title" => "PHP in Action",
        "author" => "David Sklar",  // same author as id 3
        "published_year" => 2018,
        "status" => "Borrowed",
        "price" => 150.00,
        "category"=> "PHP Core",
    ],
    [
        "id" => 8,
        "title" => "Beginning PHP and MySQL",
        "author" => "W. Jason Gilmore",
        "published_year" => 2020,
        "status" => "Available",
        "price" => 190.00,
        "category" => 'PHP & MySQL',
    ],
    [
        "id" => 9,
        "title" => "PHP & MySQL for Dynamic Web Sites",
        "author" => "Larry Ullman",
        "published_year" => 1950,  // one book from 1950
        "status" => "Available",
        "price" => 210.00,
        "category" => 'PHP & MySQL',
    ]
];
// Setup connection 
try {
    $db = new PDO("mysql:host=$host", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "". $e->getMessage();
} 
 
// Create the database if not exists
try {
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
  $db->exec($sql);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "". $e->getMessage();
}

// Setup connection to mydb 
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "". $e->getMessage();
} 
 
// Creating the library_books table
try {
    $sql = "CREATE TABLE IF NOT EXISTS  library_books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(150) NOT NULL,
    author VARCHAR(100) DEFAULT 'unknown',
    published_year YEAR DEFAULT Null,
    status ENUM('Available', 'Borrowed',  'Lost') DEFAULT 'Available',
    price DECIMAL(10, 2)
    )";
    $db->exec($sql);
}  catch (PDOException $e) {
    echo "". $e->getMessage();
}
// Insering data in he library_books table

try {
    $count = $db->query("SELECT COUNT(*) FROM library_books")->fetchColumn();
    if ($count ==  0) {
    $sql = "INSERT INTO library_books (id, title, author, published_year, status, price)
    VALUES(:id, :title, :author, :published_year, :status, :price) ";
    foreach ($books as $book) {
        $stmt = $db->prepare($sql);
        $stmt->execute([
        ':id' => $book['id'],
        ':title' => $book['title'],
        ':author' => $book['author'],
        ':published_year' => $book['published_year'],
        ':status' => $book['status'],
        ':price' => $book['price']
    ]); 
    } }

}  catch (PDOException $e) {
    echo "". $e->getMessage();
}

?>


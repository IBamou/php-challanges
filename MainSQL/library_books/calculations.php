<?php
include 'main.php';


try {
    $sql = 'SELECT SUM(price) AS total_price FROM library_books';
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    
    $info = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_price = $info['total_price'];

    echo "The Total Of Prices : $total_price$<br>";

} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $sql = "SELECT COUNT(title) AS totale_books FROM library_books WHERE status LIKE :status";
    $stmt = $db->prepare($sql);
    $stmt->execute([':status' => '%available%']); 
    
    $info = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_books = $info['totale_books'];

    echo "<br>The Number Of Books With Status Availables is : $total_books<br>";

} catch (Exception $e) {
    echo $e->getMessage();
}


try {
    $sql = "SELECT title, price FROM library_books WHERE price = (SELECT MAX(price) FROM library_books) OR price = (SELECT MIN(price) FROM library_books)";
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>The most expensive and the cheapest books</h3>';
    foreach ($books as $book) {
        $title = $book['title'];
        $price = $book['price'];
        echo "Book : $title  : $price$<br>";
    }


} catch (Exception $e) {
    echo $e->getMessage();
}


try {
    $sql = " SELECT AVG(price) AS average_price FROM library_books;";
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    $info = $stmt->fetch(PDO::FETCH_ASSOC);
    $average_price = $info["average_price"];
    echo "<br>The average price of all books in library is $average_price$<br>";


} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $sql = "SELECT status, COUNT(*) AS total_books FROM library_books GROUP BY status";
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>Books In Each status</h3>';
    foreach ($books as $book) {
        $title = $book['status'];
        $total_books= $book['total_books'];
        echo "status : $title : $total_books books<br>";
    }



} catch (Exception $e) {
    echo $e->getMessage();
}


try {
    $sql = "SELECT author, SUM(price) AS total_values FROM library_books GROUP BY author";
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>Show the total value of books owned by each author</h3>';
    foreach ($books as $book) {
        $author = $book['author'];
        $total_values = $book['total_values'];
        if ( strtolower($author) === 'unknown') {
            continue;
    }
        echo "Author : $author : $total_values $<br>";

    }

} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $sql = "SELECT author, SUM(price) AS total_values FROM library_books GROUP BY author HAVING total_values > 50";
    $stmt = $db->prepare($sql);
    $stmt->execute(); 
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>Show only the authors whose total book value is greater than 50$</h3>';
    foreach ($books as $book) {
        $author = $book['author'];
        $total_values = $book['total_values'];
        if ( strtolower($author) === 'unknown') {
            continue;
    }
        echo "Author : $author : $total_values $<br>";

    }

} catch (Exception $e) {
    echo $e->getMessage();
}


?>
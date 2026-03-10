<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="main.php" method="POST">
        <label for="1">name</label>
        <input type="text" id="1">
        <br>
        <label for="2">email</label>
        <input type="text" id="2" name="email">
        <br>
        <label for="3">textarea</label>
        <textarea name="" id="3"></textarea>
        <button type="submit">submit</button>
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        echo str_contains($email,'@') ?'valid':'invalid';
    }
    ?>
</body>
</html>
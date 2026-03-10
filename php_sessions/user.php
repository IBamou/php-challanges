<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessins</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_name = $_POST['user_name'] ?? null;

            $name_error_message = "User name must contain letters only";
            $name_error = !ctype_alpha($user_name) ? "<p> $name_error_message </p>" : '';

            if (!$name_error) {
                $_SESSION['user_name'] = $user_name;
                header("Location: lang.php");
                exit;
            }
        }
    ?>
    <main>
    <form action='<?= $_SERVER['PHP_SELF'] ?>' method="POST">
        <label for="user_name">User Name</label>
        <input type="text" id="user_name" name="user_name" value='<?= $_POST['user_name'] ?? ''?>' required>
        <?= $name_error ?? ''?>
        <button type="submit">submit</button>
    </form>
    </main>
</body>
</html>


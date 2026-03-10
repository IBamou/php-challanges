<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_email = $_POST['email'] ?? null;
            $user_name = $_POST['user_name'] ?? null;

            $email_error_message = "Please enter a valid email containing @";
            $name_error_message = "User name must contain letters only";;

            $email_error = !str_contains($user_email, '@') ? "<p> $email_error_message </p>" : '';
            $name_error = !ctype_alpha($user_name) ? "<p> $name_error_message </p>" : '';
        }
    ?>
    <main>
    <form action='<?= $_SERVER['PHP_SELF'] ?>' method="POST">
        <br>
        <label for="user_name">User Name</label>
        <input type="text" id="user_name" name="user_name" value='<?= $_POST['user_name'] ?? ''?>' required>
        <?= $name_error ?? ''?>
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        <?= $email_error ?? ''?>
        <br>
        <label for="message">Message</label>
        <textarea id="message" name="text"></textarea>
        <br>
        <button type="submit">submit</button>  
    </form>
    </main>
</body>
</html>


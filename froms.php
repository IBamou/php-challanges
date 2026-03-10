<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <style>
/* General form style */
form {
    max-width: 400px;       /* Limit width */
    margin: 40px auto;      /* Center on page */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
}

/* Label styling */
form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Input & textarea styling */
form input[type="text"],
form textarea {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
    font-family: inherit;
}

/* Textarea specific */
form textarea {
    resize: vertical; /* allow vertical resize only */
    min-height: 80px;
}

/* Submit button */
form button {
    padding: 10px 20px;
    background-color: #007bff; /* nice blue */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

/* Hover effect */
form button:hover {
    background-color: #0056b3;
}

/* Optional: spacing before form */
form br {
    display: none; /* remove unnecessary <br> spacing */
}

/* Error message style */
p {
    color: #e72222;        /* Red text */
    font-size: 0.9em;      /* Slightly smaller */
    margin-top: -10px;     /* Adjust spacing above */
    margin-bottom: 10px;   /* Spacing below input */
    font-family: Arial, sans-serif;
}
</style>
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

    </main>
    </form>

</body>
</html>


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Sessins</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
</head>
<body>
<?php
$progLangs = [
    "Python","JavaScript","Java","C","C++","C#","Go","Rust",
    "Ruby","PHP","Swift","Kotlin","TypeScript","R","MATLAB",
    "Scala","Perl","Dart","Haskell","Shell"
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $FavProgLan = $_POST['FavProgLan'] ?? null;
        $_SESSION['FavProgLan'] = $FavProgLan;
        header("Location: message.php");
        exit;
}
?>
<form  action='<?= $_SERVER['PHP_SELF'] ?>' method="POST">
<label for="proglangs">Favorite Programming Language</label>
<select class="form-select" id="progLangs" name="FavProgLan" required>
      <option selected value="PHP">Choose a Language</option>
      <?php foreach($progLangs as $progLang): ?>
      <option value="<?= htmlspecialchars($progLang) ?>"><?= htmlspecialchars($progLang) ?></option>
    <?php endforeach; ?>
</select>
<button class="lang-btn" type="submit">submit</button>
</form>
</body>
</html>
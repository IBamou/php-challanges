
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sessins</title>
  <style>
  /* Apply to whole page */
  html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #89f7fe, #66a6ff);
    font-family: 'Arial', sans-serif;
  }

  /* H1 styling */
  h2 {
    font-size: 5rem;
    color: #ffffff;
    text-align: center;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
    letter-spacing: 2px;
    animation: pulse 2s infinite;
  }

  /* Optional subtle animation */
  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.04); }
  }
</style>
</head>
<body>
<?php 
session_start();
$user = $_SESSION["user_name"];
$Language = $_SESSION["FavProgLan"];
echo "<h2>Hello $user, you love $Language!</h2>";
session_unset();
session_destroy();
?>

</body>
</html>


<?php 
  $user = $_COOKIE['auth_user'];

  if(!isset($user)) {
    header('Location: /login.php');
  }

  // Decode the string back into array
  $user = json_decode($user, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="/css/lib.css" />
  <link rel="stylesheet" href="/css/global.css" />
</head>
<body>
  <div class="wrapper">
    <main class="boilerform">
      <h1 class="heading">Home</h1>
      <p>Welcome, <strong><?php echo $user['name']; ?>.</strong></p>
      <a href="/logout.php" class="c-button">Logout</a>
    </main>
  </div>
</body> 
</html>

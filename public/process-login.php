<?php 

// Load our database connection
require_once  __DIR__ . '/includes/db-connect.php';

// Filter the post data
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password = filter_var($_POST['password']);

// Generate our SQL statement. We don't need to escape the password
// because we are hashing it, so anything malicious will be stripped
$sql = 'SELECT `id`, `name` ' .
  'FROM `users` ' .
  'WHERE `email` = "' . $db->escape_string($email) . '" AND `password` = "' . md5($password) . '"';

// Load the result and create empty user variable
$result = mysqli_query($db, $sql);
$user = null;

// If there was a row, set the empty user variable to be the user data
if(mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);  
}

// Set the user in the cookie by converting the array into a string
if(isset($user)) {
  setcookie('auth_user', json_encode($user), (time() + 3600));
  header('Location: /');
}

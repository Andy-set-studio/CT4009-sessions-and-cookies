<?php 

// DB connection gives us a $db global variable
require_once  'includes/db-connect.php';

// Grab name and comment from $_POST
$name = filter_var($_POST['name']);
$comment = filter_var($_POST['comment']);

$sql = 'INSERT INTO comments ' .
  '(`name`, `comment`) ' .
  'VALUES ' .
  '("' . $db->escape_string($name) . '", "'. $db->escape_string($comment) . '")';

$result = mysqli_query($db, $sql);

// If the comment was inserted, redirect to the homepage where it'll be shown
if($result) {
  header('Location: /');
  die();
}

die('There was an error inserting the comment');

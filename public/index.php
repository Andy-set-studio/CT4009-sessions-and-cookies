<?php 
  $comments = [];
  include './includes/load-comments.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comments</title>
  <link rel="stylesheet" href="/css/lib.css" />
  <link rel="stylesheet" href="/css/global.css" />
</head>
<body>
  <div class="wrapper">
    <main>
      <h1 class="heading">Comments</h1>
      <?php include './includes/comment-list.php'; ?>
      <form method="POST" action="/post-comment.php" class="comment-form boilerform">
        <div>
          <label class="c-label" for="name">Name</label>
          <input type="text" name="name" id="name" class="c-input-field" autocomplete="off" />
        </div>
        <div>
          <label class="c-label" for="comment">Add a comment</label>
          <textarea name="comment" id="comment" rows="5" class="c-input-field c-input-field--multiline"></textarea>
        </div>
        <div>
          <button type="submit" class="c-button">Submit comment</button>
        </div>
      </form>
    </main>
  </div>
</body> 
</html>

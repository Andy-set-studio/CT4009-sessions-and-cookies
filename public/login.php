<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/lib.css" />
  <link rel="stylesheet" href="/css/global.css" />
</head>
<body>
  <div class="wrapper">
    <main>
      <h1 class="heading">Login</h1>
      <form method="POST" action="/process-login.php" class="form boilerform">
        <div>
          <label class="c-label" for="email">Email</label>
          <input type="email" name="email" id="email" class="c-input-field" autocomplete="off" />
        </div>
        <div>
          <label class="c-label" for="password">Password</label>
          <input type="password" name="password" id="password" class="c-input-field" autocomplete="off" />
        </div>
        <div>
          <button type="submit" class="c-button">Login</button>
        </div>
      </form>
    </main>
  </div>
</body> 
</html>

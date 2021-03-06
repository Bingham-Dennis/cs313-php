<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/stylesheet.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="./src/home.js"></script>
  <title>Movies Plus | Home</title>
</head>
<body>
  <div id="topNav">
    <h1 id="logo">Movies Plus</h1>
  </div>
  <div id="loginCard">
    <div id="loginImage"></div>
    <form id="login" action="./connect.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" minlength="8" required>
        <button type="submit">Login</button>
        <h4 id="signUpLink"><a href="./register.php">SIGN UP</a></h4>
    </form>
  </div>
</body>
</html>

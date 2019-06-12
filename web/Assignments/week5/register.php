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
  <title>Movies Plus | Registration</title>
</head>
<body>
  <div id="topNav">
    <h1 id="logo">Movies Plus</h1>
  </div>
  <div id="registerCard">
    <form id="register" action="./registration.php" method="POST">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" minlength="8" required>
        <input type="password" name="confirmPass" placeholder="Confirm Password" minlength="8" required>
        <input type="password" name="pin" placeholder="Pin" minlength="4" maxlength="4" required>
        <input type="password" name="confirmPin" placeholder="Confirm Pin" minlength="4" maxlength="4" required>
        <button type="submit">Confirm Signup</button>
    </form>
  </div>
</body>
</html>

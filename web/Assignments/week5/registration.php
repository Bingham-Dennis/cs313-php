<?php
  try
  {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $ex)
  {
    echo 'Error!: ' . $ex->getMessage();
    die();
  }

  if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) &&
      isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPass']) &&
      isset($_POST['pin']) && isset($_POST['confirmPin'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
    $pin = $_POST['pin'];
    $confirmPin = $_POST['confirmPin'];

    $user = $db->prepare(
      'SELECT user_id
       FROM users
       WHERE fname=:fname AND
             lname=:lname AND
             username=:username');
    $user->bindValue(':fname', $fname, PDO::PARAM_STR);
    $user->bindValue(':lname', $lname, PDO::PARAM_STR);
    $user->bindValue(':username', $username, PDO::PARAM_STR);
    $user->execute();
    $id = $user->fetch(PDO::FETCH_ASSOC);

    if ($id === false && $password === $confirmPass && $pin === $confirmPin) {
      $newUser = $db->prepare(
        'INSERT INTO users
        (fname,
        lname,
        username,
        email,
        user_password,
        user_pin)
        VALUES
        (?, ?, ?, ?, ?, ?)'
      );
      $newUser->execute([$fname, $lname, $username, $email, $password, $pin]);
      header("Location: ./index.php");
    } else {
      header("Location: ./exists.html");
    }
  }
?>

<?php
  try
  {
    session_name('MoviesPlus');
    session_start();
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

  if(isset($_POST['username']) && isset($_POST['password']))
  {
    $givenUsername = $_POST['username'];
    $givenPassword = $_POST['password'];

    $user_id = $db->prepare('SELECT user_id FROM users WHERE username=:username');
    $user_id->bindValue(':username', $givenUsername, PDO::PARAM_STR);
    $user_id->execute();
    $id = $user_id->fetch(PDO::FETCH_ASSOC);

    $user_password = $db->prepare('SELECT user_password FROM users WHERE user_id=:id');
    $user_password->bindValue(':id', $id['user_id'], PDO::PARAM_INT);
    $user_password->execute();
    $password = $user_password->fetch(PDO::FETCH_ASSOC);
    if ($password['user_password'] === $givenPassword) {
      $_SESSION['Logged_in'] = true;
    } else {
      header("Location: ./index.php");
    }

    if(isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {
      $_SESSION['user'] = $givenUsername;
      $_SESSION['user_id'] = $id['user_id'];
      header("Location: ./dashboard.php");
    }

  } else {
    header("Location: ./index.php");
  }
?>

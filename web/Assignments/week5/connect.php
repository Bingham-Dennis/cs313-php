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

  if(isset($_POST['username']) && isset($_POST['password']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;
    $user_id = $db->prepare('SELECT user_id FROM users WHERE username=:username');
    $user_id->bindValue(':username', $username, PDO::PARAM_STR);
    $user_id->execute();
    $id = $user_id->fetch(PDO::FETCH_ASSOC);
    var_dump($id);

    $user_password = $db->prepare('SELECT user_password FROM users WHERE username=:username');
    $user_password->bindValue(':username', $username, PDO::PARAM_STR);
    $user_pasword->execute();
    $check = $user_id->fetchAll(PDO::FETCH_ASSOC);
    var_dump($check);
    // if ($check === $password) {
    //   echo 'Welcome ' . $username . ' Your user id is: ' . $id . ' and your password is: ' . $check;
    // }

  } else {

  }

?>

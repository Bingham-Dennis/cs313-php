<?php
//   session_name('MoviesPlus');
//   session_start();
//   $dbUrl = getenv('DATABASE_URL');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');

//   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }

// if(isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {
//   if(isset($_POST['file'])){
//     var_dump($_POST['file']);
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Plus | Upload Movie</title>
</head>
<body>
  <div id="topNav">
    <h1 id="logo">Movies Plus</h1>
  </div>
  <form action="uploadMovies.php" method="POST" enctype="multipart/form">
    <input type="file" name="file">
    <input type="submit" name="submit" value="upload">
  </form>
</body>
</html>

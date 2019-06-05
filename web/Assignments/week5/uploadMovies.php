<?php
  try {
    session_name('MoviesPlus');
    session_start();
    var_dump($_SESSION['Logged_in']);
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

  if(isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true && isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowedFile = array('mp4', 'm4v', 'mkv');

    var_dump($fileActualExt);
    var_dump($allowedFile);

    if (in_array($fileActualExt, $allowedFile)) {
      if ($fileError === 0) {
        if ($fileSize < 5000000) {
          $fileDestination = 'movie_files/'.$fileName;
          move_uploaded_file($fileTmpName, $fileDestination);
          header("Location: dashboard.php?uploadsuccess");
        } else {
          echo "file is too big...";
        }
      } else {
        echo "ERROR: file upload failed.";
      }
    } else {
      echo "File type not allowed, please upload a mp4, m4v, mkv.";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="./assets/stylesheet.css">
  <title>Movie Plus | Upload Movie</title>
</head>
<body>
  <div id="topNav">
    <h1 id="logo">Movies Plus</h1>
  </div>
  <form action="uploadMovies.php" method="POST" enctype="multipart/form" id="uploadForm">
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>
  </form>
</body>
</html>

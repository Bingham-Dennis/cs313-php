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

  var_dump($db);

  $result = $db->query('SELECT movie_id, user_id, title, release_date, rating, artwork, movie_file, file_ext FROM movies;');
  while ($row = $result->fetch(PDO::FETCH_ASSOC))
  {
    echo 'movie_id: ' . $row['movie_id'] . 'user_id ' . $row['user_id'] . 'title ' . $row['title'] . 'release_date' . $row['release_date'] . 'rating' . $row['rating'] . 'artwork' . $row['artwork'] . 'movie_file' . $row['movie_file'] . 'file_ext' . $row['file_ext'] . '<br/>';
  }
?>

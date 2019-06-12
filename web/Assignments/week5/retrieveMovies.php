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

   if (isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {
    $query = $db->prepare(
          'SELECT
            title
          , release_date AS releaseDate
          , rating
          , synopsis
          , artwork
          , movie_file AS movieFile
           FROM movies
           WHERE user_id=:user_id');
    $query->bindValue(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $query->execute();
    $movies = $query->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($movies);
   }

?>
